$(document).ready(function(){

    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablalistaCertificaciones.php'

    })
    .done(function(cargar){
      $('#contenedorCertificaciones').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }
  function registro(){
      var fkidsetecperfil= $('#fkidsetecperfil').val()
      var fechaprueba=$('#fechaprueba').val()
      var horaprueba=$('#horaprueba').val()
      var costoCertidicacion=$('#costoCertidicacion').val()
      var setecLugardondeExaminado=$('#setecLugardondeExaminado').val()
      var setecnombreEmpresaLugar=$('#setecnombreEmpresaLugar').val()
      var setecdireccionEmpresa=$('#setecdireccionEmpresa').val()
      var setecTelefonoEmpresa=$('#setecTelefonoEmpresa').val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaSetecCertificacion.php',
        data:{
          'id':null,
          'fkidsetecperfil':fkidsetecperfil,
          'fechaprueba':fechaprueba,
          'horaprueba':horaprueba,
          'costoCertidicacion':costoCertidicacion,
          'setecLugardondeExaminado':setecLugardondeExaminado,
          'setecnombreEmpresaLugar':setecnombreEmpresaLugar,
          'setecdireccionEmpresa':setecdireccionEmpresa,
          'setecTelefonoEmpresa':setecTelefonoEmpresa,
          'eliminar': 0,
          'actualizar': 0,
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
        alert('Hubo un error al REGISTRAR de Perfiles')
      })
    }
    function actualizar(dato){
      var fkidsetecperfil= $('#fkidsetecperfil'+dato).val()
      var fechaprueba=$('#fechaprueba'+dato).val()
      var horaprueba=$('#horaprueba'+dato).val()
      var costoCertidicacion=$('#costoCertidicacion'+dato).val()
      var setecLugardondeExaminado=$('#setecLugardondeExaminado'+dato).val()
      var setecnombreEmpresaLugar=$('#setecnombreEmpresaLugar'+dato).val()
      var setecdireccionEmpresa=$('#setecdireccionEmpresa'+dato).val()
      var setecTelefonoEmpresa=$('#setecTelefonoEmpresa'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaSetecCertificacion.php',
        data:{
          'id':dato,
          'fkidsetecperfil':fkidsetecperfil,
          'fechaprueba':fechaprueba,
          'horaprueba':horaprueba,
          'costoCertidicacion':costoCertidicacion,
          'setecLugardondeExaminado':setecLugardondeExaminado,
          'setecnombreEmpresaLugar':setecnombreEmpresaLugar,
          'setecdireccionEmpresa':setecdireccionEmpresa,
          'setecTelefonoEmpresa':setecTelefonoEmpresa,
            'eliminar': 0,
            'actualizar': 1,
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
        var fkidsetecperfil= $('#fkidsetecperfil'+dato).val()
        var fechaprueba=$('#fechaprueba'+dato).val()
        var horaprueba=$('#horaprueba'+dato).val()
        var costoCertidicacion=$('#costoCertidicacion'+dato).val()
        var setecLugardondeExaminado=$('#setecLugardondeExaminado'+dato).val()
        var setecnombreEmpresaLugar=$('#setecnombreEmpresaLugar'+dato).val()
        var setecdireccionEmpresa=$('#setecdireccionEmpresa'+dato).val()
        var setecTelefonoEmpresa=$('#setecTelefonoEmpresa'+dato).val()
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaSetecCertificacion.php',
          data:{
            'id':dato,
            'fkidsetecperfil':fkidsetecperfil,
            'fechaprueba':fechaprueba,
            'horaprueba':horaprueba,
            'costoCertidicacion':costoCertidicacion,
            'setecLugardondeExaminado':setecLugardondeExaminado,
            'setecnombreEmpresaLugar':setecnombreEmpresaLugar,
            'setecdireccionEmpresa':setecdireccionEmpresa,
            'setecTelefonoEmpresa':setecTelefonoEmpresa,
            'eliminar': 1,
            'actualizar': 2,
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

