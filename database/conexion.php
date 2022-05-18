<?php

function conexion(){

  $conexion = new mysqli("localhost", "root", "", "prueba");

  if($conexion->connect_errno){
    echo "Error en la conexion al modelo: <br>" . $conexion->connect_error;
  }

  $conexion->set_charset("utf8");

  return $conexion;

}

?>