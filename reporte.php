<?php
    require_once "model/facturaAgua.php";  

    $factura = new FacturaAgua($_POST['nombre'], $_POST['direccion'], $_POST['estrato'], $_POST['acueducto'], $_POST['alcantarillado']);

    require_once "view/partials/vheader.php";
    require_once "view/vreporte.php";
    require_once "view/partials/vfooter.php";

?>