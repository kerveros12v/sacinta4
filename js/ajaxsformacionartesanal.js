$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablaFormacionArtesanal.php'

    })
    .done(function(cargar){
      $('#contenedorformacion').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){
    $('#btnguardar').attr("disabled", true);
    var formacionartesanocodigo=$('#formacionartesanocodigo').val()
    var nom=$('#formacionArtesanal').val()

    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaFormacionArtesanal.php',
      data:{'id':null,
      'nom':nom,
      'cod':formacionartesanocodigo,
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

    var formacionartesanocodigo=$('#formacionartesanocodigo'+dato).val()
    var nom=$('#formacionArtesanal'+dato).val()

    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaFormacionArtesanal.php',
      data:{'id':dato,
      'nom':nom,
      'cod':formacionartesanocodigo,
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
      var formacionartesanocodigo=$('#formacionartesanocodigo'+dato).val()
      var nom=$('#formacionArtesanal'+dato).val()

      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaFormacionArtesanal.php',
        data:{'id':dato,
        'nom':nom,
        'cod':formacionartesanocodigo,
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