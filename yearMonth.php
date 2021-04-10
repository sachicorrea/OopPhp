<?php
    require_once "model/mes.php";

    $monthYear = new Mes();
    $monthYear->set_numero($_POST['month']);
    $monthYear->set_anio($_POST['year']);

    require_once "view/partials/vheader.php";
    require_once "view/vyearMonth.php";
    require_once "view/partials/vfooter.php";

?>