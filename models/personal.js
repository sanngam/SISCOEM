const btn_registrar = document.querySelector("#btn_registrar");
const btn_agregar = document.querySelector("#btn_agregar");
const tbody = document.querySelector("#tabla_base tbody");
const rfc = document.querySelector("#rfc");

const handleAdd = () => {
  const item = {
    unidad: document.querySelector("#unidad").value,
    sub_unidad: document.querySelector("#sub_unidad").value,
    categoria: document.querySelector("#categoria").value,
    horas: document.querySelector("#horas").value,
    motivo: document.querySelector("#motivo").value,
    plaza: document.querySelector("#plaza").value,
    puesto: document.querySelector("#puesto").value,
  };

  const tr = document.createElement("tr");
  const td_unidad = document.createElement("td");
  td_unidad.textContent = item.unidad;
  const td_sub_unidad = document.createElement("td");
  td_sub_unidad.textContent = item.sub_unidad;

  const td_categoria = document.createElement("td");
  td_categoria.textContent = item.categoria;

  const td_horas = document.createElement("td");
  td_horas.textContent = item.horas;

  const td_motivo = document.createElement("td");
  td_motivo.textContent = item.motivo;

  const td_plaza = document.createElement("td");
  td_plaza.textContent = item.plaza;

  const td_puesto = document.createElement("td");
  td_puesto.textContent = item.puesto;

  const td_action = document.createElement("td");
  const btn_action = document.createElement("button");
  btn_action.type = "button";
  btn_action.textContent = "X";
  btn_action.classList.add("btn");
  btn_action.classList.add("btn-danger");
  td_action.appendChild(btn_action);

  const data = [
    td_unidad,
    td_sub_unidad,
    td_categoria,
    td_horas,
    td_plaza,
    td_motivo,
    td_puesto,
    td_action,
  ];
  tr.append(...data);
  tbody.appendChild(tr);
};

const handleSubmit = async () => {
  const arr = tbody.childNodes;
  const data_arr = [];
  const data = {
    nombre: document.querySelector("#nombre").value,
    apePaterno: document.querySelector("#apePaterno").value,
    apeMaterno: document.querySelector("#apeMaterno").value,
    rfc: document.querySelector("#rfc").value,
    curp: document.querySelector("#curp").value,
  };
  arr.forEach((tr) => {
    const tr_childs = tr.childNodes;
    const obj = {
      unidad: tr_childs[0].textContent,
      sub_unidad: tr_childs[1].textContent,
      categoria: tr_childs[2].textContent,
      horas: tr_childs[3].textContent,
      plaza: tr_childs[4].textContent,
      motivo: tr_childs[5].textContent,
      puesto: tr_childs[6].textContent,
    };
    data_arr.push(obj);
  });
  const data_footer = {
    ingresoGob: document.querySelector("#ingresoGob").value,
    ingresoSep: document.querySelector("#ingresoSep").value,
    ingresoDgeti: document.querySelector("#ingresoDgeti").value,
    observaciones: document.querySelector("#observaciones").value,
  };
  const final_data = {
    user: data,
    datos_trabajdor: data_arr,
    fata_footer: data_footer,
  };

  $.ajax({
    type: "POST",
    data: final_data,
    url: "controllers/test.php",
    success: function (r) {
      console.log(r);
    },
  });
};

const handleDeleteItem = ({ target }) => {
  if (target.classList.contains("btn-danger")) {
    target.parentNode.parentNode.remove();
  }
};

const handleBlurRfc = ({ target }) => {
  const value = document.querySelector("#rfc").value;

  if (target.classList.contains("is-invalid")) {
    target.classList.remove("is-invalid");
    document.querySelector("#rfc_error").textContent = "";
  }

  if (value.length != 13) {
    target.classList.add("is-invalid");
    document.querySelector("#rfc_error").textContent = "Revisa el RFC";
  }
}






btn_registrar.addEventListener("click", handleSubmit);
btn_agregar.addEventListener("click", handleAdd);
tbody.addEventListener("click", handleDeleteItem);
rfc.addEventListener("blur", handleBlurRfc);

