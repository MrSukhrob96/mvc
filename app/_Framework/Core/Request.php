<?php

namespace App\_Framework\Core;

use App\_Framework\Traits\UrlManager;

class Request
{
    use UrlManager;

    public function getMethod()
    {
        return strtoupper($_SERVER["REQUEST_METHOD"]);
    }

    public function getPath()
    {
        if (isset($_GET['url'])) {
            return $this->parse($_GET['url']);
        }
        return $this->parse('/');
    }
}
