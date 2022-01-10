<?php
    require_once("AutoLoad.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="diseno.css">
    <title> Pagina Principal </title>
</head>

<body>
    <table border=1>
        <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Correo</td>
            <td colspan=2>Acciones</td>
        </tr>  
        <tbody>
            <?php
              $consultar = new Acciones();
              $resultado = $consultar -> Consulta();
              foreach($resultado as $campo=>$valor){
                  echo"<tr>";
                  echo"<td>". $valor["id"]."</td>";
                  echo"<td>". $valor["nombre"]."</td>";
                  echo"<td>". $valor["edad"]."</td>";
                  echo"<td>". $valor["correo"]."</td>";

                  echo"<td><form action='actualizar.php' method='post'>
                  <input type='hidden' name='id' value='".$valor["id"]."'>
                  <input type='submit' name='Actualizar' value='Editar'></form></td>";

                  echo"<td><form action='elimina.php' method='post'>
                  <input type='hidden' name='id' value='".$valor["id"]."'>
                  <input type='submit' name='Eliminar' value='Eliminar'></form></td>";
                  echo"</tr>";
              }
            ?>
            <tr><td coolspan=6><form action='Insertar.php' method='post'>
                <input type='submit' name='Insertar' value='Registro Nuevo'>
            </form></td></tr>
        </tbody>
        </thead>   
    </table>

</body>

</html>
