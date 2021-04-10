<?php
    require_once "model/package.php";  

    $packageItems = new Package($_POST['category'], $_POST['service'], $_POST['weight']);

    require_once "view/partials/vheader.php";
    require_once "view/vpackagecost.php";
    require_once "view/partials/vfooter.php";

?>