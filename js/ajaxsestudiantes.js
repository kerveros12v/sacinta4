$(document).ready(function () {
  cargarFormulario();
 // cargarDiscapaidadEstudiante();
  cargarResidenciaEstudiante();
  cargarContactoEmergenciaEstudiante();
  cargarBachilleratoEstudiantes();
 // cargarTitulotercernivelEstudiante();
  //cargarCodMatricula();
  //cargarformMatricula();
  //cargarformtrabajo();

  cargarmenu();
  //cargarpaisest2();
});
function salirmatricula() {
  $.ajax({
    type: 'POST',
    url: '../controladores/salirsistema.php'
  })
    .done(function (cargar) {
      window.location.replace('../Templates/opcionesMatriculacion.php');
    })
    .fail(function () {
      alert('Hubo un error al cargar el Menu')
    })
}
function mostrarReporteMatricula() {


  //window.open("../reportes/formularioMatriculacionEstudiante.php?cedula="+$('#ced').val(), "Formulario de Matriculacion", "width=1000, height=1000")
  registrarEstudiante();
  //registrardisapacidadEstudiante();
  registrarresisenciaEstudiante();
  //window.Location('../reportes/formularioMatriculacionEstudiante.php','top', "Formulario de Matriculacion", "width=100%, height=100%,location=no");
  registrarContactoEmergencia();
registrarBachillerato();
  cargarFormulario();
 // cargarDiscapaidadEstudiante();
  cargarResidenciaEstudiante();
  cargarContactoEmergenciaEstudiante();
 // cargarBachilleratoEstudiantes();
 // cargarTitulotercernivelEstudiante();
  //cargarCodMatricula();
  //cargarformMatricula();
  //cargarformtrabajo();
}
function cargarFormulario() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariodatosdelestudiante.php'
  })
    .done(function (cargar) {
      $('#datosestudiante').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar los datos del Estudiante')
    });

}
function cargarDiscapaidadEstudiante() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariodicapacidadestudiantes.php'
  })
    .done(function (cargar) {
      $('#datosdiscapacidad1').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar Discapaidad Estudiante')
    });

}
function cargarTitulotercernivelEstudiante() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariotitulotercernivelestudiantes.php'
  })
    .done(function (cargar) {
      $('#titulotercernivel').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar Discapaidad Estudiante')
    });

}
function cargarResidenciaEstudiante() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformularioresidenciaestudiante.php'
  })
    .done(function (cargar) {
      $('#datosresidencia').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar los datos del Estudiante')
    });

}

function cargarContactoEmergenciaEstudiante() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariocontacosemergenciaestudiantes.php'
  })
    .done(function (cargar) {
      $('#datoscontactosEmergencia').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar los datos del Estudiante')
    });

}
function cargarBachilleratoEstudiantes() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariobachilleratoestudiante.php'
  })
    .done(function (cargar) {
      $('#bachillerato').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar los datos del Estudiante')
    });

}

function cargarCodMatricula() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxscampoCodigoMatriculacion.php'
  })
    .done(function (cargar) {
      $('#codmatricula').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar los datos del Estudiante')
    });

}
function cargarformMatricula() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariomatriculaestudiante.php'
  })
    .done(function (cargar) {
      $('#datosMatricula').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar los datos del Estudiante')
    });

}
function cargarformtrabajo() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariotrabajoestudiante.php'
  })
    .done(function (cargar) {
      $('#datosTrabajo').html(cargar)
    })
    .fail(function () {
      console.log('Hubo un error al cargar los datos del Estudiante')
    });

}
function cargarmenu() {
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsmenusecundarioestudiante.php'
  })
    .done(function (cargar) {
      $('#nav1').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar el Menu')
    })
}
function cargarDatosCampo(url1) {
  $.ajax({
    type: 'POST',
    url: url1
  })
    .done(function (cargar) {
      $('#contenedordatos').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar el url:' + url1)
    })
}
function registrarEstudiante() {
  var tipodocumento = $('#tipodocumento').val();
  var ced = $('#ced').val();
  var apellidoEst = $('#apellidoEst').val();
  var apellidoEst2 = $('#apellidoEst2').val();
  var nombreEst = $('#nombreEst').val();
  var nombreEst2 = $('#nombreEst2').val();
  var lstsexo = $('#lstsexo').val();
  var lstgeneros = $('#lstgeneros').val();
  var estadoCivil = $('#estadoCivil').val();
  var lstsangre = $('#lstsangre').val();
  var fechanaci = $('#fechanaci').val();
  var cantonNacionalidad = $('#cantonNacionalidad').val();
  var categoraMigratoria = $('#categoraMigratoria').val();
  var pueblonacionalidad = $('#pueblonacionalidad').val();
  var lstidioma = $('#lstidioma').val();
  var email1 = $('#email1').val();
  var numcelular = $('#numcelular').val();
  var numconvenconal = $('#numconvenconal').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registroEstudiante.php',
    data: {
      'tipodocumento': tipodocumento,
      'ced': ced,
      'apellidoEst': apellidoEst,
      'apellidoEst2': apellidoEst2,
      'nombreEst': nombreEst,
      'nombreEst2': nombreEst2,
      'lstsexo': lstsexo,
      'lstgeneros': lstgeneros,
      'estadoCivil': estadoCivil,
      'lstsangre': lstsangre,
      'fechanaci': fechanaci,
      'cantonNacionalidad': cantonNacionalidad,
      'categoraMigratoria': categoraMigratoria,
      'pueblonacionalidad': pueblonacionalidad,
      'lstidioma': lstidioma,
      'email1': email1,
      'numcelular': numcelular,
      'numconvenconal': numconvenconal,
      'actualizar': 0,
      'eliminar': 0,
      'opt': 1
    }
  })
    .done(function (cargar) {
      return cargar;
    })
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    })
}
function registrarEstudianteUsuario(dato) {
  var usuarioEstudiantes = $('#usuarioEstudiantes').val();
  var passwordEstudiantes = $('#passwordEstudiantes').val();
  var accesodepartamento_codigo = $('#accesodepartamento_codigo').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroEstudiante.php',
    data: {
      'id': null,
      'tipodocumento': dato,
      'usuarioEstudiantes': usuarioEstudiantes,
      'passwordEstudiantes': passwordEstudiantes,
      'accesodepartamento_codigo': accesodepartamento_codigo,
      'actualizar': 1,
      'eliminar': 0,
      'opt': 1
    }
  })
    .done(function (cargar) {
      return cargar;
    })
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    })
}

