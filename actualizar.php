<?php
    require_once("AutoLoad.php");
    $actualiza = new Acciones();
    $resultado = $actualiza -> Actualizar(1, "Miguel", 20, "elmiguel123@gmail.com");
    if($resultado > 0) echo "Se actualizo correctamente el registro";
    else echo "Error al ingresar los datos";
?>