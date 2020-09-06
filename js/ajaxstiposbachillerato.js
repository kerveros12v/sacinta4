$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablatipobachillerato.php'

    })
    .done(function(cargar){
      $('#contenedortipoBachillerato').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var codigo=$('#tiposbacilleratocodigo').val()
    var nom=$('#tipoBacillerato').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipobahillerato.php',
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

    var codigo=$('#tiposbacilleratocodigo'+dato).val()
    var nom=$('#tipoBacillerato'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipobahillerato.php',
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
      var codigo=$('#tiposbacilleratocodigo'+dato).val()
      var nom=$('#tipoBacillerato'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaTipobahillerato.php',
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