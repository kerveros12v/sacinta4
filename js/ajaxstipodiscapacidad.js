$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablatipodiscapacidad.php'

    })
    .done(function(cargar){
      $('#contenedortipoDiscapacidad').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    var cod= $('#tdcodigo').val();
    var nom=$('#tipoDiscapacidad').val();
    var tipodiscapacidadbool=$('#tipodiscapacidadbool').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipodiscapacidaad.php',
      data:{
      'id':null,
      'cod':cod,
      'nom':nom,
      'tipodiscapacidadbool':tipodiscapacidadbool,
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

        var cod= $('#tdcodigo'+dato).val();
        var nom=$('#tipoDiscapacidad'+dato).val();
        var tipodiscapacidadbool=$('#tipodiscapacidadbool'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaTipodiscapacidaad.php',
          data:{
          'id':dato,
          'cod':cod,
          'nom':nom,
          'tipodiscapacidadbool':tipodiscapacidadbool,
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

        var cod= $('#tdcodigo'+dato).val();
        var nom=$('#tipoDiscapacidad'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaTipodiscapacidaad.php',
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