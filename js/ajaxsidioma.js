$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablaIdiomas.php'

    })
    .done(function(cargar){
      $('#contenedorrecibepenciondiferenciada').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }

  function registro(){

    var codigo=$('#codigo').val()
    var nom=$('#idioma').val()
    var etnia=$('#idiomaetnia').val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaidioma.php',
      data:{'id':null,
      'nom':nom,
      'cod':codigo,
      'etnia':etnia,
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

    var codigo=$('#codigo'+dato).val()
    var nom=$('#idioma'+dato).val()
    var etnia=$('#idiomaetnia'+dato).val()
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaidioma.php',
      data:{'id':dato,
      'nom':nom,
      'cod':codigo,
      'etnia':etnia,
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
      var codigo=$('#codigo'+dato).val()
      var nom=$('#idioma'+dato).val()
      var etnia=$('#idiomaetnia'+dato).val()
      $.ajax({
        type: 'POST',
        url: '../controladores/registrotablaidioma.php',
        data:{'id':dato,
        'nom':nom,
        'cod':codigo,
        'etnia':etnia,
        'actualizar':1,
        'eliminar':0,
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