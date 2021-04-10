<?php
    require_once "model/commission.php";  

    $commissionSales = new Comision($_POST['sales']);

    require_once "view/partials/vheader.php";
    require_once "view/vCommissionSales.php";
    require_once "view/partials/vfooter.php";

?>