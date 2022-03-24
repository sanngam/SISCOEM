<?php
session_start();
require_once("database/conexion.php");
$conexion = conexion();
// $sql = "SELECT categoria,denominacion FROM cat_plaza_docens";
$sql = "SELECT * FROM cat_plaza_DA";
$result = mysqli_query($conexion, $sql);
// $sql2 = "SELECT categoria,denominacion FROM cat_plaza_admins";
// $result2 = mysqli_query($conexion, $sql2);

require_once 'views/navbar.php';

?>

<div class="container">

    <div class="row top-buffer">
        <div class="col"></div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h1>SISCOEM</h1>
        </div>
        <div class="col-md-9">
            <p>
            <h4>Sistema de Compatibilidad de Empleo</h4>
            <h4>Registrar docente</h4>
            </p>
        </div>
    </div>

    <div class="alert" id="alerta"></div>

    <form action="" method="post" id="form_registrar_docente" name="form_registrar_docente">


        <div class="row top-buffer">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="form-label" for="nombre">Nombre(s)
                        <span class="form-text" id="asterisco_nombre">*</span>:
                    </label>
                    <input type="text" class="form-control" placeholder="Ingresa nombre(s)" id="nombre" name="nombre">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="form-label" for="apePaterno">Apellido Paterno
                        <span class="form-text" id="asterisco_apePaterno">*</span>:
                    </label>
                    <input type="text" class="form-control" placeholder="Ingresa primer apellido" id="apePaterno" name="apePaterno">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="form-label" for="apeMaterno">Apellido Materno
                        <span class="form-text" id="asterisco_apeMaterno">*</span>:
                    </label>
                    <input type="text" class="form-control" placeholder="Ingresa segundo apellido" id="apeMaterno" name="apeMaterno">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label" for="rfc">Registro Federal de Contribuyentes(RFC)
                        <span class="form-text" id="asterisco_rfc">*</span>:
                    </label>
                    <input type="text" class="form-control" placeholder="Ingresa RFC" id="rfc" name="rfc">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label" for="curp">Clave Única de Registro de Población(CURP)
                        <span class="form-text" id="asterisco_curp">*</span>:
                    </label>
                    <input type="text" class="form-control" placeholder="Ingresa CURP" id="curp" name="curp">
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <hr class="red">
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <div class="form-label" for="unidad">Unidad
                        <span class="form-text" id="asterisco_unidad">*</span>:
                    </div>
                    <div id="unidades"></div>
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <div class="form-label" for="sub_unidad">Sub-unidad
                        <span class="form-text" id="asterisco_sub_unidad">*</span>:
                    </div>
                    <div id="subUnidades"></div>
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <div class="form-label" for="categoria">Categoria
                        <span class="form-text" id="asterisco_categoria">*</span>:
                    </div>
                    <!-- Docentes
                    <div id="catDocentes"></div> -->
                    <!-- Administrativos -->
                    <select name="categoria" id="categoria" class="form-control">
                    <option value="">Seleccionar</option>
                        <?php
                        while ($mostrar = $result->fetch_assoc()) {
                            $catDA = $mostrar['categoriaDA'];
                        ?>
                            <option value="<?php echo $catDA ?>">
                                <?php echo $mostrar['categoriaDA']; ?>
                            </option>
                        <?php
                        }
                        ?>

                    </select>
                    <?php

                    ?>
                </div>

            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <div class="form-label" for="horas">Horas
                        <span class="form-text" id="asterisco_horas">*</span>:
                    </div>
                    <div id="catHoras"></div>
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <div class="form-label" for="plaza">Plaza
                        <span class="form-text" id="asterisco_plaza">*</span>:
                    </div>
                    <input type="text" class="form-control" placeholder="Ingresa la plaza" id="plaza">
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <div class="form-label" for="motivo">Motivo
                        <span class="form-text" id="asterisco_motivo">*</span>:
                    </div>
                    <div id="catMotivos"></div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-label" for="puesto">Denominacion de la categoria o puesto
                        <span class="form-text" id="asterisco_puesto">*</span>:
                    </div>

                    <div id="denominacionDA"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <button type="button" id="btn_agregar" class="btn btn-primary">Agregar</button>
            </div>
            <div class="col-md-4">
                <button type="button" id="btn_eliminar" class="btn btn-primary">Eliminar ultimo elemento</button>
            </div>
            
        </div>

        <label for="" class="form-label" >Los datos se agregaránt automaticamente en la tabla de abajo</label>
        <div class="row top-buffer ">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="" class="form-label" for="tabla" id="tabla">Datos
                        <span class="form-text" id="asterisco_tabla">*</span>:
                    </label>
                </div>
            </div>
        </div>


        <div class="table-responsive form-group">

            <table class="table table-bordered" id="tabla_base">
                <thead>
                    <tr>
                        <th scope="col">Unidad</th>
                        <th scope="col">Sub-unidad</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Horas</th>
                        <th scope="col">Plaza</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Denominacion de la categoria o puesto</th>
                    </tr>
                </thead>
                <tbody id="tabla_uno">

                </tbody>
            </table>
        </div>

        <div class="row top-buffer">
            <div class="col-md-4">
                <div class="form-group datepicker-group">
                    <label class="control-label" for="ingresoGob">Ingreso al gobierno federal
                        <span id="asterisco_ingresoGob">*</span>:
                    </label>
                    <input class="form-control" id="ingresoGob" name="ingresoGob" type="text">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group datepicker-group">
                    <label class="control-label" for="ingresoSep">Ingreso a la SEP
                        <span id="asterisco_ingresoSep">*</span>:
                    </label>
                    <input class="form-control" id="ingresoSep" name="ingresoSep" type="text">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group datepicker-group">
                    <label class="control-label" for="ingresoDgti">Ingreso a la DGETI
                        <span id="asterisco_ingresoDgti">*</span>:
                    </label>
                    <input class="form-control" id="ingresoDgti" name="ingresoDgti" type="text">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="observaciones" class="form-label">Observaciones
                        <span class="form-text" id="asterisco_observaciones">*</span>:
                    </label>
                    <textarea class="form-control" placeholder="Ingresa observaciones" rows="5" id="observaciones" name="observaciones"></textarea>
                </div>
            </div>
        </div>

        <div class="clearfix bottom-buffer">
            <div class="pull-left text-muted text-vertical-align-button">
                * Campos obligatorios
            </div>
            <div class="pull-right">
                <span class="btn btn-primary" id="btn_registrar">Registrar</span>
                <span class="btn btn-default">Salir</span>
            </div>
        </div>
    </form>

</div>

<script src="models/generales.js"></script>
<script src="models/personal.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#unidades').load("controllers/personalControllers/selectUnidades.php");
        $('#subUnidades').load("controllers/personalControllers/selectSubunidad.php");
        //$('#catDocentes').load("controllers/personalControllers/selectCatdocen.php");
        // $('#catAdmins').load("controllers/personalControllers/selectCatadmin.php");
        $('#catHoras').load("controllers/personalControllers/selectHoras.php");
        $('#catMotivos').load("controllers/personalControllers/selectMotivos.php");
        // $('#denominacionDA').load("controllers/personalControllers/selectCatDA.php");
    });

    $("#categoria").change(function() {
        // catDA = $('#catDA').serialize();
        // categoriaSelect = "catDA=" + catDA;
        console.log(document.getElementById('categoria').value);
        $.ajax({
            type: "POST",
            data: categoriaSelect = "catDA=" + document.getElementById('categoria').value,
            url: "controllers/personalControllers/selectCatDA.php",
            success: function(r) {
                console.log(r);
                if (r != 1) {
                    $('#denominacionDA').html(r);
                    console.log("la informacion se guardo");
                } else {
                    console.log("la informacion no se guardo");

                }
            }
        });
    });
</script>