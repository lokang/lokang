<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 24/6/17
 * Time: 1:16 PM
 */
class Lokang{
    public $content = "This is the content of our page.";
    /**
     * @return string
     */
    public function title($name = "lokang"){
        return $name;
    }

    /**
     * @return string
     */
    public function page(){
        return $this->content;
    }

    public function programingLanguage(){
        $language = array('PHP', 'SWIFT', 'JAVA');
        switch($language[array_rand($language)]){
            case "PHP":
                echo "you are learning PHP";
                break;
            case "SWIFT":
                echo "you are learning SWIFT";
                break;
            case "JAVA":
                echo "you are learning JAVA";
                break;
            default:
                echo "You want to learn to program";
                break;
            return $language;
        }
    }

    public function personalDetails(){
        $myDetails = [
            'age' => 32,
            'name' => "Lokang Jackson"
        ];
        foreach ($myDetails as $key => $value);
        echo $key." ". $value;
    }

    public function daysOfTheWeek(){
        $week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        for ($i = 0; $i <= count($week); $i++){
            echo $week[$i];
        }
    }

    public function greeting()
    {
        $x = 0;
        while ($x < 2) {
            echo "Hello World <br>";
            $x++;
        }
    }

    public function account(){
        $arrays = array(
            'balance' => 'you have less money',
            'bank' => 'you are using commonwealth bank',
            'total'     => 'total amount is '.number_format(5000)
        );
       echo $arrays['total'];
    }

}
?>