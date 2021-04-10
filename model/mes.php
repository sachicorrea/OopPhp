<?php
class Mes 
{
    // Properties
    private $num;
    private $ani;

    // Methods
    public function set_numero($num){
        $this->number_month = $num;
    }

    public function get_numero($num){
        $this->number_month;
    }

    public function set_anio($ani){
        $this->year = $ani;
    }

    public function get_anio($ani){
        $this->year;
    }

    public function getNombre(){

        switch($this->number_month){
            case 1:
                echo "January";
                break;
            
            case 2:
                echo "February";
                break;
            
            case 3:
                echo "March";
                break;
            
            case 4:
                echo "April";
                break;

            case 5:
                echo "May";
                break;

            case 6:
                echo "June";
                break;
        
            case 7:
                echo "July";
                break;

            case 8:
                echo "August";
                break;

            case 9:
                echo "September";
                break;

            case 10:
                echo "October";
                break;

            case 11:
                echo "November";
                break;

            case 12:
                echo "December";
                break;
        }
    }

    public function getDias(){
        if ($this->year > 0) {
            if ($this->number_month == 1 || $this->number_month == 3 || $this->number_month == 5 || $this->number_month == 7 || $this->number_month == 8 || $this->number_month == 10 || $this->number_month == 12) {
                $days = 31;
            }
            elseif ($this->number_month == 2){
                if ($this->year % 400 == 0 || ($this->year % 4 == 0 && $this->year % 100 <> 0))
                {
                    $days = 29;
                }
    
                else {
                   $days = 28;
                }
    
            } else {
                $days = 30;
            }
            return $days;

        } else {
            echo "Year is invalid";
        }
    }
}
?>