<?php
// helpers.php

function view($template, $data = [])
{
    extract($data);

    ob_start();
    require "views/$template.view.php";
    $content = ob_get_clean();

    require "views\layout.php";
}


function redirect($path)
{
    header("Location: $path");
    exit;
}
