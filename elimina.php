<?php
    require_once("AutoLoad.php");
    $elimina = new Acciones();
    $resultado = $elimina -> Eliminar(2);
    if($resultado > 0) echo "Se elimino correctamente el registro";
    else echo "Error al eliminar los datos";
?>