<?php

/**
 * HTTP Client
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */
namespace Tatum\Sdk\Psr7\Http;

use RuntimeException;
use InvalidArgumentException;
use Tatum\Sdk\Psr7\Response;
use Tatum\Sdk\Psr7\Request;
use Tatum\Sdk\Psr7\Exception\RequestException;

class Client {
    const HTTP_VERSIONS = [
        "1.0" => CURL_HTTP_VERSION_1_0,
        "1.1" => CURL_HTTP_VERSION_1_1,
        "2.0" => CURL_HTTP_VERSION_2_0
    ];

    /**
     * Send an HTTP request with CURL
     *
     * @param \Tatum\Sdk\Psr7\Request $request
     * @return \Tatum\Sdk\Psr7\Response
     * @throws \Tatum\Sdk\Psr7\Exception\RequestException
     */
    public static function send(Request $request): Response {
        // Prepare the headers
        $requestHeaders = [];
        $responseHeaders = [];
        foreach ($request->getHeaders() as $headerName => $headerValue) {
            $requestHeaders[] = "$headerName: " . implode("; ", $headerValue);
        }

        $options = [
            CURLOPT_URL => "{$request->getUri()}",
            CURLOPT_ENCODING => "utf-8",
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => $requestHeaders,
            CURLOPT_HEADERFUNCTION => function ($ch, $header) use (&$responseHeaders) {
                if ($pos = strpos($header, ":")) {
                    $responseHeaders[trim(substr($header, 0, $pos))] = trim(substr($header, $pos + 1));
                }
                return strlen($header);
            },
            CURLOPT_CUSTOMREQUEST => $request->getMethod(),
            CURLOPT_FAILONERROR => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => 5,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_HTTP_VERSION => isset(self::HTTP_VERSIONS[$request->getProtocolVersion()])
                ? self::HTTP_VERSIONS[$request->getProtocolVersion()]
                : CURL_HTTP_VERSION_NONE
        ];

        // POST payload
        if ("POST" === $request->getMethod()) {
            $options[CURLOPT_POSTFIELDS] = "{$request->getStream()}";
        }

        // Prepare request
        $curlHandle = curl_init();
        curl_setopt_array($curlHandle, $options);

        // Execute the request
        $stream = curl_exec($curlHandle);
        $error = curl_error($curlHandle);
        $info = curl_getinfo($curlHandle);
        curl_close($curlHandle);

        // Prepare the response object
        $response = new Response((int) $info["http_code"], $responseHeaders, "$stream", strval($info["http_version"]));

        // Invalid result
        if (200 !== $response->getStatusCode() || strlen($error)) {
            throw new RequestException($response, $error);
        }

        return $response;
    }
}