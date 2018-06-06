<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 17/4/18
 * Time: 11:19 PM
 */
include("inc/autoload.php");

include "header.php";
?>

<?php
$lok = new Lokang();
echo $lok->account();
?>

<?php include_once "footer.php"; ?>