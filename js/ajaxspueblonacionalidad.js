$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablapueblonacionalidad.php'

    })
    .done(function(cargar){
      $('#contenedorpueblonacionalidad').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    var cod= $('#pueblonacionalidadescodigo').val();
    var nom=$('#pueblonacionalidad').val();
    var pnetnia=$('#pnetnia').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablapueblonacionalidad.php',
      data:{
      'id':null,
      'cod':cod,
      'nom':nom,
      'pnetnia':pnetnia,
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

        var cod= $('#pueblonacionalidadescodigo'+dato).val();
        var nom=$('#pueblonacionalidad'+dato).val();
        var pnetnia=$('#pnetnia'+dato).val();

        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablapueblonacionalidad.php',
          data:{
          'id':dato,
          'cod':cod,
          'nom':nom,
          'pnetnia':pnetnia,
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
          alert('Hubo un error al cargar')
        })
      }
      function eliminar(dato){

        var cod= $('#pueblonacionalidadescodigo'+dato).val();
        var nom=$('#pueblonacionalidad'+dato).val();
        var pnetnia=$('#pnetnia'+dato).val();

        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablapueblonacionalidad.php',
          data:{
          'id':dato,
          'cod':cod,
          'nom':nom,
          'pnetnia':pnetnia,
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
          alert('Hubo un error al cargar')
        })
      }