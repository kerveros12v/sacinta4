$(document).ready(function () {
  cargartabla();
});
function cargartabla() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxstablabecasprimerarazon.php'

  })
    .done(function (cargar) {
      $('#contenedorprimerarazon').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });
}
function registro() {
  var cod = $('#primerarazonbecacodigo').val();
  var nom = $('#primeraRazonBeca').val();
  var bool = $('#primerarazonbecabool').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaPrimeraRazonBeca.php',
    data: {
      'id': null,
      'cod': cod,
      'nom': nom,
      'bool':bool,
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

  var cod = $('#primerarazonbecacodigo' + dato).val();
  var nom = $('#primeraRazonBeca' + dato).val();
  var bool = $('#primerarazonbecabool'+ dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaPrimeraRazonBeca.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'bool':bool,
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
      $('#dialogo').html(cargar)
    })
}
function eliminar(dato) {

  var cod = $('#primerarazonbecacodigo' + dato).val();
  var nom = $('#primeraRazonBeca' + dato).val();
  var bool = $('#primerarazonbecabool'+ dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaPrimeraRazonBeca.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'bool':bool,
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