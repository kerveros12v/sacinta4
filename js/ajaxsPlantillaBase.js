$(document).ready(function(){
    cargarmenu();

});
function cargarmenu(){
    var id=$('#codCedula').val();
    var c=$('#cedula').val();
    $.ajax({
      type: 'POST',
      url: '../ec.edu.intsuperior/vista/ajax/ajaxspermisos.php',
      data:{'a':id,'c':c}
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
