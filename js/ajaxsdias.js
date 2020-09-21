$(document).ready(function () {
  cargartabla();
});
function cargartabla() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxstabladias.php'

  })
    .done(function (cargar) {
      $('#contenedordias').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });
}
function registro() {
  var nom = $('#dia').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotabladias.php',
    data: {
      'id': null,
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
  var nom = $('#dia' + dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotabladias.php',
    data: {
      'id': dato,
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
  var nom = $('#dia' + dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotabladias.php',
    data: {
      'id': dato,
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