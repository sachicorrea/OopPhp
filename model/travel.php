<?php 
    class Viaje{
        private $city;
        private $passengers;

        public function __construct($city, $passengers)
        {
            $this->city = $city;
            $this->numberPassengers = $passengers;
        } 

        public function viaje() {
            return $this->city;
        }

        public function getnumberPassengers() {
            return $this->numberPassengers;
        }
        
        public function valorPasaje() {
            switch($this->city){
                case "pasajerosNeira":
                $costTrip = $this->numberPassengers * 4000;
                break;

                case "pasajerosAranzazu":
                $costTrip = $this->numberPassengers * 8000;
                break;

                case "pasajerosSalamina":
                $costTrip = $this->numberPassengers * 12000;
                break;

                case "pasajerosPacora":
                $costTrip = $this->numberPassengers * 15000;
                break;

                case "pasajerosAguadas":
                $costTrip = $this->numberPassengers * 20000;
                break;
            }
        }

        
    }
?>