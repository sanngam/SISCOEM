$gmx(document).ready(function () {

    $('#enviar').click(function () {
        let texto_error = "";
        if ($('#usuario').val() == "") {
            alertaError('#asterisco_usuario', '#usuario');
            texto_error = texto_error + 'El campo del Usuario esta vacio <br>';
        } else {
            limpiarAlertaError('#asterisco_usuario', '#usuario');
            texto_error = "";
        } if ($('#password').val() == "") {
            alertaError('#asterisco_password', '#password');
            texto_error = texto_error + 'El campo Password esta vacio <br>';
        } else {
            limpiarAlertaError('#asterisco_password', '#password');
            texto_error = "";
        } if (texto_error != "") {
            mensajeError('#alerta', texto_error);
            return false;
        } else {
            limpiaMensajeError('#alerta');
        }
        console.log($('#frmlogin').serialize());
        $.ajax({
            type: "POST",
            data: $('#frmlogin').serialize(),
            url: "controllers/login.php",
            success: function (r) {
                console.log(r);
                if (r == 1) {
                    window.location="personal";
                    console.log("ingresado con exito");
                } else {
                    alert("Usuario o contraseña incorrectos")
                    console.log("la informacion no se guardo");

                }
            }
        });
    });
});
