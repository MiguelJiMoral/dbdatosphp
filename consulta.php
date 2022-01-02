<?php
    require_once("AutoLoad.php");
    $consultar = new Acciones();
    $resultado = $consultar -> Consulta();
    print_r("<pre>");
    print_r($resultado);
    print_r("</pre>");
?>