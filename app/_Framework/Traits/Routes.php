<?php

namespace App\_Framework\Traits;

trait Routes
{

    public function get($url, $collable)
    {
        $this->addRoute($url, $collable);
    }

    public function post($url, $collable)
    {
        $this->addRoute($url, $collable, "POST");
    }

    public function delete($url, $collable)
    {
        $this->addRoute($url, $collable, "DELETE");
    }

    public function put($url, $collable)
    {
        $this->addRoute($url, $collable, "PUT");
    }
}
