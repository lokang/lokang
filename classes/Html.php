<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 7/5/18
 * Time: 11:11 PM
 */
include_once "Css.php";

class Html extends Css
{

    private $title;
    private $doctype = "<!DOCTYPE html>";
    private $html = '<html>';

    /**
     * "<!DOCTYPE html>";
     *
     */
    private function doctype()
    {
        return $this->doctype;
    }

    //<title>p</title>
    public function title($title)
    {
        $title = $this->title;
        return $title;
    }

    /*
     * "<!DOCTYPE html>";
     * '<html>';
     * '<head>';
     * <title>p</title>
     * CSS
     * "</head>";
     */
    public function head()
    {
        $out = $this->doctype();
        $out .= $this->html;
        $out .= $this->header();
        return $out;
    }

    /*
     * <head>
     * <title>p</title>
     * Css
     * </head>
     */
    private function header(){
        $out = '<head>';
        $out .= $this->cssStyle();
        $out .= "</head>";
        return $out;
    }

    /*<
     *<div id ="header">
     *<div id = "menu">menu</div>
     *</div>
     */
    public function headDiv(){
        $out = '<div id ="header">';
        $out .= "<nav>";
        $out .= $this->menu();
        $out .= "</nav>";
        $out .= '</div>';
        return $out;
    }

    /*
     * <div id="menu">
     * menu
     * </div>
     * */
    private function menu(){
        $out =  '<div id="menu">';
        $out .= '<a href="/">'."Home"."</a>";
//        $out .= '<a href="/pages/calendar.php">'." Calendar"."</a>";
        $out .= "</div>";
        return $out;
    }

    /*
     * <body>
     * <div id ="header">
     * <div id = "menu">menu</div>
     * </div>
     */
    public function body(){
        $out  = "<body>";
        $out .= $this->headDiv();
        $out .= $this->menu();
        return $out;
    }
    /*
     * <div id = "wrapper">
     * <p class="p">p</p>
     * </div>
     */
    public function wrapper(){
        $out = "<section>";
        $out .= '<div id="wrapper">';
        $out .= "<p>P with red colour</p>";
        $out .= "</section>";
        $out .= "</div>";
        return $out;
    }

    /*
     * <div id = "wrapper">
     * <p>p</p>
     * </div>
     */
    public function calendar(){
        $out = "<section>";
        $out .= '<div id="wrapper">';
        $out .= $this->month();
        $out .= $this->dayOfWeek();
        $out .= "</div>";
        $out .= "</section>";
        return $out;
    }

    private function numberOfYears(){
        $lastYear = date('2017');
        $year = date("Y");
        $numberOfYears = $year-$lastYear;
        return "(".$numberOfYears." year". ")";
    }
    /*
     * <footer class="footer">
     * &copy
     * </footer>
     * </div>
     * </body>
     * </html>
     */
    public function footer()
    {
        $year = date("Y");
        $out = '<footer class="footer">';
        $out .= "&copy;" . $this->title . " 2017-" . $year." ";
        $out .= $this->numberOfYears();
        $out .= "</footer>";
        $out .= "</div>";
        $out .= "</body>";
        $out .= "</html>";
        return $out;
    }
}
?>