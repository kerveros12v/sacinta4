$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablatipobeca.php'

    })
    .done(function(cargar){
      $('#contenedortipoBeca').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var codigo=$('#tipobecacodigo').val()
    var nom=$('#tipoBeca').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipobeca.php',
      data:{'id':null,
      'nom':nom,
      'cod':codigo,
      'actualizar':1,
      'eliminar':0,
      'opt':1}
    })
    .done(function(cargar){
      alert(cargar)
   cargartabla()
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    })
  }
  function actualizar(dato){

    var codigo=$('#tipobecacodigo'+dato).val()
    var nom=$('#tipoBeca'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipobeca.php',
      data:{'id':dato,
      'nom':nom,
      'cod':codigo,
      'actualizar':1,
      'eliminar':0,
      'opt':2}
      })
      .done(function(cargar){
        alert(cargar)
     cargartabla()
      })
      .fail(function(){
        alert('Hubo un error al Actualizar de Perfiles')
      })
    }
    function eliminar(dato){
      var codigo=$('#tipobecacodigo'+dato).val()
      var nom=$('#tipoBeca'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaTipobeca.php',
        data:{'id':dato,
        'nom':nom,
        'cod':codigo,
        'actualizar':2,
        'eliminar':1,
        'opt':0}
      })
      .done(function(cargar){
     alert(cargar)
     cargartabla()
      })
      .fail(function(){
        alert('\tNo puede ser "Eliminado" \nRevise que no este enlasado a otro registro')
      })
    }