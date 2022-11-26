<?php

function conn(){

$hostname = "localhost";
$usuariodb = "root"; 
$passworddb =""; 
$dbname ="servicio_adopcionanimal"; 

$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname); 
return $conectar; 
}

?>