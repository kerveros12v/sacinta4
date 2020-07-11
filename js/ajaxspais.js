$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxspaisTabla.php'

    })
    .done(function(cargar){
      $('#contenedorpais').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    //console.log("../controladores/registroTablapais.php");
    var cod= $('#paiscodigo').val();
    var nom=$('#pais').val();
    console.log("<Script> nom:"+nom);
    console.log("<Script> cod:"+cod);
    $.ajax({
      type: 'POST',
      url: '../controladores/registroTablapais.php',
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

        var cod= $('#paiscodigo'+dato).val();
        var nom=$('#pais'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registroTablapais.php',
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

        var cod= $('#paiscodigo'+dato).val();
        var nom=$('#pais'+dato).val();
        $.ajax({
          type: 'POST',
          url: '../controladores/registroTablapais.php',
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