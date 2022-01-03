<?php
 require_once("AutoLoad.php");
?>
<!DOCTYPE html>
    <html lang=en>
        <head>
            <meta charset=UTF-8>
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta name="viewport" content="width-device-width, initial-scale=1.0">
            <title>Editar Registro</title>
        </head>
        <body>
            <?php
                if(isset($_POST["Actualizar"])){
                    $idb = $_POST["id"];
                    $actualiza = new Acciones();
                    $resultado = $actualiza -> Consultaid($idb);
                    ?>
                <form method="post">
                    <input type="hidden" name="id"  value=" <?php echo $resultado[0]["id"]?>">
                    <label>Id</label>
                    <input type="text" name="id"  value=" <?php echo $resultado[0]["id"]?>"disable> 
                    <br>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $resultado[0]["nombre"]?>">
                    <br>
                    <label for="edad">Edad</label>
                    <input type="text" name="edad" id="edad" value="<?php echo $resultado[0]["edad"]?>">
                    <br>
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" value="<?php echo $resultado[0]["correo"]?>">
                    <input type="submit" name="guardar" value="Guardar">
                </form>
            <?php
                }elseif(isset($_POST["guardar"])){
                    $id = $_POST["id"];
                    $nombre = $_POST["nombre"];
                    $edad = $_POST["edad"];
                    $correo = $_POST["correo"];
                    echo "id= " . $id . "nombre= ". $nombre . "edad= ". $edad . "correo=". $correo;
                    $actualiza = new Acciones();
                    $resultado = $actualiza -> Actualizar($id, $nombre, $edad, $correo);
                    echo "valor de consulta". $resultado;
                    if($resultado > 0)  header("location: http://localhost/dbdatosphp/principal.php");
                    else echo "Error al actualizar los datos";
                }else{
                    header("location: http://localhost/dbdatosphp/principal.php");

                }
                ?>
        </body>
    </html>