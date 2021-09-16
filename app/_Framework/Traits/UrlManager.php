<?php

namespace App\_Framework\Traits;


trait UrlManager
{
    public function parse($url)
    {
        $url = trim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}
