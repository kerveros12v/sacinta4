$(document).ready(function () {
  cargartabla();
});
function cargartabla() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxstablaFinanciamientobeca.php'

  })
    .done(function (cargar) {
      $('#contenedorfinanciamiento').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });
}
function registro() {
  var cod = $('#financiamientobecacodigo').val();
  var nom = $('#financiamientoBeca').val();
  var financiamientobecabool = $('#financiamientobecabool').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaFinanciamientobeca.php',
    data: {
      'id': null,
      'cod': cod,
      'nom': nom,
      'financiamientobecabool':financiamientobecabool,
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

  var cod = $('#financiamientobecacodigo' + dato).val();
  var nom = $('#financiamientoBeca' + dato).val();
  var financiamientobecabool = $('#financiamientobecabool'+ dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaFinanciamientobeca.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'financiamientobecabool':financiamientobecabool,
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

  var cod = $('#financiamientobecacodigo' + dato).val();
  var nom = $('#financiamientoBeca' + dato).val();
  var financiamientobecabool = $('#financiamientobecabool'+ dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablaFinanciamientobeca.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'financiamientobecabool':financiamientobecabool,
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