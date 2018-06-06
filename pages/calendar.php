<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 23/5/18
 * Time: 11:41 PM
 */
include_once ("../inc/autoload.php");

$calendar = new Calendar;
$html = new Html();
echo $html->title("<title>Calendar</title>");
echo $html->head();
echo $html->body();
echo $html->calendar();
echo $html->footer();