// $gmx(document).ready(function () {

//   eventoTecladoMayusculas('nombre');
//   eventoTecladoMayusculas('apePaterno');
//   eventoTecladoMayusculas('apeMaterno');
//   eventoTecladoMayusculas('rfc');
//   eventoTecladoMayusculas('curp');
//   eventoTecladoMayusculas('plaza');
//   eventoTecladoMayusculas('observaciones');

//   $('#ingresoGob').datepicker({ changeYear: true });
//   $('#ingresoSep').datepicker({ changeYear: true });
//   $('#ingresoDgeti').datepicker({ changeYear: true });

//   const contenedor_tabla_uno = [
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []],
//     [[], [], [], [], [], [], []]
//   ];

//   $('#btn_agregar').click(function () {
//     let unidad = $('#unidad').val();
//     let sub_unidad = $('#sub_unidad').val();
//     let categoria = $('#categoria').val();
//     let horas = $('#horas').val();
//     let plaza = $("#plaza").val();
//     let motivo = $('#motivo').val();
//     let puesto = $('#puesto').val();
//     let cont = 0;
//     if ($('#unidad').val() == '') {
//       alertaError('#asterisco_unidad', '#unidad');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_unidad', '#unidad');
//     }
//     if ($('#sub_unidad').val() == '') {
//       alertaError('#asterisco_sub_unidad', '#sub_unidad');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_sub_unidad', '#sub_unidad');
//     }
//     if ($('#categoria').val() == '') {
//       alertaError('#asterisco_categoria', '#categoria');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_categoria', '#categoria');
//     }
//     if ($('#horas').val() == '') {
//       alertaError('#asterisco_horas', '#horas');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_horas', '#horas');
//     }
//     if ($('#plaza').val() == '') {
//       alertaError('#asterisco_plaza', '#plaza');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_plaza', '#plaza');
//     }
//     if ($('#motivo').val() == '') {
//       alertaError('#asterisco_motivo', '#motivo');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_motivo', '#motivo');
//     }
//     if ($('#puesto').val() == '') {
//       alertaError('#asterisco_puesto', '#puesto');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_puesto', '#puesto');
//     }

//     if (cont == 0) {
//       const contenedor_tabla = document.querySelector("#tabla_uno");
//       const hijos = contenedor_tabla.children;
//       let cont = hijos.length;

//       contenedor_tabla_uno[cont][0][0] = document.createElement("TR");
//       contenedor_tabla_uno[cont][0][0].setAttribute("id", "tr_" + cont);
//       contenedor_tabla.appendChild(contenedor_tabla_uno[cont][0][0]);

//       contenedor_tabla_uno[cont][0][1] = document.createElement("TD");
//       contenedor_tabla_uno[cont][0][2] = document.createTextNode(unidad);
//       contenedor_tabla_uno[cont][0][1].setAttribute("id", "unidad_" + cont);
//       contenedor_tabla_uno[cont][0][1].setAttribute("name", "unidad[]");
//       contenedor_tabla_uno[cont][0][1].appendChild(contenedor_tabla_uno[cont][0][2]);
//       contenedor_tabla_uno[cont][0][0].appendChild(contenedor_tabla_uno[cont][0][1]);

//       contenedor_tabla_uno[cont][1][1] = document.createElement("TD");
//       contenedor_tabla_uno[cont][1][2] = document.createTextNode(sub_unidad);
//       contenedor_tabla_uno[cont][1][1].setAttribute("id", "sub_unidad_" + cont);
//       contenedor_tabla_uno[cont][1][1].appendChild(contenedor_tabla_uno[cont][1][2]);
//       contenedor_tabla_uno[cont][0][0].appendChild(contenedor_tabla_uno[cont][1][1]);

//       contenedor_tabla_uno[cont][2][1] = document.createElement("TD");
//       contenedor_tabla_uno[cont][2][2] = document.createTextNode(categoria);
//       contenedor_tabla_uno[cont][2][1].setAttribute("id", "categoria_" + cont);
//       contenedor_tabla_uno[cont][2][1].appendChild(contenedor_tabla_uno[cont][2][2]);
//       contenedor_tabla_uno[cont][0][0].appendChild(contenedor_tabla_uno[cont][2][1]);

