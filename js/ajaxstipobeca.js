$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablatipobeca.php'

    })
    .done(function(cargar){
      $('#contenedortipoBeca').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var codigo=$('#tipobecacodigo').val()
    var nom=$('#tipoBeca').val()
    var bool=$('#tipobecabool').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipobeca.php',
      data:{'id':null,
      'nom':nom,
      'cod':codigo,
      'bool':bool,
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

    var codigo=$('#tipobecacodigo'+dato).val()
    var nom=$('#tipoBeca'+dato).val()
    var bool=$('#tipobecabool'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipobeca.php',
      data:{'id':dato,
      'nom':nom,
      'cod':codigo,
      'bool':bool,
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
      var codigo=$('#tipobecacodigo'+dato).val()
      var nom=$('#tipoBeca'+dato).val()
      var bool=$('#tipobecabool'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaTipobeca.php',
        data:{'id':dato,
        'nom':nom,
        'cod':codigo,
        'bool':bool,
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