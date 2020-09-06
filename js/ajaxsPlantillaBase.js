$(document).ready(function(){
    cargarmenu();

});
function cargarmenu(){

    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxspermisos.php'
    })
    .done(function(cargar){
      $('#nav').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar el Menu')
    })
  }
  function salir(){
    $.ajax({
      type: 'POST',
      url: '../controladores/salirsistema.php'
    })
    .done(function(cargar){
      window.location.replace('../Templates/login.php');
    })
    .fail(function(){
      alert('Hubo un error al cargar el Menu')
    })
  }
