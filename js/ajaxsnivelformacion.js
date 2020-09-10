$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablaNivelFormacion.php'

    })
    .done(function(cargar){
      $('#contenedornivelformacion').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var codigonivelFormacion=$('#codigonivelFormacion').val()
    var nom=$('#nivelFormacion').val()
    var nivel=$('#nivelInstruccion').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotabaNivelFormacion.php',
      data:{'id':null,
      'nom':nom,
      'cod':codigonivelFormacion,
      'nivel':nivel,
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

    var codigonivelFormacion=$('#codigonivelFormacion'+dato).val()
    var nom=$('#nivelFormacion'+dato).val()
    var nivel=$('#nivelInstruccion'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotabaNivelFormacion.php',
      data:{'id':dato,
      'nom':nom,
      'cod':codigonivelFormacion,
      'nivel':nivel,
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
      var codigonivelFormacion=$('#codigonivelFormacion'+dato).val()
      var nom=$('#nivelFormacion'+dato).val()
      var nivel=$('#nivelInstruccion'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotabaNivelFormacion.php',
        data:{'id':dato,
        'nom':nom,
        'cod':codigonivelFormacion,
        'nivel':nivel,
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