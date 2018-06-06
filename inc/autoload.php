<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 27/4/18
 * Time: 11:21 PM
 */
require_once ("config.php");

spl_autoload_register(function ($class_name) {
    $class = explode("_", $class_name);
    $path = implode("/", $class).".php";
    require_once($path);
});
?>