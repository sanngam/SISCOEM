<?php
session_start();
require_once("../../database/conexion.php");

$conexion = conexion();

$datos_recibidos =  array(
   $conexion->real_escape_string(htmlentities($_POST['catDA']))                             
 );

$sql = "SELECT denominacionDA FROM cat_plaza_da WHERE categoriaDA = '$datos_recibidos[0]'";
$result = mysqli_query($conexion, $sql);

?>


    <?php
      while ($mostrar = mysqli_fetch_array($result)) {
      ?>     
      <input type="text" class="form-control" name="puesto" id="puesto" value="<?php echo $mostrar['denominacionDA']?>" readonly>
   <?php
      }
    ?>