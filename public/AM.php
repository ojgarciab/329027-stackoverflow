<?php
include ("Connect.php");

$Nombre=$_POST['Name'];
$Correo=$_POST['Correo'];

$query="INSERT INTO message (Nombre, Correo,) 
VALUES ('".$Nombre."','".$Correo."')";

$Resultado=$Conexion->query($query);

if($Resultado){
    echo "Los Datos Se Ingresaron Correctamente"

}else{
    echo "no se han podido ingresar los datos"
}
