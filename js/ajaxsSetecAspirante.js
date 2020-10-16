$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsformulariodatosSetecAspirante.php'

    })
    .done(function(cargar){
      $('#setecaspirante').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }
  function registro(){
      var numeroidentificacionsetec= $('#numeroidentificacionsetec').val()
      var primerApellidosetec=$('#primerApellidosetec').val()
      var segundoApellidosetec= $('#segundoApellidosetec').val()
      var primerNombresetec=$('#primerNombresetec').val()
      var segundoNombresetec= $('#segundoNombresetec').val()
      var fechanacimiento=$('#fechanacimiento').val()
      var fkgenerosetec= $('#fkgenerosetec').val()
      var fkformacionArtesano=$('#fkformacionArtesano').val()
      var instruccionRegistroCivil= $('#instruccionRegistroCivil').val()
      var parroquiasetec=$('#parroquiasetec').val()
      var direccionsetec= $('#direccionsetec').val()
      var correoelectronicoSetec=$('#correoelectronicoSetec').val()
      var telefonosetec= $('#telefonosetec').val()
      var celularsetec=$('#celularsetec').val()
      var fktipodiscapacidad= $('#fktipodiscapacidad').val()
      var fksocioempleo=$('#fksocioempleo').val()
      var setecaspiinstriccionseleccionada= $('#setecaspiinstriccionseleccionada').val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecAspirante.php',
        data:{
          'numeroidentificacionsetec':numeroidentificacionsetec,
          'primerApellidosetec':primerApellidosetec,
          'segundoApellidosetec':segundoApellidosetec,
          'primerNombresetec':primerNombresetec,
          'segundoNombresetec':segundoNombresetec,
          'fechanacimiento':fechanacimiento,
          'fkgenerosetec':fkgenerosetec,
          'fkformacionArtesano':fkformacionArtesano,
          'instruccionRegistroCivil':instruccionRegistroCivil,
          'parroquiasetec':parroquiasetec,
          'direccionsetec':direccionsetec,
          'correoelectronicoSetec':correoelectronicoSetec,
          'telefonosetec':telefonosetec,
          'celularsetec':celularsetec,
          'fktipodiscapacidad':fktipodiscapacidad,
          'fksocioempleo':fksocioempleo,
          'setecaspiinstriccionseleccionada':setecaspiinstriccionseleccionada,
          'eliminar': 0,
          'actualizar': 0,
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
      var numeroidentificacionsetec= $('#numeroidentificacionsetec'+dato).val()
      var primerApellidosetec=$('#primerApellidosetec'+dato).val()
      var segundoApellidosetec= $('#segundoApellidosetec'+dato).val()
      var primerNombresetec=$('#primerNombresetec'+dato).val()
      var segundoNombresetec= $('#segundoNombresetec'+dato).val()
      var fechanacimiento=$('#fechanacimiento'+dato).val()
      var fkgenerosetec= $('#fkgenerosetec'+dato).val()
      var fkformacionArtesano=$('#fkformacionArtesano'+dato).val()
      var instruccionRegistroCivil= $('#instruccionRegistroCivil'+dato).val()
      var parroquiasetec=$('#parroquiasetec'+dato).val()
      var direccionsetec= $('#direccionsetec'+dato).val()
      var correoelectronicoSetec=$('#correoelectronicoSetec'+dato).val()
      var telefonosetec= $('#telefonosetec'+dato).val()
      var celularsetec=$('#celularsetec'+dato).val()
      var fktipodiscapacidad= $('#fktipodiscapacidad'+dato).val()
      var fksocioempleo=$('#fksocioempleo'+dato).val()
      var setecaspiinstriccionseleccionada= $('#setecaspiinstriccionseleccionada'+dato).val()

      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecAspirante.php',
        data:{
          'numeroidentificacionsetec':numeroidentificacionsetec,
          'primerApellidosetec':primerApellidosetec,
          'segundoApellidosetec':segundoApellidosetec,
          'primerNombresetec':primerNombresetec,
          'segundoNombresetec':segundoNombresetec,
          'fechanacimiento':fechanacimiento,
          'fkgenerosetec':fkgenerosetec,
          'fkformacionArtesano':fkformacionArtesano,
          'instruccionRegistroCivil':instruccionRegistroCivil,
          'parroquiasetec':parroquiasetec,
          'direccionsetec':direccionsetec,
          'correoelectronicoSetec':correoelectronicoSetec,
          'telefonosetec':telefonosetec,
          'celularsetec':celularsetec,
          'fktipodiscapacidad':fktipodiscapacidad,
          'fksocioempleo':fksocioempleo,
          'setecaspiinstriccionseleccionada':setecaspiinstriccionseleccionada,
          'eliminar': 0,
          'actualizar': 0,
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
        var numeroidentificacionsetec= $('#numeroidentificacionsetec'+dato).val()
        var primerApellidosetec=$('#primerApellidosetec'+dato).val()
        var segundoApellidosetec= $('#segundoApellidosetec'+dato).val()
        var primerNombresetec=$('#primerNombresetec'+dato).val()
        var segundoNombresetec= $('#segundoNombresetec'+dato).val()
        var fechanacimiento=$('#fechanacimiento'+dato).val()
        var fkgenerosetec= $('#fkgenerosetec'+dato).val()
        var fkformacionArtesano=$('#fkformacionArtesano'+dato).val()
        var instruccionRegistroCivil= $('#instruccionRegistroCivil'+dato).val()
        var parroquiasetec=$('#parroquiasetec'+dato).val()
        var direccionsetec= $('#direccionsetec'+dato).val()
        var correoelectronicoSetec=$('#correoelectronicoSetec'+dato).val()
        var telefonosetec= $('#telefonosetec'+dato).val()
        var celularsetec=$('#celularsetec'+dato).val()
        var fktipodiscapacidad= $('#fktipodiscapacidad'+dato).val()
        var fksocioempleo=$('#fksocioempleo'+dato).val()
        var setecaspiinstriccionseleccionada= $('#setecaspiinstriccionseleccionada'+dato).val()

        $.ajax({
          type: 'POST',
          url: '../controladores/registroSetecAspirante.php',
          data:{
            'numeroidentificacionsetec':numeroidentificacionsetec,
            'primerApellidosetec':primerApellidosetec,
            'segundoApellidosetec':segundoApellidosetec,
            'primerNombresetec':primerNombresetec,
            'segundoNombresetec':segundoNombresetec,
            'fechanacimiento':fechanacimiento,
            'fkgenerosetec':fkgenerosetec,
            'fkformacionArtesano':fkformacionArtesano,
            'instruccionRegistroCivil':instruccionRegistroCivil,
            'parroquiasetec':parroquiasetec,
            'direccionsetec':direccionsetec,
            'correoelectronicoSetec':correoelectronicoSetec,
            'telefonosetec':telefonosetec,
            'celularsetec':celularsetec,
            'fktipodiscapacidad':fktipodiscapacidad,
            'fksocioempleo':fksocioempleo,
            'setecaspiinstriccionseleccionada':setecaspiinstriccionseleccionada,
            'eliminar': 0,
            'actualizar': 0,
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