$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablacicloperiodoacademico.php'

    })
    .done(function(cargar){
      $('#contenedorcicloperiodoacademico').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var cicloperiodocodigo=$('#cicloperiodocodigo').val()
    var nom=$('#ciclo').val()
    var nivel=$('#nivelInstruccion').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaCicloPeriodoAcademico.php',
      data:{'id':null,
      'nom':nom,
      'cod':cicloperiodocodigo,
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

    var cicloperiodocodigo=$('#cicloperiodocodigo'+dato).val()
    var nom=$('#ciclo'+dato).val()
    var nivel=$('#nivelInstruccion'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaCicloPeriodoAcademico.php',
      data:{'id':dato,
      'nom':nom,
      'cod':cicloperiodocodigo,
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
      var cicloperiodocodigo=$('#cicloperiodocodigo'+dato).val()
      var nom=$('#ciclo'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaCicloPeriodoAcademico.php',
        data:{'id':dato,
        'nom':nom,
        'cod':cicloperiodocodigo,
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