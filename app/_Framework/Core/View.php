<?php

namespace App\_Framework\Core;

class View
{
    public static function redirect($url, $code = 200)
    {
        http_response_code($code);
        header("Location: /mvc/" . $url);
    }

    public function render($page, $args = [], $layouts = 'app')
    {
        ob_start();

        $path = __DIR__ . "/../Http/Views/pages/" . $page . ".php";

        if (file_exists($path)) {
            extract($args);
            require_once($path);
            $content = ob_get_clean();
            require_once  __DIR__ . "/../Http/Views/layouts/" . $layouts . ".php";
        }
    }
}
