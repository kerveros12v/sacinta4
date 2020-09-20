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
var id=$('#numeroIdentificacion').val();
console.log("Cedula reconocida en script: "+id);
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsestudianteurlprint.php',
      data:{'id':id}
      })
      .done(function(cargar){
        window.open(cargar,"_self")

      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      })
    }
    function actualizar(dato){

        var nom=dato;
        $.ajax({
          type: 'POST',
          url: '../ajax/ajaxsestudiantematriculaprint.php',
          data:{'id':nom}
        })
        .done(function(cargar){
          window.open(cargar,"_self")
       cargartabla()
        })
        .fail(function(){
          alert('Hubo un error al cargar')
        })
      }
