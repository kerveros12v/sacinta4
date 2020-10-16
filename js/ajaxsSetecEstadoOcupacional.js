$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsSetecEstadoOcupacional.php'

    })
    .done(function(cargar){
      $('#setecestadoOcupacional').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }
  function registro(){
      var cod= $('#setecestadoocupacionalcodigo').val()
      var nom=$('#estadoOcupacional').val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecEstadoOcupacion.php',
        data:{'id':null,
        'nom':nom,
        'cod':cod,
        'eliminar':0,
        'actualizar':0,
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
      var cod= $('#setecestadoocupacionalcodigo'+dato).val()
      var nom=$('#estadoOcupacional'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecEstadoOcupacion.php',
        data:{'id':dato,
        'nom':nom,
        'cod':cod,
        'eliminar':0,
        'actualizar':1,
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
        var cod= $('#setecestadoocupacionalcodigo'+dato).val()
        var nom=$('#estadoOcupacional'+dato).val()
        $.ajax({
          type: 'POST',
          url: '../controladores/registroSetecEstadoOcupacion.php',
          data:{'id':dato,
          'nom':nom,
          'cod':cod,
          'eliminar':1,
          'actualizar':2,
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
          alert('Hubo un error al Eliminar de Perfiles')
        })
      }