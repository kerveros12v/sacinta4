$(document).ready(function(){
    cargarinstitutos();
});
function cargarinstitutos(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsselectinstitutoprint.php'

    })
    .done(function(cargar){
      $('#selectinstituion').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });

  }

function cargartabla(){
  var id = $('#selectinstituion').val()
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxstablacarreras.php',
    data:{'id':id}
  })
  .done(function(cargar){
    $('#contenedorcarreras').html(cargar)
  })
  .fail(function(){
    alert('Hubo un error al cargar la lista de Carreras')
  })
}
  function registro(){
    var cod= $('#codigoCarreras').val();
    var nom=$('#carrera').val();
    var carreraTituloAOptener=$('#carreraTituloAOptener').val();
    var fktipoCarrerasId=$('#fktipoCarrerasId').val();
    var fkmodalidadCarreraId=$('#fkmodalidadCarreraId').val();
    var estado=$('#estado').val();
    var instituto=$('#selectinstituion').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablacarreras.php',
      data:{
      'id':null,
      'cod':cod,
      'nom':nom,
      'carreraTituloAOptener':carreraTituloAOptener,
      'fktipoCarrerasId':fktipoCarrerasId,
      'fkmodalidadCarreraId':fkmodalidadCarreraId,
      'instituto':instituto,
      'estado':estado,
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
      });
      cargarcarreras();
    }
    function actualizar(dato){
      var cod= $('#codigoCarreras'+dato).val();
    var nom=$('#carrera'+dato).val();
    var carreraTituloAOptener=$('#carreraTituloAOptener'+dato).val();
    var fktipoCarrerasId=$('#fktipoCarrerasId'+dato).val();
    var fkmodalidadCarreraId=$('#fkmodalidadCarreraId'+dato).val();
    var estado=$('#estado'+dato).val();
    var instituto=$('#selectinstituion').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablacarreras.php',
      data:{
      'id':dato,
      'cod':cod,
      'nom':nom,
      'carreraTituloAOptener':carreraTituloAOptener,
      'fktipoCarrerasId':fktipoCarrerasId,
      'fkmodalidadCarreraId':fkmodalidadCarreraId,
      'instituto':instituto,
      'estado':estado,
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
        var cod= $('#codigoCarreras'+dato).val();
        var nom=$('#carrera'+dato).val();
        var carreraTituloAOptener=$('#carreraTituloAOptener'+dato).val();
        var fktipoCarrerasId=$('#fktipoCarrerasId'+dato).val();
        var fkmodalidadCarreraId=$('#fkmodalidadCarreraId'+dato).val();
        var estado=$('#estado'+dato).val();
        var instituto=$('#selectinstituion').val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablacarreras.php',
          data:{
          'id':dato,
          'cod':cod,
          'nom':nom,
          'carreraTituloAOptener':carreraTituloAOptener,
          'fktipoCarrerasId':fktipoCarrerasId,
          'fkmodalidadCarreraId':fkmodalidadCarreraId,
          'instituto':instituto,
          'estado':estado,
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
