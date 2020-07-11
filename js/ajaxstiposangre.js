$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablatiposangre.php'

    })
    .done(function(cargar){
      $('#contenedortiposangre').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    var cod= $('#tipossangrescodigo').val();
    var nom=$('#tipoSangre').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaTipoSangre.php',
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

        var cod= $('#tipossangrescodigo'+dato).val();
        var nom=$('#tipoSangre'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaTipoSangre.php',
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

        var cod= $('#tipossangrescodigo'+dato).val();
        var nom=$('#tipoSangre'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registrotablaTipoSangre.php',
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