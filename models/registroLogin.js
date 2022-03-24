$gmx(document).ready(function () {

  $('#btn_registrar').click(function () {
    //alert("hola");
    let texto_error = "";
    let password = $('#password').val();
    var regex_pass = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    let email = $('#email').val();
    var regex_email = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if ($('#nombre').val() != "") {
      limpiarAlertaError('#asterisco_nombre', '#nombre');
      texto_error = "";
      if ($('#apePaterno').val() != "") {
        limpiarAlertaError('#asterisco_apePaterno', '#apePaterno');
        texto_error = "";
        if ($('#apeMaterno').val() != "") {
          limpiarAlertaError('#asterisco_apeMaterno', '#apeMaterno');
          texto_error = "";
          if ($('#email').val() != "") {
            if (regex_email.test(email)) {
              limpiarAlertaError('#asterisco_email', '#email');
              texto_error = "";
              if ($('#password').val() != '') {
                if (regex_pass.test(password)) {
                  limpiarAlertaError('#asterisco_password', '#password');
                  texto_error = "";
                  console.log(password);
                  if ($('#confirm_password').val() == $('#password').val()) {
                    limpiarAlertaError('#asterisco_confirm_password', '#confirm_password');
                    texto_error = "";
                  } else {
                    alertaError('#asterisco_confirm_password', '#confirm_password');
                    texto_error = texto_error + 'El campo confirmar Password y Password no coinciden <br>';
                  }
                } else {
                  alertaError('#asterisco_password', '#password');
                  texto_error = texto_error + 'Mínimo ocho caracteres, al menos una letra, un número y un carácter especial <br>';
                  console.log(password);
                }

              } else {
                alertaError('#asterisco_password', '#password');
                texto_error = texto_error + 'El campo Password esta vacio <br>';
              }
            } else {
              alertaError('#asterisco_email', '#email');
              texto_error = texto_error + 'El campo Email es invalido <br>';
            }
          } else {
            alertaError('#asterisco_email', '#email');
            texto_error = texto_error + 'El campo Email esta vacio <br>';
          }
        } else {
          alertaError('#asterisco_apeMaterno', '#apeMaterno');
          texto_error = texto_error + 'El campo Apellido Materno esta vacio <br>';
        }
      } else {
        alertaError('#asterisco_apePaterno', '#apePaterno');
        texto_error = texto_error + 'El campo Apellido Paterno esta vacio <br>';
      }
    } else {
      alertaError('#asterisco_nombre', '#nombre');
      texto_error = texto_error + 'El campo del Nombre esta vacio <br>';
    } if (texto_error != "") {
      mensajeError('#alerta', texto_error);
      return false;
    } else {
      limpiaMensajeError('#alerta');
    }

    // informacion_recolectada= "nombre="+ $('#nombre').val(); 
                              // "&apePaterno=" + $('#apePaterno').val()+
                              // "&apeMaterno=" + $('#apeMaterno').val()+
                              // "&email=" + $('#email').val()+
                              // "&password=" + $('#password').val()+
                              // "&confirm_password=" + $('#confirm_password').val();

    //   console.log(informacion_recolectada);

    console.log($('#registrologin').serialize());

    $.ajax({
      type: "POST",
      data: $('#registrologin').serialize().trim(),
      url: "controllers/control_registro.php",
      success: function (r) {
        console.log(r);
        if (r != 1) {
          $('#registrologin')[0].reset();
          alert("La información se guardo con éxito");
          console.log("la informacion se guardo");
          
        } else {  
          console.log("la informacion no se guardo");

        }
      }
    });


  });
});


function val_nombre(e) {
  let texto_error = "";

  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " ´áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = [8, 37, 39, 46, 164, 165];

  tecla_especial = false
  for (var i in especiales) {
    if (key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }

  if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    alert('El campo Nombre solo debe de contener letras');
    return false;
  }
}

function val_apePaterno(e) {
  let texto_error = "";

  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " ´áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = [8, 37, 39, 46, 164, 165];

  tecla_especial = false
  for (var i in especiales) {
    if (key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }

  if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    alert('El campo Apellido Paternop solo debe de contener letras');
    return false;
  }
}

function val_apeMaterno(e) {
  let texto_error = "";

  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " ´áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = [8, 37, 39, 46, 164, 165];

  tecla_especial = false
  for (var i in especiales) {
    if (key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }

  if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    alert('El campo Apellido Materno solo debe de contener letras');
    return false;
  }
}