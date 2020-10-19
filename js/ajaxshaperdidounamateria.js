$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablahaperdidounamateria.php'

    })
    .done(function(cargar){
      $('#contenedorperdidomateria').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    var cod= $('#harepetidoalmenosunamateriacodigo').val();
    var nom=$('#haRepetidoAlMenosUnaMateria').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaharepetidomateria.php',
      data:{
      'id':null,
      'cod':cod,
      'nom':nom,
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

        var cod= $('#harepetidoalmenosunamateriacodigo'+dato).val();
        var nom=$('#haRepetidoAlMenosUnaMateria'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaharepetidomateria.php',
          data:{
          'id':dato,
          'cod':cod,
          'nom':nom,
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

        var cod= $('#harepetidoalmenosunamateriacodigo'+dato).val();
        var nom=$('#haRepetidoAlMenosUnaMateria'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaharepetidomateria.php',
          data:{
            'id':dato,
            'cod':cod,
            'nom':nom,
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