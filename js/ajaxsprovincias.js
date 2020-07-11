$(document).ready(function(){
    cargarpais();
    cargarProvincias();
    cargartabla();
});
function cargarpais(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsselectpaisprint.php'

    })
    .done(function(cargar){
      $('#paisprovincia').html(cargar)
      cargartabla();
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });

  }

function cargartabla(){
  var id = $('#paisprovincia').val()
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsprovinciastabla.php',
    data:{'id':id}
  })
  .done(function(cargar){
    $('#contenedorprovincias').html(cargar)
  })
  .fail(function(){
    alert('Hubo un error al cargar la lista de Provincias')
  })
}
  function cargarProvincias(){

    $('#paisprovincia').on('change', function(){
      var id = $('#paisprovincia').val()
      $.ajax({
        type: 'POST',
        url: '../ajax/ajaxsprovinciastabla.php',
        data:{'id':id}
      })
      .done(function(cargar){
        $('#contenedorprovincias').html(cargar)
      })
      .fail(function(){
        alert('Hubo un error al cargar la lista de Provincias')
      })
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
