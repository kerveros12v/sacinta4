$(document).ready(function(){

    cargartabla();
});
function cargartabla(){
    $.ajax({
      type: 'GET',
      url: '../ajax/ajaxsSetecEncuestador.php'

    })
    .done(function(cargar){
      $('#contenedorencuestador').html(cargar)
    })
    .fail(function(){
      alert('Hubo un error al cargar de Perfiles')
    });
  }
  function registro(){
      var idsetecEncuestadornumIdentificacion= $('#idsetecEncuestadornumIdentificacion').val()
      var nombre=$('#nombre').val()
      var etnias_etniaId=$('#etnias_etniaId').val()
      var setecencuestadorperfil=$('#setecencuestadorperfil').val()

      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecEncuestador.php',
        data:{
          'idsetecEncuestadornumIdentificacion':idsetecEncuestadornumIdentificacion,
          'nombre':nombre,
          'etnias_etniaId':etnias_etniaId,
          'setecencuestadorperfil':setecencuestadorperfil,
          'eliminar': 0,
          'actualizar': 0,
          'opt':1}
      })
      .done(function(cargar){
        $('#dialog-confirm').html(cargar)
        $("#dialog").dialog({
          height: 250,
          buttons: {
            Aceptar: function () {
              cargartabla()
              $(this).dialog("close");

            }
          }
        })
      })
      .fail(function(){
        alert('Hubo un error al REGISTRAR de Perfiles')
      })
    }
    function actualizar(dato){
        var idsetecEncuestadornumIdentificacion= $('#idsetecEncuestadornumIdentificacion'+dato).val()
      var nombre=$('#nombre'+dato).val()
      var etnias_etniaId=$('#etnias_etniaId'+dato).val()
      var setecencuestadorperfil=$('#setecencuestadorperfil'+dato).val()
        $.ajax({
          type: 'POST',
          url: '../controladores/registroSetecEncuestador.php',
          data:{
            'idsetecEncuestadornumIdentificacion':idsetecEncuestadornumIdentificacion,
            'nombre':nombre,
            'etnias_etniaId':etnias_etniaId,
            'setecencuestadorperfil':setecencuestadorperfil,
            'eliminar': 0,
            'actualizar': 1,
            'opt':2}
        })
        .done(function(cargar){
          $('#dialog-confirm').html(cargar)
          $("#dialog").dialog({
            height: 250,
            buttons: {
              Aceptar: function () {
                cargartabla()
                $(this).dialog("close");

              }
            }
          })
        })
        .fail(function(){
          alert('Hubo un error al cargar de Perfiles')
        })
      }
      function eliminar(dato){
        var idsetecEncuestadornumIdentificacion= $('#idsetecEncuestadornumIdentificacion'+dato).val()
        var nombre=$('#nombre'+dato).val()
        var etnias_etniaId=$('#etnias_etniaId'+dato).val()
        var setecencuestadorperfil=$('#setecencuestadorperfil'+dato).val()
        $.ajax({
          type: 'POST',
          url: '../controladores/registroSetecEncuestador.php',
          data:{
            'idsetecEncuestadornumIdentificacion':idsetecEncuestadornumIdentificacion,
            'nombre':nombre,
            'etnias_etniaId':etnias_etniaId,
            'setecencuestadorperfil':setecencuestadorperfil,
            'eliminar': 1,
            'actualizar': 2,
            'opt':0}
        })
        .done(function(cargar){
          $('#dialog-confirm').html(cargar)
          $("#dialog").dialog({
            height: 250,
            buttons: {
              Aceptar: function () {
                cargartabla()
                $(this).dialog("close");

              }
            }
          })
        })
        .fail(function(){
          alert('Hubo un error al cargar de Perfiles')
        })
      }

