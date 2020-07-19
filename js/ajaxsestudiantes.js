$(document).ready(function(){
  cargarFormulario();
  cargarDiscapaidadEstudiante();
  cargarResidenciaEstudiante();
  cargarContactoEmergenciaEstudiante();
  cargarBachilleratoEstudiantes();
  cargarTitulotercernivelEstudiante();
  cargarCodMatricula();
  cargarformMatricula();
  cargarformtrabajo();
  cargarmenu();
});
function mostrarReporteMatricula(){
  //window.open("../reportes/formularioMatriculacionEstudiante.php?cedula="+$('#ced').val(), "Formulario de Matriculacion", "width=1000, height=1000")

    window.Location('../reportes/formularioMatriculacionEstudiante.php','top', "Formulario de Matriculacion", "width=100%, height=100%,location=no");

}
function cargarFormulario(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsformulariodatosdelestudiante.php'
    })
    .done(function(cargar){
      $('#datosestudiante').html(cargar)
    })
    .fail(function(){
      console.log('Hubo un error al cargar los datos del Estudiante')
    });
var a

}
function cargarDiscapaidadEstudiante(){
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariodicapacidadestudiantes.php'
  })
  .done(function(cargar){
    $('#datosdiscapacidad1').html(cargar)
  })
  .fail(function(){
    console.log('Hubo un error al cargar Discapaidad Estudiante')
  });

}
function cargarTitulotercernivelEstudiante(){
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariotitulotercernivelestudiantes.php'
  })
  .done(function(cargar){
    $('#titulotercernivel').html(cargar)
  })
  .fail(function(){
    console.log('Hubo un error al cargar Discapaidad Estudiante')
  });

}
function cargarResidenciaEstudiante(){
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformularioresidenciaestudiante.php'
  })
  .done(function(cargar){
    $('#datosresidencia').html(cargar)
  })
  .fail(function(){
    console.log('Hubo un error al cargar los datos del Estudiante')
  });

}

function cargarContactoEmergenciaEstudiante(){
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariocontacosemergenciaestudiantes.php'
  })
  .done(function(cargar){
    $('#datoscontactosEmergencia').html(cargar)
  })
  .fail(function(){
    console.log('Hubo un error al cargar los datos del Estudiante')
  });

}
function cargarBachilleratoEstudiantes(){
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariobachilleratoestudiante.php'
  })
  .done(function(cargar){
    $('#bachillerato').html(cargar)
  })
  .fail(function(){
    console.log('Hubo un error al cargar los datos del Estudiante')
  });

}

function cargarCodMatricula(){
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxscampoCodigoMatriculacion.php'
  })
  .done(function(cargar){
    $('#codmatricula').html(cargar)
  })
  .fail(function(){
    console.log('Hubo un error al cargar los datos del Estudiante')
  });

}
function cargarformMatricula(){
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariomatriculaestudiante.php'
  })
  .done(function(cargar){
    $('#datosMatricula').html(cargar)
  })
  .fail(function(){
    console.log('Hubo un error al cargar los datos del Estudiante')
  });

}
function cargarformtrabajo(){
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsformulariotrabajoestudiante.php'
  })
  .done(function(cargar){
    $('#datosTrabajo').html(cargar)
  })
  .fail(function(){
    console.log('Hubo un error al cargar los datos del Estudiante')
  });

}
function cargarmenu(){
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsmenusecundarioestudiante.php'
  })
  .done(function(cargar){
    $('#nav1').html(cargar)
  })
  .fail(function(){
    alert('Hubo un error al cargar el Menu')
  })
}
function cargarDatosCampo(url1){
  $.ajax({
    type: 'POST',
    url: url1
  })
  .done(function(cargar){
    $('#contenedordatos').html(cargar)
  })
  .fail(function(){
    alert('Hubo un error al cargar el Menu')
  })
}