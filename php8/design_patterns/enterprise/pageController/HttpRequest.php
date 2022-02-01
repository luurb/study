<?php

namespace enterprise\pageController;

class HttpRequest extends Request
{
    public function init(): void
    {
        $this->properties = $_REQUEST;
        //$this->path = $_SERVER['PATH_INFO'];
        $this->path = getcwd();
        $this->path = (empty($this->path)) ? "/" : $this->path;
    }

    public function forward(string $path): void
    {
        header("location: {$path}");
        exit;
    }
}