$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablatitulotercernivel.php'

    })
    .done(function(cargar){
      $('#titulotercernivel').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var titulotercernivelcodigo=$('#titulotercernivelcodigo').val()
    var tituloTercerNivel=$('#tituloTercerNivel').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registroTitulotercernivel.php',
      data:{'tituloTercerNivelId':null,
      'titulotercernivelcodigo':titulotercernivelcodigo,
      'tituloTercerNivel':tituloTercerNivel,
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
    var titulotercernivelcodigo=$('#titulotercernivelcodigo'+dato).val()
    var tituloTercerNivel=$('#tituloTercerNivel'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registroTitulotercernivel.php',
      data:{'tituloTercerNivelId':dato,
      'titulotercernivelcodigo':titulotercernivelcodigo,
      'tituloTercerNivel':tituloTercerNivel,
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
      var titulotercernivelcodigo=$('#titulotercernivelcodigo'+dato).val()
      var tituloTercerNivel=$('#tituloTercerNivel'+dato).val()

      $.ajax({
        type: 'POST',
        url: '../controladores/registroTitulotercernivel.php',
        data:{'tituloTercerNivelId':dato,
        'titulotercernivelcodigo':titulotercernivelcodigo,
        'tituloTercerNivel':tituloTercerNivel,
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