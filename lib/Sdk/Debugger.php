<?php

/**
 * Tatum SDK Debugger
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 */
namespace Tatum\Sdk;

use Tatum\Sdk\Config;
use Tatum\Sdk\Psr7\Request;

class Debugger {
    // Sanitization data sources
    const SANITIZE_QUERY = "query";
    const SANITIZE_HEADERS = "headers";
    const SANITIZE_BODY = "body";

    /**
     * Configuration object
     *
     * @var \Tatum\Sdk\Config
     */
    protected $_config;

    /**
     * File handler
     *
     * @var resource|bool|null
     */
    protected $_fileHandler = null;

    /**
     * Debugger
     *
     * @param \Tatum\Sdk\Config $config
     */
    public function __construct(Config $config) {
        $this->_config = $config;
    }

    /**
     * Initialize the file handler once if the debugger is active
     *
     * @return bool|resource
     */
    protected function _init() {
        if ($this->_config->getDebug() && null === $this->_fileHandler) {
            $this->_fileHandler = @fopen($this->_config->getDebugFile(), "w");
        }

        return $this->_fileHandler;
    }

    /**
     * Print debug info
     *
     * @param mixed $data
     * @return void
     */
    public function print($data) {
        if ($this->_init()) {
            fwrite($this->_fileHandler, (is_string($data) ? $data : var_export($data, true)) . PHP_EOL);
        }
    }

    /**
     * Save a log delimiter tag
     *
     * @param string $tag
     * @param bool $endTag
     * @return void
     */
    public function logTag(string $tag, bool $endTag = false) {
        $this->print(
            str_pad(" <" . ($endTag ? "/" : "") . " $tag > ", 80, "#", STR_PAD_BOTH) . ($endTag ? PHP_EOL : "")
        );
    }

    protected function _sanitize(&$data, $source) {
        /**
         * Hide parts of string
         *
         * @param string $string Input
         * @return string Hidden input
         */
        $cleanUp = function ($string) {
            do {
                if (strlen($string) >= 10) {
                    $result = substr($string, 0, 3) . "---" . substr($string, -3);
                    break;
                }

                if (strlen($string) >= 5) {
                    $result = substr($string, 0, 1) . "---" . substr($string, -1);
                    break;
                }

                $result = str_repeat("-", strlen($string));
            } while (false);

            return $result;
        };

        // Go throught the data
        foreach ($data as $key => &$value) {
            if (preg_match("%^(?:mnemonic|x-api-key|.*?private.*?)$%i", $key)) {
                if (self::SANITIZE_HEADERS === $source || is_array($value)) {
                    foreach ($value as $vKey => $vData) {
                        $value[$vKey] = $cleanUp($vData);
                    }
                } else {
                    $value = $cleanUp($value);
                }
            }
        }
    }

    /**
     * Log a cURL request
     *
     * @param \Tatum\Sdk\Psr7\Request $request
     * @return void
     */
    public function logRequest(Request $request) {
        $eof = $this->_config->getDebugSanitizer() ? "\n" : " \\\n";

        // Prepare the uri
        $uri = "{$request->getUri()}";

        // Sanitize GET arguments
        if ($this->_config->getDebugSanitizer()) {
            parse_str($request->getUri()->getQuery(), $queryData);

            if (count($queryData)) {
                $this->_sanitize($queryData, self::SANITIZE_QUERY);
                $uri = $request->getUri()->getPath() . "?" . http_build_query($queryData);
            }
        }

        $curl = "curl --location --request {$request->getMethod()} '$uri'$eof";

        // Prepare the headers
        $headers = $request->getHeaders();
        $this->_config->getDebugSanitizer() && $this->_sanitize($headers, self::SANITIZE_HEADERS);
        foreach ($headers as $headerName => $headerValue) {
            $curl .= "--header '{$headerName}: " . implode("; ", $headerValue) . "'$eof";
        }

        // Body
        if ("POST" === $request->getMethod()) {
            // Multi-part form data
            if (count($request->getFiles())) {
                foreach ($request->getFiles() as $fieldName => $fileObject) {
                    $fileName = $this->_config->getDebugSanitizer()
                        ? basename($fileObject->getFilename())
                        : $fileObject->getFilename();
                    $curl .= "-F $fieldName=@{$fileName}$eof";
                }
            } else {
                // POST payload
                $body = "'{$request->getStream()}'";

                // Sanitizer on
                if ($this->_config->getDebugSanitizer()) {
                    $bodyJson = @json_decode($body, true);
                    if (is_array($bodyJson)) {
                        $this->_sanitize($bodyJson, self::SANITIZE_BODY);

                        // Legibility
                        $body = json_encode($bodyJson, JSON_PRETTY_PRINT);
                    }
                }

                $curl .= "--data-raw {$body}{$eof}";
            }
        }

        $this->print(trim($curl));
    }

    /**
     * Log a cURL response
     *
     * @param int    $statusCode
     * @param array  $headers
     * @param string $body
     * @param string $error
     * @return void
     */
    public function logResponse(int $statusCode, $headers, $body, $error) {
        // Status code
        $response = "Status code: $statusCode\n";

        // File download
        $fileDownload = false;

        // Response headers
        $response .= "Headers:\n";
        foreach ($headers as $headerName => $headerValue) {
            if (!preg_match("%^(?:content\-(?:type|length)|transfer-encoding|connection)%i", $headerName)) {
                continue;
            }

            if ("transfer-encoding" === strtolower(trim($headerName)) && "chunked" === strtolower(trim($headerValue))) {
                $fileDownload = true;
            }

            $response .= " * {$headerName}: {$headerValue}\n";
        }

        // Error
        if ($error) {
            $response .= "Error: {$error}\n";
        }

        // File download
        if ($fileDownload) {
            $response .= "Body: {binary data}";
        } else {
            // JSON payload
            $response .= "Body:\n";

            // Attempt decoding
            $bodyJson = @json_decode($body, true);
            if (null !== $bodyJson) {
                if ($this->_config->getDebugSanitizer() && is_array($bodyJson)) {
                    $this->_sanitize($bodyJson, self::SANITIZE_BODY);
                }
                $response .= json_encode($bodyJson, JSON_PRETTY_PRINT);
            } else {
                $response .= $body;
            }
        }

        $this->print($response);
    }
}
