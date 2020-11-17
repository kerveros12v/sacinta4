$(document).ready(function(){
    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxstablaestudiantesbecaslistado.php'

    })
    .done(function(cargar){
      $('#contenedorbecastabla').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar')
    });
  }
  function registro(){
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsestudiantebecasurlprint.php'
    })
      .done(function(cargar){
        window.open(cargar,"_self");

      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      })
    }

    function actualizar(dato){
      console.log("Cedula reconocida en script: "+dato);
        $.ajax({
          type: 'POST',
          url: '../ajax/ajaxsestudiantebecasurlprint.php',
          data: {
            'id': dato
          }
        })
        .done(function(cargar){
          window.open(cargar,"_self")
        })
        .fail(function(){
          alert('Hubo un error al cargar')
        })
      }
