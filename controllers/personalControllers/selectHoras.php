<?php
    session_start();
    require_once("../../database/conexion.php");

    $conexion = conexion();
    $sql = "SELECT horas FROM horas";
    $result = mysqli_query($conexion,$sql);
?>

<select name="horas" id="horas" class="form-control">
    <option value="">Seleccionar</option>
<?php
        while ($mostrar = mysqli_fetch_array($result)){
        $catHoras = $mostrar['horas'];
    ?>
        <option value="<?php echo $catHoras?>">
        <?php echo $mostrar['horas']; ?>
      </option>
    <?php
        }
    ?>    
</select>
