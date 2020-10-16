$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsSetecExperienciaLaboral.php'

    })
    .done(function(cargar){
      $('#setecexperienciaaspirante').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    var fknumidentificacion= $('#fknumidentificacion').val();
    var experiencianombreEmpresa=$('#experiencianombreEmpresa').val();
    var tiempodetrabajo= $('#tiempodetrabajo').val();
    var setecactividadRealizada=$('#setecactividadRealizada').val();
   $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaSetecExperienciaLaboral.php',
      data:{
      'id':null,
      'fknumidentificacion':fknumidentificacion,
      'experiencianombreEmpresa':experiencianombreEmpresa,
      'tiempodetrabajo':tiempodetrabajo,
      'setecactividadRealizada':setecactividadRealizada,
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

      var fknumidentificacion= $('#fknumidentificacion'+dato).val();
      var experiencianombreEmpresa=$('#experiencianombreEmpresa'+dato).val();
      var tiempodetrabajo= $('#tiempodetrabajo'+dato).val();
      var setecactividadRealizada=$('#setecactividadRealizada'+dato).val();
     $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaSetecExperienciaLaboral.php',
        data:{
        'id':dato,
        'fknumidentificacion':fknumidentificacion,
        'experiencianombreEmpresa':experiencianombreEmpresa,
        'tiempodetrabajo':tiempodetrabajo,
        'setecactividadRealizada':setecactividadRealizada,
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
          alert('Hubo un error al cargar')
        })
      }
      function eliminar(dato){
        var fknumidentificacion= $('#fknumidentificacion'+dato).val();
        var experiencianombreEmpresa=$('#experiencianombreEmpresa'+dato).val();
        var tiempodetrabajo= $('#tiempodetrabajo'+dato).val();
        var setecactividadRealizada=$('#setecactividadRealizada'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaSetecExperienciaLaboral.php',
          data:{
          'id':dato,
          'fknumidentificacion':fknumidentificacion,
          'experiencianombreEmpresa':experiencianombreEmpresa,
          'tiempodetrabajo':tiempodetrabajo,
          'setecactividadRealizada':setecactividadRealizada,
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
          alert('Hubo un error al cargar')
        })
      }