//muestra la interface de carga de foto del estudiante
function cargarEstudiantefoto() {
  var imgsubirest = $('#imgsubirest').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registroEstudiante.php',
    data: {
      'imgsubirest': imgsubirest,
      'actualizar': 1,
      'eliminar': 0,
      'opt': 3
    }
  })
    .done(function (cargar) {
      $('#dialog-confirm').html(cargar)
      $("#dialog").dialog({
        height: 250,
        buttons: {
          Aceptar: function () {
            $(this).dialog("close");

          }
        }
      })
    })
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    })
}
//sube la foto del estudiante
function cargafotoestudiante() {
  console.log("Boton imagen precionado");
  $.ajax({
    type: 'POST',
    url: '../Templates/cargafotoestudiante.php'
  })
    .done(function (cargar) {
      $('#contenedordatos').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar el Menu')
    })

}

function registrardisapacidadEstudiante() {
  var CarnetConadisId = $('#CarnetConadisId').val();
  var fkDiscapacidadDiscapacidadId = $('#fkDiscapacidadDiscapacidadId').val();
  var fkTipoDiscapacidadTipoDiscapacidadId = $('#fkTipoDiscapacidadTipoDiscapacidadId').val();
  var porcentajeDiscapacidad = $('#porcentajeDiscapacidad').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registroDiscapacidadEstudiante.php',
    data: {
      'CarnetConadisId': CarnetConadisId,
      'fkDiscapacidadDiscapacidadId': fkDiscapacidadDiscapacidadId,
      'fkTipoDiscapacidadTipoDiscapacidadId': fkTipoDiscapacidadTipoDiscapacidadId,
      'porcentajeDiscapacidad': porcentajeDiscapacidad,
      'actualizar': 0,
      'eliminar': 0,
      'opt': 1
    }
  })
    .done(function (cargar) {
      $('#dialog-confirm').html(cargar)
      $("#dialog").dialog({
        height: 250,
        buttons: {
          Aceptar: function () {
            cargarFormulario()
            $(this).dialog("close");

          }
        }
      })
    })
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    })
}
function registrarresisenciaEstudiante() {
  var direcciondomi = $('#direcciondomi').val();
  var parroquia = $('#parroquiaRecidencia1').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroResidenciaEstudiante.php',
    data: {
      'direcciondomi': direcciondomi,
      'parroquia': parroquia,
      'actualizar': 0,
      'eliminar': 0,
      'opt': 1
    }
  })
    .done(function (cargar) {
      return cargar;
    })
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    })
}
function registrarContactoEmergencia() {
  var nomcontactoemergen = $('#nomcontactoemergen').val();
  var numcontacto = $('#numcontacto').val();
  var parentesco1 = $('#parentesco1').val();
  console.log("Datos a enviar de contacto de emergencia: {"+nomcontactoemergen+"}"+"{"+numcontacto+"}"+"{"+parentesco1+"}");
  $.ajax({
    type: 'POST',
    url: '../controladores/registroContactoEmergenciaEstudiante.php',
    data: {
      'nomcontactoemergen': nomcontactoemergen,
      'numcontacto': numcontacto,
      'parentesco1': parentesco1,
      'actualizar': 0,
      'eliminar': 0,
      'opt': 1
    }
  })
    .done(function (cargar) {
      return cargar;
    })
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    })
}
function registrarBachillerato() {
  var colegio = $('#colegio').val();
  var fkTiposBacilleratotiposBacilleratoId = $('#fkTiposBacilleratotiposBacilleratoId').val();
  var graduacion = $('#graduacion').val();
  console.log("Datos a enviar de Bachillerato");
  $.ajax({
    type: 'POST',
    url: '../controladores/registroBachilleratoEstudiantes.php',
    data: {
      'colegio': colegio,
      'fkTiposBacilleratotiposBacilleratoId': fkTiposBacilleratotiposBacilleratoId,
      'graduacion': graduacion,
      'actualizar': 0,
      'eliminar': 0,
      'opt': 1
    }
  })
    .done(function (cargar) {
      return cargar;
    })
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    })
}

