$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxstablatiposostenimiento.php'

    })
    .done(function(cargar){
      $('#contenedortiposostenimiento').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var codigo=$('#sostenimientoscodigo').val()
    var nom=$('#sostenimiento').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipoSostenimiento.php',
      data:{'id':null,
      'nom':nom,
      'cod':codigo,
      'actualizar':1,
      'eliminar':0,
      'opt':1}
    })
    .done(function(cargar){
      $('#dialog-confirm').html(cargar)
      $("#dialog").dialog({
        height: 250,
        buttons: {
          Aceptar: function () {
            cargartabla()
            $(this).dialog("close");

          }
        }
      })
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    })
  }
  function actualizar(dato){

    var codigo=$('#sostenimientoscodigo'+dato).val()
    var nom=$('#sostenimiento'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipoSostenimiento.php',
      data:{'id':dato,
      'nom':nom,
      'cod':codigo,
      'actualizar':1,
      'eliminar':0,
      'opt':2}
      })
      .done(function(cargar){
        $('#dialog-confirm').html(cargar)
        $("#dialog").dialog({
          height: 250,
          buttons: {
            Aceptar: function () {
              cargartabla()
              $(this).dialog("close");

            }
          }
        })
      })
      .fail(function(){
        alert('Hubo un error al Actualizar de Perfiles')
      })
    }
    function eliminar(dato){
      var codigo=$('#sostenimientoscodigo'+dato).val()
      var nom=$('#sostenimiento'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaTipoSostenimiento.php',
        data:{'id':dato,
        'nom':nom,
        'cod':codigo,
        'actualizar':2,
        'eliminar':1,
        'opt':0}
      })
      .done(function(cargar){
        $('#dialog-confirm').html(cargar)
        $("#dialog").dialog({
          height: 250,
          buttons: {
            Aceptar: function () {
              cargartabla()
              $(this).dialog("close");

            }
          }
        })
      })
      .fail(function(){
        alert('\tNo puede ser "Eliminado" \nRevise que no este enlasado a otro registro')
      })
    }