<?php
    require_once("AutoLoad.php");
    $consultarid = new Acciones();
    $resultado = $consultarid -> Consultaid(3);
    print_r("<pre>");
    print_r($resultado);
    print_r("</pre>");
?>