//       contenedor_tabla_uno[cont][3][1] = document.createElement("TD");
//       contenedor_tabla_uno[cont][3][2] = document.createTextNode(horas);
//       contenedor_tabla_uno[cont][3][1].setAttribute("id", "horas_" + cont);
//       contenedor_tabla_uno[cont][3][1].appendChild(contenedor_tabla_uno[cont][3][2]);
//       contenedor_tabla_uno[cont][0][0].appendChild(contenedor_tabla_uno[cont][3][1]);

//       contenedor_tabla_uno[cont][4][1] = document.createElement("TD");
//       contenedor_tabla_uno[cont][4][2] = document.createTextNode(plaza);
//       contenedor_tabla_uno[cont][4][1].setAttribute("id", "plaza_" + cont);
//       contenedor_tabla_uno[cont][4][1].appendChild(contenedor_tabla_uno[cont][4][2]);
//       contenedor_tabla_uno[cont][0][0].appendChild(contenedor_tabla_uno[cont][4][1]);

//       contenedor_tabla_uno[cont][5][1] = document.createElement("TD");
//       contenedor_tabla_uno[cont][5][2] = document.createTextNode(motivo);
//       contenedor_tabla_uno[cont][5][1].setAttribute("id", "motivo_" + cont);
//       contenedor_tabla_uno[cont][5][1].appendChild(contenedor_tabla_uno[cont][5][2]);
//       contenedor_tabla_uno[cont][0][0].appendChild(contenedor_tabla_uno[cont][5][1]);

//       contenedor_tabla_uno[cont][6][1] = document.createElement("TD");
//       contenedor_tabla_uno[cont][6][2] = document.createTextNode(puesto);
//       contenedor_tabla_uno[cont][6][1].setAttribute("id", "puesto_" + cont);
//       contenedor_tabla_uno[cont][6][1].appendChild(contenedor_tabla_uno[cont][6][2]);
//       contenedor_tabla_uno[cont][0][0].appendChild(contenedor_tabla_uno[cont][6][1]);

//       $('#unidad').prop('selectedIndex', 0);
//       $('#sub_unidad').prop('selectedIndex', 0);
//       $('#categoria').prop('selectedIndex', 0);
//       $('#horas').prop('selectedIndex', 0);
//       $("#plaza").val("");
//       $('#motivo').prop('selectedIndex', 0);
//       $('#puesto').val("");

//     }

//   });

//   $('#btn_eliminar').click(function () {
//     removerUltimoElemento("#tabla_uno");
//   });

//   $('#btn_registrar').click(function () {

//     let cont = 0;
//     let texto_error = "";
//     if ($('#nombre').val() == '') {
//       alertaError('#asterisco_nombre', '#nombre');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_nombre', '#nombre');
//     }
//     if ($('#apePaterno').val() == '') {
//       alertaError('#asterisco_apePaterno', '#apePaterno');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_apePaterno', '#apePaterno');
//     }
//     if ($('#apeMaterno').val() == '') {
//       alertaError('#asterisco_apeMaterno', '#apeMaterno');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_apeMaterno', '#apeMaterno');
//     }
//     if ($('#rfc').val() == '') {
//       alertaError('#asterisco_rfc', '#rfc');
//       cont++;
//     } else if ($('#rfc').val().length == 13) {
//       limpiarAlertaError('#asterisco_rfc', '#rfc');
//     } else {
//       alertaError('#asterisco_rfc', '#rfc');
//       texto_error = `${texto_error} Campo RFC debe contener solamente 13 caracteres <br>`;
//       cont++;
//     }
//     if ($('#curp').val() == '') {
//       alertaError('#asterisco_curp', '#curp');
//       cont++;
//     } else if ($('#curp').val().length == 18) {
//       limpiarAlertaError('#asterisco_curp', '#curp');
//     } else {
//       alertaError('#asterisco_curp', '#curp');
//       texto_error = `${texto_error} Campo CURP debe contener solamente 18 caracteres <br>`;
//       cont++;
//     }
//     if ($('#ingresoGob').val() == '') {
//       alertaError('#asterisco_ingresoGob', '#ingresoGob');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_ingresoGob', '#ingresoGob');
//     }
//     if ($('#ingresoSep').val() == '') {
//       alertaError('#asterisco_ingresoSep', '#ingresoSep');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_ingresoSep', '#ingresoSep');
//     }
//     if ($('#ingresoDgeti').val() == '') {
//       alertaError('#asterisco_ingresoDgeti', '#ingresoDgeti');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_ingresoDgeti', '#ingresoDgeti');
//     }
//     if ($('#observaciones').val() == '') {
//       alertaError('#asterisco_observaciones', '#observaciones');
//       cont++;
//     } else {
//       limpiarAlertaError('#asterisco_observaciones', '#observaciones');
//     }

