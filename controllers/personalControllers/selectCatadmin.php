<?php
    session_start();
    require_once("../../database/conexion.php");

    $conexion = conexion();
    $sql = "SELECT categoria FROM cat_plaza_docens";
    $result = mysqli_query($conexion,$sql);
    $sql2 = "SELECT categoria FROM cat_plaza_admins";
    $result2 = mysqli_query($conexion,$sql2);
    


?>

<select name="catAdmins" id="catAdmins" class="form-control">
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
    <?php
        while ($mostrar = mysqli_fetch_array($result2)){
        $catAdmins = $mostrar['categoria'];
    ?>
        <option value="<?php echo $catAdmins?>">
        <?php echo $mostrar['categoria']; ?>
      </option>
    <?php
        }
    ?>
    
</select>
