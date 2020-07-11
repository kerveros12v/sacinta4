$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablatipomatricula.php'

    })
    .done(function(cargar){
      $('#contenedortipomatricula').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    var cod= $('#tipomatriculacodigo').val();
    var nom=$('#tipoMatricula').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipoMatricula.php',
      data:{
      'id':null,
      'cod':cod,
      'nom':nom,
      'eliminar':0,
      'actualizar':0,
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

        var cod= $('#tipomatriculacodigo'+dato).val();
        var nom=$('#tipoMatricula'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaTipoMatricula.php',
          data:{
          'id':dato,
          'cod':cod,
          'nom':nom,
          'eliminar':0,
          'actualizar':1,
          'opt':2}
        })
        .done(function(cargar){
          alert(cargar)
       cargartabla()
        })
        .fail(function(){
          alert('Hubo un error al cargar')
        })
      }
      function eliminar(dato){

        var cod= $('#tipomatriculacodigo'+dato).val();
        var nom=$('#tipoMatricula'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaTipoMatricula.php',
          data:{
            'id':dato,
            'cod':cod,
            'nom':nom,
            'eliminar':1,
            'actualizar':2,
            'opt':0}
        })
        .done(function(cargar){
          alert(cargar)

       cargartabla()
        })
        .fail(function(){
          alert('Hubo un error al cargar')
        })
      }