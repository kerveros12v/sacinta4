$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxstablaestudiantes.php'

    })
    .done(function(cargar){
      $('#contenedorlstestudiantes').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){

    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsestudianteurlprint.php'
      })
      .done(function(cargar){
        window.open(cargar,"_self")

      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      })
    }
    function buscar(dato){

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
