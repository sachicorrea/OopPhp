<?php
    require_once "model/travel.php";  

    $costTrip = new Viaje($_POST['city'], $_POST['passengersNeira'], $_POST['passengersAranzazu'], $_POST['passengersSalamina'], $_POST['passengersPacora'], $_POST['passengersAguadas']);

    $city = $_POST['city'];

    function routeCost($city){
        if(empty($city)){
            return 0;
        }

        else {
            // Loop to estimate accesories costs
            $sum = 0;

            foreach($accesories as $key => $value)
            {
            $sum += $value;
            }
            return $sum;
        }
    }

    require_once "view/partials/vheader.php";
    require_once "view/vtravelCost.php";
    require_once "view/partials/vfooter.php";
?>