//     const contenedor_tabla = document.querySelector("#tabla_uno");
//     const hijos = contenedor_tabla.children;
//     let conta = hijos.length;
//     let informacion = "";
//     for (let i = 0; i < conta; i++) {
//       informacion = informacion + `
//         &unidad[${i}]=${document.getElementById("unidad_" + i).innerHTML}
//         &sub_unidad[${i}]=${document.getElementById("sub_unidad_" + i).innerHTML}
//         &categoria[${i}]=${document.getElementById("categoria_" + i).innerHTML}
//         &horas[${i}]=${document.getElementById("horas_" + i).innerHTML}
//         &plaza[${i}]=${document.getElementById("plaza_" + i).innerHTML}
//         &motivo[${i}]=${document.getElementById("motivo_" + i).innerHTML}
//         &puesto[${i}]=${document.getElementById("puesto_" + i).innerHTML}
//         `;

//     }

//     if (informacion == "") {
//       alertaError("#asterisco_tabla", "#tabla");
//       const titulo = document.querySelector("#tabla_base");
//       titulo.style.borderColor = "#D0021B";
//       titulo.style.borderTopWidth = "2px";
//       titulo.style.borderRightWidth = "2px";
//       titulo.style.borderBottomWidth = "3px";
//       titulo.style.borderLeftWidth = "2px";
//       texto_error = `${texto_error} Campo Tabla debe contener almenos 1 dato <br>`;
//       cont++;
//     } else {
//       limpiarAlertaError("#asterisco_tabla", "#tabla");
//       const titulo = document.querySelector("#tabla_base");
//       titulo.style.borderColor = "#DDD";
//       titulo.style.borderTopWidth = "1px";
//       titulo.style.borderRightWidth = "1px";
//       titulo.style.borderBottomWidth = "1px";
//       titulo.style.borderLeftWidth = "1px";
//     }

//     if (cont != 0) {
//       texto_error = `Debes llenar todos los campos <br>${texto_error}`;
//     }

//     if (texto_error != "" && cont != 0) {
//       mensajeError('#alerta', texto_error);
//       irArriba();
//     }

//     if (cont == 0) {
//      console.log($('#form_registrar_docente').serialize() + informacion);
//       limpiaMensajeError('#alerta');
//       // let form_url = $('#form_registrar_docente').attr("action");

//       $.ajax({
//         type: 'POST',
//         data: $('#form_registrar_docente').serialize()+informacion,
//         url: "controllers/personal_controllers.php",
//         success: function (r) {
//           console.log(r);
//           $('#unidad').prop('selectedIndex', 0);
//           $('#sub_unidad').prop('selectedIndex', 0);
//           $('#categoria').prop('selectedIndex', 0);
//           $('#horas').prop('selectedIndex', 0);
//           $("#plaza").val("");
//           $('#motivo').prop('selectedIndex', 0);
//           $('#puesto').prop('selectedIndex', 0);
//           $('#form_registrar_docente')[0].reset();
//           // window.location = "personal";
//           console.log(registro)
//         }

//       });
//     }

//   });

// });
