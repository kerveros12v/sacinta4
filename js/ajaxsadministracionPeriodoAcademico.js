$(document).ready(function(){
    cargarmenu();

});
function cargarmenu(){
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsmenusecundarioPeriodoAcademico.php'
    })
    .done(function(cargar){
      $('#nav1').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar el Menu')
    })
  }

