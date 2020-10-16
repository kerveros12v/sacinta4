$(document).ready(function(){

    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsSetec.php'

    })
    .done(function(cargar){
      $('#contenedorsetec').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }


   function registro(){
      var SetecCondiciondeVidaCedula=$('#SetecCondiciondeVidaCedula').val()
      var SetecCondiciondeVidaFecha=$('#SetecCondiciondeVidaFecha').val()
      var Setecjefehogar=$('#Setecjefehogar').val()
      var Setecseguromedico=$('#Setecseguromedico').val()
      var Setecnumhijos=$('#Setecnumhijos').val()
      var SetecAsistenciaInstitucion=$('#SetecAsistenciaInstitucion').val()
      var Setecvivienda=$('#Setecvivienda').val()
      var SetecMienbrosHogar=$('#SetecMienbrosHogar').val()
      var SetecLuz=$('#SetecLuz').val()
      var SetecAgua=$('#SetecAgua').val()
      var SetecInternet=$('#SetecInternet').val()

      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecCondicionVida.php',
        data:{
          'id':null,
          'SetecCondiciondeVidaCedula':SetecCondiciondeVidaCedula,
        'SetecCondiciondeVidaFecha':SetecCondiciondeVidaFecha,
        'Setecjefehogar':Setecjefehogar,
        'Setecseguromedico':Setecseguromedico,
        'Setecnumhijos':Setecnumhijos,
        'SetecAsistenciaInstitucion':SetecAsistenciaInstitucion,
        'Setecvivienda':Setecvivienda,
        'SetecMienbrosHogar':SetecMienbrosHogar,
        'SetecLuz':SetecLuz,
        'SetecAgua':SetecAgua,
        'SetecInternet':SetecInternet,
        'idSetecCondiciondeVida':"",
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

      var SetecCondiciondeVidaCedula=$('#SetecCondiciondeVidaCedula'+dato).val()
      var SetecCondiciondeVidaFecha=$('#SetecCondiciondeVidaFecha'+dato).val()
      var Setecjefehogar=$('#Setecjefehogar'+dato).val()
      var Setecseguromedico=$('#Setecseguromedico'+dato).val()
      var Setecnumhijos=$('#Setecnumhijos'+dato).val()
      var SetecAsistenciaInstitucion=$('#SetecAsistenciaInstitucion'+dato).val()
      var Setecvivienda=$('#Setecvivienda'+dato).val()
      var SetecMienbrosHogar=$('#SetecMienbrosHogar'+dato).val()
      var SetecLuz=$('#SetecLuz'+dato).val()
      var SetecAgua=$('#SetecAgua'+dato).val()
      var SetecInternet=$('#SetecInternet'+dato).val()

      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecCondicionVida.php',
        data:{
          'id':dato,
          'SetecCondiciondeVidaCedula':SetecCondiciondeVidaCedula,
        'SetecCondiciondeVidaFecha':SetecCondiciondeVidaFecha,
        'Setecjefehogar':Setecjefehogar,
        'Setecseguromedico':Setecseguromedico,
        'Setecnumhijos':Setecnumhijos,
        'SetecAsistenciaInstitucion':SetecAsistenciaInstitucion,
        'Setecvivienda':Setecvivienda,
        'SetecMienbrosHogar':SetecMienbrosHogar,
        'SetecLuz':SetecLuz,
        'SetecAgua':SetecAgua,
        'SetecInternet':SetecInternet,
        'idSetecCondiciondeVida':dato,
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
        var SetecCondiciondeVidaCedula=$('#SetecCondiciondeVidaCedula'+dato).val()
        var SetecCondiciondeVidaFecha=$('#SetecCondiciondeVidaFecha'+dato).val()
        var Setecjefehogar=$('#Setecjefehogar'+dato).val()
        var Setecseguromedico=$('#Setecseguromedico'+dato).val()
        var Setecnumhijos=$('#Setecnumhijos'+dato).val()
        var SetecAsistenciaInstitucion=$('#SetecAsistenciaInstitucion'+dato).val()
        var Setecvivienda=$('#Setecvivienda'+dato).val()
        var SetecMienbrosHogar=$('#SetecMienbrosHogar'+dato).val()
        var SetecLuz=$('#SetecLuz'+dato).val()
        var SetecAgua=$('#SetecAgua'+dato).val()
        var SetecInternet=$('#SetecInternet'+dato).val()

        $.ajax({
          type: 'POST',
          url: '../controladores/registroSetecCondicionVida.php',
          data:{
            'id':dato,
            'SetecCondiciondeVidaCedula':SetecCondiciondeVidaCedula,
          'SetecCondiciondeVidaFecha':SetecCondiciondeVidaFecha,
          'Setecjefehogar':Setecjefehogar,
          'Setecseguromedico':Setecseguromedico,
          'Setecnumhijos':Setecnumhijos,
          'SetecAsistenciaInstitucion':SetecAsistenciaInstitucion,
          'Setecvivienda':Setecvivienda,
          'SetecMienbrosHogar':SetecMienbrosHogar,
          'SetecLuz':SetecLuz,
          'SetecAgua':SetecAgua,
          'SetecInternet':SetecInternet,
          'idSetecCondiciondeVida':dato,
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

