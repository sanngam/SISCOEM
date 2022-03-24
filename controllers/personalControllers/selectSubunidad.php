<?php
    session_start();
    require_once("../../database/conexion.php");

    $conexion = conexion();
    $sql = "SELECT subUnidad FROM sub_unidads";
    $result = mysqli_query($conexion,$sql);

?>

<select name="sub_unidad" id="sub_unidad" class="form-control">
<option value="">Seleccionar</option>
    <?php
        while ($mostrar = mysqli_fetch_array($result)){
        $subUnidades = $mostrar['subUnidad'];
    ?>
        <option value="<?php echo $subUnidades?>">
        <?php echo $mostrar['subUnidad']; ?>
      </option>
    <?php
        }
    ?>
</select>
