<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1>SISCOEM</h1>
            <hr>
            <h4>Sistema de Compatibilidad de Empleado</h4>
            <h2>Registro</h2>
        </div>
    </div>
    <div class="alert" id="alerta"></div>
    <div class="row top-buffer">
        <div class="col-md-8">
            <form id="registrologin" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="nombre">Nombre (s)
                        <span class="form-text" id="asterisco_nombre">*</span>:
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" onkeypress="return val_nombre(event)" id="nombre" name="nombre" placeholder="Ingresa tu nombre" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="apePaterno">Apellido Paterno
                        <span class="form-text" id="asterisco_apePaterno">*</span>:</label>
                    <div class="col-sm-9">
                        <input class="form-control" onkeypress="return val_apePaterno(event)" id="apePaterno" name="apePaterno" placeholder="Ingresa tu apellido paterno" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="apeMaterno">Apellido Materno
                        <span class="form-text" id="asterisco_apeMaterno">*</span>:</label>
                    <div class="col-sm-9">
                        <input class="form-control" onkeypress="return val_apeMaterno(event)" id="apeMaterno" name="apeMaterno" placeholder="Ingresa tu apellido materno" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">Email
                        <span class="form-text" id="asterisco_email">*</span>:</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="email" name="email" placeholder="Ingresa tu correo electronico" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">Contraseña
                        <span class="form-text" id="asterisco_password">*</span>:</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="confirm_password">Confirmar Contraseña
                        <span class="form-text" id="asterisco_confirm_password">*</span>:</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirma tu contraseña" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="button" class="btn btn-primary" id="btn_registrar">Registrar</button>
                        <a class="btn btn-primary" href="login">Regresar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="models/generales.js"></script>
<script src="models/registroLogin.js"></script>