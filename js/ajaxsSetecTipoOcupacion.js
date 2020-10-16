$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsSetesTipoOcupacion.php'

    })
    .done(function(cargar){
      $('#setecocupacion').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }
  function registro(){
      var cod= $('#setectipoocupacioncodigo').val()
      var nom=$('#tipoOcupacion').val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecTipoOcupacion.php',
        data:{'id':null,
        'nom':nom,
        'cod':cod,
        'eliminar':0,
        'actualizar':0,
        'opt':1
      }
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
        var id= dato;
        var cod= $('#setectipoocupacioncodigo'+dato).val();
        var nom=$('#tipoOcupacion'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registroSetecTipoOcupacion.php',
          data:{'id':id,
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
          alert('Hubo un error al cargar de Perfiles')
        })
      }
      function eliminar(dato){
        var id= dato;
        var cod= $('#setectipoocupacioncodigo'+dato).val()
        var nom=$('#tipoOcupacion'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registroSetecTipoOcupacion.php',
          data:{'id':id,
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
          alert('Hubo un error al cargar de Perfiles')
        })
      }