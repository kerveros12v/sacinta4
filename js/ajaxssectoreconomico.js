$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablasectoreconomico.php'

    })
    .done(function(cargar){
      $('#contenedorsectoreconomico').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var codigo=$('#sectoreconomicocodigo').val()
    var nom=$('#SectorEconomico').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaSectoreconomico.php',
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

    var codigo=$('#sectoreconomicocodigo'+dato).val()
    var nom=$('#SectorEconomico'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaSectoreconomico.php',
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
      var codigo=$('#sectoreconomicocodigo'+dato).val()
      var nom=$('#SectorEconomico'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaSectoreconomico.php',
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