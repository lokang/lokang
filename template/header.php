<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 24/6/17
 * Time: 10:20 PM
 */
ob_start();
$html = new Html();
$url = new Url();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <title><?php echo $html->title() ?></title>
    <link rel="stylesheet" href="../css/index.css" type="text/css">
</head>

<body>
<div id="header"
</div>
<div id="menu">
    <br/>
    <a href="/">Home</a>
    <a href="<?php echo $url->about(); ?>">About</a>
    <a href="<?php echo $url->user(); ?>">User</a>
    <a href="<?php echo $url->contact(); ?>">Contact</a>
    <a href="<?php echo $url->help(); ?>">Help</a>
</div>

<div id="wrapper">
    </body>

