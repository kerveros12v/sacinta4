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
function salirmatricula(){
  $.ajax({
    type: 'POST',
    url: '../controladores/salirsistema.php'
  })
  .done(function(cargar){
    window.location.replace('../Templates/opcionesMatriculacion.php');
  })
  .fail(function(){
    alert('Hubo un error al cargar el Menu')
  })
}
function mostrarReporteMatricula(){
  //window.open("../reportes/formularioMatriculacionEstudiante.php?cedula="+$('#ced').val(), "Formulario de Matriculacion", "width=1000, height=1000")
  registrarEstudiante();
    //window.Location('../reportes/formularioMatriculacionEstudiante.php','top', "Formulario de Matriculacion", "width=100%, height=100%,location=no");

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
function registrarEstudiante(){
  var tipodocumento=$('#tipodocumento').val();
  var ced=$('#ced').val();
  var apellidoEst=$('#apellidoEst').val();
  var apellidoEst2=$('#apellidoEst2').val();
  var nombreEst=$('#nombreEst').val();
  var nombreEst2=$('#nombreEst2').val();
  var lstsexo=$('#lstsexo').val();
  var lstgeneros=$('#lstgeneros').val();
  var estadoCivil=$('#estadoCivil').val();
  var lstsangre=$('#lstsangre').val();
  var fechanaci=$('#fechanaci').val();
  var paisNacionalidad=$('#paisNacionalidad').val();
  var provinciaNacionalidad=$('#provinciaNacionalidad').val();
  var cantonNacionalidad=$('#cantonNacionalidad').val();
  var categoraMigratoria=$('#categoraMigratoria').val();
  var etnia=$('#etnia').val();
  var pueblonacionalidad=$('#pueblonacionalidad').val();
  var lstidioma=$('#lstidioma').val();
  var email1=$('#email1').val();
  var numcelular=$('#numcelular').val();
  var numconvenconal=$('#numconvenconal').val();
  /*console.log("Datos enviados desde el cliente:\n tipodocumento : "+tipodocumento+"\n cedula : "+ced+
  "\n apellidoEst : "+apellidoEst+
  '\n apellidoEst2 : '  +apellidoEst2+
  '\n nombreEst : '  +nombreEst+
  '\n nombreEst2 : '  +nombreEst2+
  '\n lstsexo : '  +lstsexo+
  '\n lstgeneros : '  +lstgeneros+
  '\n estadoCivil : '  +estadoCivil+
  '\n lstsangre : '  +lstsangre+
  '\n fechanaci : '  +fechanaci+
  '\n paisNacionalidad : '  +paisNacionalidad+
  '\n provinciaNacionalidad : '  +provinciaNacionalidad+
  '\n cantonNacionalidad : '  +cantonNacionalidad+
  '\n categoraMigratoria : '  +categoraMigratoria+
  '\n etnia : '  +etnia+
  '\n pueblonacionalidad : '  +pueblonacionalidad+
  '\n lstidioma : '  +lstidioma+
  '\n email1 : '  +email1+
  '\n numcelular : '  +numcelular+
  '\n numconvenconal : '  +numconvenconal);
  */
  $.ajax({
    type: 'POST',
    url: '../controladores/registroEstudiante.php',
    data:{
    'tipodocumento':tipodocumento,
    'ced':ced,
    'apellidoEst':apellidoEst,
    'apellidoEst2':apellidoEst2,
    'nombreEst':nombreEst,
    'nombreEst2':nombreEst2,
    'lstsexo':lstsexo,
    'lstgeneros':lstgeneros,
    'estadoCivil':estadoCivil,
    'lstsangre':lstsangre,
    'fechanaci':fechanaci,
    'paisNacionalidad':paisNacionalidad,
    'provinciaNacionalidad':provinciaNacionalidad,
    'cantonNacionalidad':cantonNacionalidad,
    'categoraMigratoria':categoraMigratoria,
    'etnia':etnia,
    'pueblonacionalidad':pueblonacionalidad,
    'lstidioma':lstidioma,
    'email1':email1,
    'numcelular':numcelular,
    'numconvenconal':numconvenconal,
    'actualizar':0,
    'eliminar':0,
    'opt':1}
  })
  .done(function(cargar){
    alert(cargar)
    cargarFormulario()
  })
  .fail(function(){
    alert('Hubo un error al cargar de Perfiles')
  })
}
function registrarEstudianteUsuario(dato){
  var usuarioEstudiantes=$('#usuarioEstudiantes').val();
  var passwordEstudiantes=$('#passwordEstudiantes').val();
  var accesodepartamento_codigo=$('#accesodepartamento_codigo').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroEstudiante.php',
    data:{'id':null,
    'tipodocumento':dato,
    'usuarioEstudiantes':usuarioEstudiantes,
    'passwordEstudiantes':passwordEstudiantes,
    'accesodepartamento_codigo':accesodepartamento_codigo,
    'actualizar':1,
    'eliminar':0,
    'opt':1}
  })
  .done(function(cargar){
    alert(cargar)
 cargartabla()
  })
  .fail(function(){
    alert('Hubo un error al cargar de Perfiles')
  })
}

//muestra la interface de carga de foto del estudiante
function cargarEstudiantefoto(){
  var imgsubirest=$('#imgsubirest').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registroEstudiante.php',
    data:{'imgsubirest':imgsubirest,
    'actualizar':1,
    'eliminar':0,
    'opt':3}
  })
  .done(function(cargar){
    alert(cargar)
  })
  .fail(function(){
    alert('Hubo un error al cargar de Perfiles')
  })
}
//sube la foto del estudiante
function cargafotoestudiante(){
  console.log("Boton imagen precionado");
  $.ajax({
    type: 'POST',
    url: '../Templates/cargafotoestudiante.php'
  })
  .done(function(cargar){
    $('#contenedordatos').html(cargar)
  })
  .fail(function(){
    alert('Hubo un error al cargar el Menu')
  })

}
function cargarpaisest1() {
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectpaisprint.php'

  })
    .done(function (cargar) {
      $('#paisNacionalidad').html(cargar);
      cargarProvinciasest1();
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });

}
function cargarProvinciasest1() {

  $('#paisNacionalidad').on('change', function () {
    var id = $('#paisNacionalidad').val();
    console.log("pais seleccionado: "+id);
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectprovinciaprint.php',
      data: { 'id': id }
    })
      .done(function (cargar) {
        $('#provinciaNacionalidad').html(cargar);
        cargarCantonest1();

      })
      .fail(function () {
        alert('Hubo un error al cargar la lista de Provincias')
      })
  })
}
function cargarCantonest1() {

    var id = $('#provinciaNacionalidad').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectcantonprint.php',
      data: {
        'canton': -1,
        'provincia': id
      }
    })
      .done(function (cargar) {
        $('#cantonNacionalidad').html(cargar);
      })
      .fail(function () {
        alert('Hubo un error al cargar la lista de Provincias')
      })

}