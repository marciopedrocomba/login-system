<?php

spl_autoload_register('autoLoadFunc');

function autoLoadFunc($filename) {
    $path = "";
    $ext = ".php";
    $fullpath = $path.$filename.$ext;

    if(!file_exists($fullpath)) {
        echo 'Error: file not found';
    }

    require_once $fullpath;

}