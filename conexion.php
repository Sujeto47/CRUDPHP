<?php
$conectar = @mysql_connect('localhost','root','');

if(!$conectar){
echo "Fallo en la conexion";
}else{
    $base = mysql_select_db('prueba');
    if(!$base){
        echo "No se encontro la base de datos";
    }
}
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$telefono_movil=$_POST['telefono_movil'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$correo=$_POST['correo'];

$sql="INSERT INTO datos VALUES('$id','$nombre','$telefono_movil','$telefono','$ciudad','$correo')";
$ejecutar=mysql_query($sql);

if(!$ejecutar){
    echo "Hubo un error";
}else{
    echo "Datos Guardados Correctamente <br> <a href='index.html'>Volver</a>";
}
?>