<?php

include_once('db.php'); 

  $correo=$_POST['correo']; 
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $aporte=$_POST['aporte'];
  $clave=$_POST['clave'];
 
 echo "los datos del aportante son los siguientes: <br>"; 

 echo "$correo, $nombre, $apellido, $aporte y $clave"; 


 $conectar=conn(); 
 $sql= "INSERT INTO base_aportantes(correo, nombre, apellido, aporte, clave)
 VALUES ('$correo', '$nombre','$apellido', '$aporte', '$clave')"; 
 $resul = mysqli_query($conectar , $sql)or trigger_error("Query failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR); 

 echo "$sql"; 

?> 