<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function base_path($location)
{
    return BASE_PATH . $location;
}

function view_path($folder, $viewLocation)
{
    return require base_path("view/{$folder}/{$viewLocation}");
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("view/errors/{$code}.php");

    die();

}
