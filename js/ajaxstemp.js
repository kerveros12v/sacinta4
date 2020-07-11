$(document).ready(function(){
    cargarperfil();
    cargartabla();
});
function cargarperfil(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsselectperfilaccesosdepartamentosprint.php'
    })
    .done(function(cargar){
      $('#perfilselect').html(cargar)
      cargartabla();
    })
    .fail(function(){
      alert('Hubo un error al cargar de Tipos de Usuarios')
    });

    $('#perfilselect').on('change', function () {
     cargartabla();
    });
  }
function nuevoperfil(){
  var perfilacceso=$('#perfilacceso').val();
  if(perfilacceso.replace(/ /g, "")!="") $("#perfilselect").append('<option value='+perfilacceso+'>'+perfilacceso+'</option>');
  $('#perfilacceso').val("");
}
function cargartabla(){
  var id = $('#perfilselect').val()
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsaccesotabla.php',
    data:{'id':id}
  })
  .done(function(cargar){
    $('#contenedortemp').html(cargar)
  })
  .fail(function(){
    alert('Hubo un error al cargar la lista de Permisos del Perfil seleccionado')
  })
}

  function registro(){
    var cod= $('#provinciacodigo').val();
    var nom=$('#provincia').val();
    var pais=$('#paisprovincia').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registroProvincias.php',
      data:{
      'id':null,
      'cod':cod,
      'nom':nom,
      'pais':pais,
      'eliminar':0,
      'actualizar':0,
      'opt':1}
      })
      .done(function(cargar){
        alert('Accion Realizada: '+cargar)
        cargartabla();
      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      });
      cargarProvincias();
    }
    function actualizar(dato){
      var cod= $('#provinciacodigo'+dato).val();
      var nom=$('#provincia'+dato).val();
      var pais=$('#paisprovincia').val();
      $.ajax({
        type: 'POST',
        url: '../controladores/registroProvincias.php',
        data:{
        'id':dato,
        'cod':cod,
        'nom':nom,
        'pais':pais,
        'eliminar':0,
        'actualizar':1,
        'opt':2}
        })
        .done(function(cargar){
          alert(cargar)
          cargartabla()
        })
        .fail(function(){
          alert('Hubo un error al cargar')
        })
      }
      function eliminar(dato){
        var cod= $('#provinciacodigo'+dato).val();
        var nom=$('#provincia'+dato).val();
        var pais=$('#paisprovincia').val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registroProvincias.php',
          data:{
          'id':dato,
          'cod':cod,
          'nom':nom,
          'pais':pais,
            'eliminar':1,
            'actualizar':2,
            'opt':0}
        })
        .done(function(cargar){
          alert(cargar)
          cargartabla()
        })
        .fail(function(){
          alert('Hubo un error al cargar')
        })
      }
