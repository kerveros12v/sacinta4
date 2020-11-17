$(document).ready(function () {
  cargartabla();
});
function cargartabla() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxstablabecasquintarazon.php'

  })
    .done(function (cargar) {
      $('#contenedorquinta').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });
}
function registro() {
  var cod = $('#quintarazonbecacoldigo').val();
  var nom = $('#quintaRazonBeca').val();
  var bool = $('#quintarazonbecabool').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaQuintaRazonBeca.php',
    data: {
      'id': null,
      'cod': cod,
      'nom': nom,
      'bool': bool,
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

  var cod = $('#quintarazonbecacoldigo' + dato).val();
  var nom = $('#quintaRazonBeca' + dato).val();
  var bool = $('#quintarazonbecabool'+dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaQuintaRazonBeca.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'bool': bool,
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

  var cod = $('#quintarazonbecacoldigo' + dato).val();
  var nom = $('#quintaRazonBeca' + dato).val();
  var bool = $('#quintarazonbecabool'+dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaQuintaRazonBeca.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'bool': bool,
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