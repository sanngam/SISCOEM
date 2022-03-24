<?php
require_once("../database/conexion.php");

$objeto_para_usar_conexion = conexion();


    $datos_recibidos =  array(
        $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['nombre']))),
        $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['apePaterno']))),
        $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['apeMaterno']))),
        $objeto_para_usar_conexion->real_escape_string(htmlentities($_POST['email'])),
        $objeto_para_usar_conexion->real_escape_string(htmlentities(sha1($_POST['password']))),
        $objeto_para_usar_conexion->real_escape_string(htmlentities(sha1($_POST['confirm_password'])))                             
    );

    print_r($datos_recibidos);

    // $nombre = $_POST['nombre'];
    // $apePaterno =$_POST['apePaterno'];
    // $apeMaterno =$_POST['apeMaterno'];
    // $email=$_POST['email'];
    // $password =sha1($_POST['password']);
    // $confirm_password =sha1($_POST['confirm_password']);




//$query_insert_usuario = "INSERT INTO login(nombre, apePaterno, apeMaterno, email, pass, confirm_password); 
  //                      VALUES('$nombre', '$apePaterno', '$apeMaterno', '$email', '$password', '$confirm_password')";


  $query_insert = "INSERT INTO registro_usuarios (nombre,apePaterno,apeMaterno,email,pass,confirm_password) values(?, ?, ?, ?, ?, ?)";

  $insert_preparado = $objeto_para_usar_conexion->prepare($query_insert);

  $insert_preparado->bind_param('ssssss', $datos_recibidos[0], $datos_recibidos[1], $datos_recibidos[2], $datos_recibidos[3], $datos_recibidos[4], $datos_recibidos[5] );

  echo $insert_preparado->execute();
  

  $insert_preparado->close();
?>