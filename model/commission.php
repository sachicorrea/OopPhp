<?php
class Comision {
    private $venta;

    public function __construct($venta){
        $this->sale = $venta;
    }

    public function get_venta(){
        return $this->sale;
    }

    public function getValorComision(){
        $commission = 0;

        if ($this->sale >= 0) {

           if($this->sale >= 2000 && $this->sale <= 10000) {
            $commission = $this->sale * 0.07;
            }

            elseif ($this->sale > 10000 && $this->sale <= 20000) {
                $commission = $this->sale * 0.1;
            }
            
            else {
                $commission = $this->sale * 0.15;
            }
            
            return $commission;
        } else {
            echo "Sales must be a greater than or equal to zero";
        }
        
    }
}
?>