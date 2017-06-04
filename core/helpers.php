<?php

function view($name, $data =[])
{
    extract($data);

    return require "views/{$name}.view.php";
}


function redirect($path = '')
{    
    header("Location: /{$path}");
}