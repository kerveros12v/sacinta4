$(document).ready(function(){
    cargarmenu();

});
function cargarmenu(){
    var id=$('#codCedula').val();
    var c=$('#cedula').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsmenusecundariovinculacion.php',
      data:{'a':id,'c':c}
    })
    .done(function(cargar){
      $('#nav1').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar el Menu')
    })
  }

