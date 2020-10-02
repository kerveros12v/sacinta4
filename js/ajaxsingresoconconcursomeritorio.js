$(document).ready(function () {
  cargartabla();
});
function cargartabla() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxstablaingresoconcursomeritorio.php'

  })
    .done(function (cargar) {
      $('#contenedorconcursomeritos').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });
}
function registro() {
  var cod = $('#ingresoconconcursomeritoscodigo').val();
  var nom = $('#ingresoConConcursoMeritos').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registroTablaIngresoconcursomeritorio.php',
    data: {
      'id': null,
      'cod': cod,
      'nom': nom,
      'eliminar': 0,
      'actualizar': 0,
      'opt': 1
    }
  })
    .done(function (cargar) {
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
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    })
}
function actualizar(dato) {

  var cod = $('#ingresoconconcursomeritoscodigo' + dato).val();
  var nom = $('#ingresoConConcursoMeritos' + dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroTablaIngresoconcursomeritorio.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'eliminar': 0,
      'actualizar': 1,
      'opt': 2
    }
  })
    .done(function (cargar) {
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
    .fail(function () {
      alert('Hubo un error al cargar')
    })
}
function eliminar(dato) {

  var cod = $('#ingresoconconcursomeritoscodigo' + dato).val();
  var nom = $('#ingresoConConcursoMeritos' + dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroTablaIngresoconcursomeritorio.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'eliminar': 1,
      'actualizar': 2,
      'opt': 0
    }
  })
    .done(function (cargar) {
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
    .fail(function () {
      alert('Hubo un error al cargar')
    })
}