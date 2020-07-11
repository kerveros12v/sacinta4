$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablaparalelos.php'

    })
    .done(function(cargar){
      $('#contenedorparalelos').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    var cod= $('#paralelocodigo').val();
    var nom=$('#paralelo').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaParalelo.php',
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

        var cod= $('#paralelocodigo'+dato).val();
        var nom=$('#paralelo'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaParalelo.php',
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

        var cod= $('#paralelocodigo'+dato).val();
        var nom=$('#paralelo'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaParalelo.php',
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