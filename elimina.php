<?php
 require_once("AutoLoad.php");
?>
<!DOCTYPE html>
    <html lang=en>
        <head>
            <meta charset=UTF-8>
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta name="viewport" content="width-device-width, initial-scale=1.0">
            <title>Eliminar Registro</title>
        </head>
        <body>
            <?php
                if(isset($_POST["Eliminar"])){
                    $idb = $_POST["id"];
                    $consulta = new Acciones();
                    $resultado = $consulta -> Consultaid($idb);
                    ?>
                <form method="post">
                    <input type="hidden" name="id"  value=" <?php echo $resultado[0]["id"]?>">
                    <label>Id</label>
                    <input type="text" name="id"  value=" <?php echo $resultado[0]["id"]?>"disabled> 
                    <br>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $resultado[0]["nombre"]?>"disabled>
                    <br>
                    <label for="edad">Edad</label>
                    <input type="text" name="edad" id="edad" value="<?php echo $resultado[0]["edad"]?>"disabled>
                    <br>
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" value="<?php echo $resultado[0]["correo"]?>"disabled>
                    <input type="submit" name="eliminar" value="Eliminar">
                </form>
            <?php
                }elseif(isset($_POST["eliminar"])){
                    $id = $_POST["id"];
                    $elimina = new Acciones();
                    $resultado = $elimina -> Eliminar($id);
                    if($resultado > 0)  header("location: http://localhost/dbdatosphp/principal.php");
                    else echo "Error al actualizar los datos";
                }else{
                    header("location: http://localhost/dbdatosphp/principal.php");

                }
                ?>
        </body>
    </html>