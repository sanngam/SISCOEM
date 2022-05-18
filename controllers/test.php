<?php
require_once("../database/conexion.php");

//$method = $_SERVER['REQUEST_METHOD'];

//if($method==='POST'){

//$data = $_POST;

//}

//print_r($_POST["user"]["nombre"]);
$objeto_para_usar_conexion = conexion();

print_r($_POST);

$nombre = isset($_POST['nombre'])? $_POST['nombre'] : '';
$apePaterno = isset($_POST['apePaterno'])? $_POST['apePaterno'] : '';
$apeMaterno = isset($_POST['apeMaterno'])? $_POST['apeMaterno'] : '';
$rfc = isset($_POST['rfc'])? $_POST['rfc'] : '';
$curp = isset($_POST['curp'])? $_POST['curp'] : '';
$unidad = isset($_POST['unidad'])? $_POST['unidad'] : '';
$sub_unidad= isset($_POST['sub_unidad'])? $_POST['sub_unidad'] : '';

try{

   
    
/*$pdo= $objeto_para_usar_conexion->prepare('INSERT INTO trabajador(nombre, apePaterno, apeMaterno, rfc, curp, unidad, sub_unidad) 
                                            VALUES (?,?,?,?,?,?,?)');*/
$stmt ="INSERT INTO trabajador (nombre, apePaterno, apeMaterno, rfc, curp, unidad, sub_unidad)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$insert_preparado = $objeto_para_usar_conexion->prepare($stmt);

$insert_preparado->bind_param("sssssss", $nombre, $apePaterno, $apeMaterno, $rfc, $curp, $unidad, $sub_unidad);
/*$pdo->bindParam(1, $nombre);
$pdo->bindParam(2, $apePaterno);
$pdo->bindParam(3, $apeMaterno);
$pdo->bindParam(4, $rfc);
$pdo->bindParam(5, $curp);
$pdo->bindParam(6, $unidad);
$pdo->bindParam(7, $sub_unidad);
$pdo->execute() or die(print($pdo->errorInfo()));
*/
print_r($insert_preparado);
echo json_encode('true');


    echo json_encode('conectado correctamente');
}catch(PDOException $error){
    echo $error->getMessage();
    die();
}

echo $resultado_de_la_ejecucion_del_query = mysqli_query($objeto_para_usar_conexion, $stmt);
?>
