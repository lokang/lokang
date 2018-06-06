<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 12/5/18
 * Time: 8:39 PM
 */
include_once "Calendar.php";

class Css extends Calendar
{
    /*
     * *{
     * margin;0px;
     * padding:0px;
     * width:100%
     * }
     */
    public function entireBody(
    $name = "*",
    $lgt = "{",
    $margin = "margin: 0px;",
    $padding="padding: 0px;",
    $width = "width: 100%;",
    $rgt = "} "
    ){
        $eb = $name.$lgt.$margin.$padding.$width.$rgt;
        return $eb;
    }

    /*
     * html, body{
     * height:100%;
     * margin:0px;
     * }
     */
    public function htmlBody(
        $name = "html, body",
        $lgt = "{",
        $height = "height: 100%;",
        $margin = "margin: 0px;",
        $rgt = "} "
    ){
        return $name.$lgt.$height.$margin.$rgt;
    }

    /*
     * #header{
     * position: absolute;
     * top: 0px;
     * width:100%;
     * height: 50px;
     * background: gray;
     * left:0px;
     * }
     */
    private function header(
        $name = "#header",
        $lgt = "{",
        $position = "position: absolute;",
        $top = "top:0px;",
        $width = "width:100%;",
        $height = "height: 50px;",
        $background = "background: gray;",
        $left = "left:0px;",
        $rgt = "} "
    ){
        $header = $name.$lgt.$position.$top.$width.$height.$background.$left.$rgt;
        return $header;
    }

    /*
     * #menu{
     * position: absolute;
     * top:0px;
     * padding:5px;
     * height:50px;
     * background:none;
     * text-decoration: none;
     * right:0px;
     * float: right;
     * tex-align: right;
     * width: auto;
     * }
     */
    private function menu(
        $menu = "#menu",
        $lgt=  "{",
        $position = "position: absolute;",
        $top = "top:0px;",
        $padding = "padding:0px;",
        $height = "height: 50px;",
        $background = "background: none;",
        $textDecoration = "text-decoration: none;",
        $right = "right:10px;",
        $float = "float: right;",
        $textAlign = "text-align: right;",
        $width = "width:100px;",
        $rgt = "} "
    ){
        return $menu.$lgt.$position.$top.$padding.$height.$background.
            $textDecoration.$right.$float.$textAlign.$width.$rgt;
    }

    /*
     * #menu a{
     * text-decoration: none;
     * }
     */
    private function menuA(
        $name = "#menu a",
        $lgt = "{",
        $color = "#fff;",
        $td = "text-decoration: none;",
        $rgt = "} "
    )
    {
        return $name.$lgt.$color.$td.$rgt;
    }

    /*
     * #menu a:active{
     * color: black;
     * text-decoration: none;
     * }
     */
    private function menuActive(
        $name = "#menu a:active",
        $lgt = "{",
        $color = "color: #fff;",
        $td = "text-decoration: none;",
        $rgt = "} "
    )
    {
        return $name.$lgt.$color.$td.$rgt;
    }

    /*
     * #menu a:visited{
     * color: #fff;
     * text-decoration: none;
     * }
     */
    private function menuVisited(
    $name = "#menu a:visited",
    $lgt = "{",
    $color = "color: #fff;",
    $td = "text-decoration: none;",
    $rgt = "} "
    )
    {
        return $name.$lgt.$color.$td.$rgt;
    }

    /*
     * #menu a:hover{
     * color: #ccc;
     * text-decoration: none;
     * }
     */
    private function menuHover(
    $name = "#menu a:hover",
    $lgt = "{",
    $color = "color: #ccc;",
    $td = "text-decoration: none;",
    $rgt = "}"
    )
    {
        return $name.$lgt.$color.$td.$rgt;
    }

    /*
     * p{
     * color: red;
     * }
     */
    private function pCss(
        $name = "p",
        $brace1 = "{",
        $color = "color",
        $colon = ":",
        $colorName = "red",
        $brace2 = "} "
    )
    {
        $css = $name. $brace1. $color. $colon. $colorName.";". $brace2;
        return $css;
    }

    /*
     * #wrapper{
     * position: relative;
     * top:60px;
     * width: 80%;
     * height: auto;
     * min-height: auto;
     * left: 160px;
     * font: 16px rial, helvetica, sans-serif;
     * background: #999;
     * color: #000;
     * }
     */
    private function wrapper(
        $name = "#wrapper",
        $lgt = "{",
        $position = "position: relative;",
        $top = "top: 60px;",
        $width = "width: 80%;",
        $height = "height: auto;",
        $minHeight = "min-height: auto;",
        $left = "left: 160px;",
        $font = "font: 16px arial, helvetica, sans-serif;",
        $background = "background: #fff;",
        $padding = "padding: 10px;",
        $color = "color: #000;",
        $rgt = "} "
    ){
        return $name.$lgt.$position.$top.$width.$height.$minHeight.$left.$font.
            $background.$color.$padding.$rgt;
    }


    /*
     * footer{
     * position: relative;
     * top: 200px;
     * color: white;
     * background: black;
     * }
     */
    private function footer(
        $name = "footer",
        $lft = "{",
        $position = "position: relative;",
        $top = "top: 80px;",
        $width = "width: inherit;",
        $height = "height: 50px;",
        $color = "color: white;",
        $background = "background: gray;",
        $rgt = "} "
    )
    {
        return $name.$lft.$position.$top.$width.$height.$color.$background.$rgt;
    }

    /*
     * .footer{
     * padding:0px;
     * }
     */
    private function footerClass(
        $name = ".footer",
        $lgt = "{",
        $padding = "padding-top: 10px",
        $rgt = "} "
    ){
       $footer = $name.$lgt.$padding.$rgt;
        return $footer;
    }

    //entire css
    private function cssLink(){
        $out = $this->entireBody();
        $out .= $this->htmlBody();
        $out .= $this->header();
        $out .= $this->menu();
        $out .= $this->menuA();
        $out .= $this->menuActive();
        $out .= $this->menuHover();
        $out .= $this->menuVisited();
        $out .= $this->wrapper();
        $out .= $this->footer();
        $out .= $this->footerClass();
        $out .= $this->pCss();
        return $out;

    }

    /*
     * <style type ="text/css"
     * entire css
     * </style>
     */
    public function cssStyle($begin = '<style type="text/css">', $end="</style>"){
        $out =  $begin;
        $out .= $this->cssLink();
        $out .= $end;
        return $out;
    }

}
?>