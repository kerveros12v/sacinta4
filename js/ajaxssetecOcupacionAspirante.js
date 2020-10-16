$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablaSetecOcupacionAspirantes.php'

    })
    .done(function(cargar){
      $('#setecocupacionaspirante').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    var fkaspirantesetec= $('#fkaspirantesetec').val();
    var fktipoOcupacion=$('#fktipoOcupacion').val();
    var setecocupacionAsignada= $('#setecocupacionAsignada').val();
    var fkestadoOcupacional=$('#fkestadoOcupacional').val();
    var horasTrabajadasxSemana= $('#horasTrabajadasxSemana').val();
    var fkareadepartamento= $('#fkareadepartamento').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaSetecOcupacionAspirante.php',
      data:{
      'id':null,
      'fkaspirantesetec':fkaspirantesetec,
      'fktipoOcupacion':fktipoOcupacion,
      'setecocupacionAsignada':setecocupacionAsignada,
      'fkestadoOcupacional':fkestadoOcupacional,
      'horasTrabajadasxSemana':horasTrabajadasxSemana,
      'fkareadepartamento':fkareadepartamento,
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

      var fkaspirantesetec= $('#fkaspirantesetec'+dato).val();
      var fktipoOcupacion=$('#fktipoOcupacion'+dato).val();
      var setecocupacionAsignada= $('#setecocupacionAsignada'+dato).val();
      var fkestadoOcupacional=$('#fkestadoOcupacional'+dato).val();
      var horasTrabajadasxSemana= $('#horasTrabajadasxSemana'+dato).val();
      var fkareadepartamento= $('#fkareadepartamento'+dato).val();
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaSetecOcupacionAspirante.php',
        data:{
        'id':dato,
        'fkaspirantesetec':fkaspirantesetec,
        'fktipoOcupacion':fktipoOcupacion,
        'setecocupacionAsignada':setecocupacionAsignada,
        'fkestadoOcupacional':fkestadoOcupacional,
        'horasTrabajadasxSemana':horasTrabajadasxSemana,
        'fkareadepartamento':fkareadepartamento,
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
        var fkaspirantesetec= $('#fkaspirantesetec'+dato).val();
        var fktipoOcupacion=$('#fktipoOcupacion'+dato).val();
        var setecocupacionAsignada= $('#setecocupacionAsignada'+dato).val();
        var fkestadoOcupacional=$('#fkestadoOcupacional'+dato).val();
        var horasTrabajadasxSemana= $('#horasTrabajadasxSemana'+dato).val();
        var fkareadepartamento= $('#fkareadepartamento'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaSetecOcupacionAspirante.php',
          data:{
          'id':dato,
          'fkaspirantesetec':fkaspirantesetec,
          'fktipoOcupacion':fktipoOcupacion,
          'setecocupacionAsignada':setecocupacionAsignada,
          'fkestadoOcupacional':fkestadoOcupacional,
          'horasTrabajadasxSemana':horasTrabajadasxSemana,
          'fkareadepartamento':fkareadepartamento,
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