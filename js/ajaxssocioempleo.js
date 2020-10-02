$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablaSocioEmpleo.php'

    })
    .done(function(cargar){
      $('#contenedorsocioempleo').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){
    var nom=$('#socioEmpleoregistro').val()

    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaSocioEmpleo.php',
      data:{'id':null,
      'nom':nom,
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
    var nom=$('#socioEmpleoregistro'+dato).val()

    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaSocioEmpleo.php',
      data:{'id':dato,
      'nom':nom,
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
      var nom=$('#socioEmpleoregistro'+dato).val()

      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaSocioEmpleo.php',
        data:{'id':dato,
        'nom':nom,
        'actualizar':1,
        'eliminar':0,
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