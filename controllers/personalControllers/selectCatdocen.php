<?php
    session_start();
    require_once("../../database/conexion.php");

    $conexion = conexion();
    $sql = "SELECT categoria FROM cat_plaza_docens";
    $result = mysqli_query($conexion,$sql);

?>

<select name="catDocentes" id="catDocentes" class="form-control">
    <?php
        while ($mostrar = mysqli_fetch_array($result)){
        $catDocentes = $mostrar['categoria'];
    ?>
        <option value="<?php echo $catDocentes?>">
        <?php echo $mostrar['categoria']; ?>
      </option>
    <?php
        }
    ?>
</select>
