<?php
$db=mysqli_connect('db','root','root','prueba')

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mostar datos</title>
</head>
<body>
<br>
<table  border="4px" >
    <tr >
        <td>Id</td>
        <td>Nombre</td>
        <td>Correo</td>
        <td>Sexo</td>
    </tr> 
    <?php
    $sql="SELECT * from personas";
    $result=mysqli_query($db,$sql);
    while ($mostrar=mysqli_fetch_array($result)){
    ?>   
    <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['correo'] ?></td>
        <td><?php echo $mostrar['sexo'] ?></td>
    </tr> 
    <?php
    }
    ?>
</table>

</body>