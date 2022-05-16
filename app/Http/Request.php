<?php

namespace App\Http;

class Request
{
    private string $httpMethod;
    private string $uri;
    private array $queryParams = [];
    private array $postVar = [];
    private array $headers = [];
    private $router;

    public function __construct($router)
    {
        $this->router = $router;
        $this->queryParams = $_GET ?? [];
        $this->postVar = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->setUri();
    }

    private function setUri()
    {
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
        $xURI = explode('?', $this->uri);
        $this->uri = $xURI[0];
    }

    public function getRouter()
    {
        return $this->router;
    }

    public function getHttpMethod(): string
    {
        return $this->httpMethod;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    public function getPostVars(): array
    {
        return $this->postVar;
    }
}