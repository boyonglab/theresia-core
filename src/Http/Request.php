<?php
namespace Boyonglab\Theresia\Core\Http;

class Request {

    public function __construct()
    {

    }

    public function getHost(): string
    {
        return $_SERVER['HTTP_HOST'];
    }

    public function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function getPath(): string
    {
        return $_SERVER['PATH_INFO'] ?? '/';
    }

    public function getQuery(): string
    {
        return $_SERVER['QUERY_STRING'] ?? '';
    }

    public function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getIp(): string
    {
       return $_SERVER['REMOTE_ADDR'];
    }

    public function getPort(): string
    {
       return $_SERVER['REMOTE_PORT'];
    }

    public function getTime(): string
    {
       return $_SERVER['REQUEST_TIME'];
    }

    public function getCookie(): string
    {
       return $_SERVER['HTTP_COOKIE'];
    }

    public function getUserAgent(): string
    {
       return $_SERVER['HTTP_USER_AGENT'];
    }

    public function getServerName(): string
    {
       return $_SERVER['SERVER_NAME'];
    }

}
