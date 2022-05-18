<?php
/*require_once("../database/conexion.php");

$objeto_para_usar_conexion = conexion();
$datos_recibidos =  array(
    $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['nombre']))),
    $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['apePaterno']))),
    $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['apeMaterno']))),
    $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['rfc']))),  
    $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['curp']))),
    $objeto_para_usar_conexion->real_escape_string($_POST['unidad'],),
    $objeto_para_usar_conexion->real_escape_string($_POST['sub_unidad']),
    $objeto_para_usar_conexion->real_escape_string($_POST['categoria']),
    $objeto_para_usar_conexion->real_escape_string($_POST['horas']),
    $objeto_para_usar_conexion->real_escape_string($_POST['plaza']),
    $objeto_para_usar_conexion->real_escape_string($_POST['motivo']),
    $objeto_para_usar_conexion->real_escape_string($_POST['puesto']),
    $objeto_para_usar_conexion->real_escape_string(htmlentities($_POST['ingresoGob'])),
    $objeto_para_usar_conexion->real_escape_string(htmlentities($_POST['ingresoSep'])),
    $objeto_para_usar_conexion->real_escape_string(htmlentities($_POST['ingresoDgeti'])),
    $objeto_para_usar_conexion->real_escape_string(htmlentities(strtoupper($_POST['observaciones'])))
        


    
);



$query_insert = "INSERT INTO trabajador(nombre, apePaterno, apeMaterno, rfc, curp, 
            unidad, sub_unidad, categoria, horas, plaza, motivo, puesto, ingresoGob, ingresoSep, ingresoDgeti, observaciones) 
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$insert_preparado = $objeto_para_usar_conexion->prepare($query_insert);
$insert_preparado->bind_param('ssssssssssssiiis', $datos_recibidos[0], $datos_recibidos[1], $datos_recibidos[2], $datos_recibidos[3], $datos_recibidos[4], $datos_recibidos[5],
                                                  $datos_recibidos[6], $datos_recibidos[7], $datos_recibidos[8], $datos_recibidos[9], $datos_recibidos[10], $datos_recibidos[11],
                                                  $datos_recibidos[12], $datos_recibidos[13], $datos_recibidos[14], $datos_recibidos[15]);

echo $insert_preparado->execute();


$insert_preparado->close();

*/
?>

