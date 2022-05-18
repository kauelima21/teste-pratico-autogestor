<?php

function dd($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    die();
}

function assestsPath(string $path) {
    return getenv("URL_BASE") . "/" . $path;
}
