<?php

namespace enterprise\pageController;

class Registry 
{
    private static ?Registry $instance = null;
    private ?Request $request = null;

    public static function instance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    public function getRequest(): Request
    {
        if (is_null($this->request)) {
            throw new \Exception("No Request set");
        }
        return $this->request;
    }
}