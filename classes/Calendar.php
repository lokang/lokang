<?php

/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 21/5/18
 * Time: 11:12 PM
 */
class Calendar
{

    public function month(){

        $month = date("F");
        switch($month) {
            case "January":
                return $month." ".date("d Y"). "<br />";
                break;
            case "February":
                return $month." ".date("d Y"). "<br />";;
                break;
            case "March":
                return $month." ".date("d Y"). "<br />";
                break;
            case "April":
                return $month." ".date("d Y"). "<br />";
                break;
            case "May":
                return "<strong>$month</strong>"." ".date("d Y"). "<br />";
                break;
            case "June":
                return $month." ".date("d Y"). "<br />";
                break;
            case "July":
                return $month." ".date("d Y"). "<br />";
                break;
            case "August":
                return $month." ".date("d Y"). "<br />";
                break;
            case "September":
                return $month." ".date("d Y"). "<br />";
                break;
            case "October":
                return $month." ".date("d Y"). "<br />";
                break;
            case "November":
                return $month." ".date("d Y"). "<br />";
                break;
            case "December":
                return $month." ".date("d Y"). "<br />";
                break;
            default:
                break;
        }
    }

    public function dayOfWeek(){
        $date = date("l");
        switch ($date) {
            case "Monday":
                return "Today is " . "<strong>{$date}</strong>" . ", Welcome to start of the week";
                break;
            case "Tuesday":
                return "Today is " . "<strong>{$date}</strong>" . ", Welcome to 2nd day of the week";
                break;
            case "Wednesday":
                return "Today is " . "<strong>{$date}</strong>" . ", Welcome to mid week";
                break;
            case "Thursday":
                return "Today is " . "<strong>{$date}</strong>" . ", Let's get busy";
                break;
            case "Friday":
                return "Today is " . "<strong>{$date}</strong>" . ", Have a nice week end";
                break;
            case "Saturday":
                return "Today is " . "<strong>{$date}</strong>" . ", Enjoy weekend";
                break;
            case "Sunday":
                return "Today is " . "<strong>{$date}</strong>" . ", Have a nice day at prayer";
                break;
        }
    }
}