<?php
    session_start();
    require_once("../../database/conexion.php");

    $conexion = conexion();
    $sql = "SELECT unidad FROM unidads";
    $result = mysqli_query($conexion,$sql);

?>

<select name="unidad" id="unidad" class="form-control">
<option value="">Seleccionar</option>
    <?php
        while ($mostrar = mysqli_fetch_array($result)){
        $unidad = $mostrar['unidad'];
    ?>
    
        <option value="<?php echo $unidad?>">
        <?php echo $mostrar['unidad']; ?>
      </option>
    <?php
        }
    ?>
</select>
