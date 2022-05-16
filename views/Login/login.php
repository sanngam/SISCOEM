
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1>SISCOEM</h1>
            <hr>
            <h4>Sistema de Compatibilidad de Empleado</h4>
        </div>
    </div>
    
        <div class="alert" id="alerta"></div>
        <div class="row top-buffer">
            <div class="col-md-8">
                <form id="frmlogin" method="POST" class="form-horizontal" role="form">

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="email">Usuario
                            <span class="form-text" id="asterisco_email">*</span>:
                        </label>
                        <div class="col-sm-9">
                            <input class="form-control" id="email" name="email" placeholder="Ingresa tu email" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="password">Contraseña
                            <span class="form-text" id="asterisco_password">*</span>:</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="password" name="password" placeholder="Contraseña" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Recordarme
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <a href="">Olvide mi Contraseña</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-primary" id="enviar">Ingresar</button>
                        </div>
                    
                    </div>
                </form>
            </div>
        </div>
</div>
<script src="models/generales.js"></script>
<script src="models/login.js"></script>