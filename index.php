<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 8/5/18
 * Time: 10:07 PM
 */
include_once ("inc/autoload.php");
$html = new Html();
echo $html->title("<title>lokang</title>");
echo $html->head();
echo $html->body();
echo $html->calendar();
echo $html->footer();




