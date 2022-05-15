<?php

namespace App\Http;

class Response
{
    private int $httpCode = 200;
    private array $headers = [];
    private string $contentType = 'text/html';
    private $content;

    public function __construct(int $httpCode, $content, string $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    public function setContentType($contentType): string
    {
        $this->contentType = $contentType;
        return $this->addHeader('Content-Type', $contentType);
    }

    public function addHeader(string $key, string $value): string
    {
        return $this->headers[$key] = $value;
    }

    private function sendHeaders()
    {
        http_response_code($this->httpCode);
        foreach ($this->headers as $key => $value) {
            header($key . ': ' . $value);
        }
    }

    public function sendResponse()
    {
        $this->sendHeaders();
        if ($this->contentType === 'text/html') {
            echo $this->content;
            exit;
        }
    }
}
