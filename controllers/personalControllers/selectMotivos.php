<?php
    session_start();
    require_once("../../database/conexion.php");

    $conexion = conexion();
    $sql = "SELECT motivos FROM cat_motivos";
    $result = mysqli_query($conexion,$sql);
?>

<select name="motivo" id="motivo" class="form-control">
<option value="">Seleccionar</option>
<?php
        while ($mostrar = mysqli_fetch_array($result)){
        $catMotivos = $mostrar['motivos'];
    ?>
        <option value="<?php echo $catMotivos?>">
        <?php echo $mostrar['motivos']; ?>
      </option>
    <?php
        }
    ?>    
</select>
