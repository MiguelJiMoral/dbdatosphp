<?php
    require_once("AutoLoad.php");
    $inserta = new Acciones();
    $resultado = $inserta -> Insertar("Miguel", 10, "elmiguel123@gmail.com");
    if($resultado) echo "Se inserto correctamente el registro";
    else echo "Error al ingresar los datos";
?>