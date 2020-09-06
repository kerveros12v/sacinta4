$(document).ready(function () {
  cargarpais();
  cargarProvincias();
  cargartabla();

});

function cargartabla1() {

  var id = $('#provinciacanton').val();
  var p = $('#paiscanton').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxscantontabla.php',
    data: {
      'id': id,
      'p': p
    }
  })
    .done(function (cargar) {
      $('#contenedorcantones').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });



}
function cargartabla() {
  $('#provinciacanton').on('change', function () {
    var id = $('#provinciacanton').val();
    var p = $('#paiscanton').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxscantontabla.php',
      data: {
        'id': id,
        'p': p
      }
    })
      .done(function (cargar) {
        $('#contenedorcantones').html(cargar)
      })
      .fail(function () {
        alert('Hubo un error al cargar')
      });

  })

}

function cargarpais() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsselectpaisprint.php'

  })
    .done(function (cargar) {
      $('#paiscanton').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });

}

function cargarProvincias() {

  $('#paiscanton').on('change', function () {
    var id = $('#paiscanton').val()
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectprovinciaprint.php',
      data: { 'id': id }
    })
      .done(function (cargar) {
        $('#provinciacanton').html(cargar)

        cargartabla1();
      })
      .fail(function () {
        alert('Hubo un error al cargar la lista de Provincias')
      })
  })
}
function registro() {
  var cod = $('#cantoncodigo').val();
  var nom = $('#canton').val();
  var provincia = $('#provinciacanton').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroCantones.php',
    data: {
      'id': null,
      'cod': cod,
      'nom': nom,
      'provincia': provincia,
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
            cargartabla1()
            $(this).dialog("close");

          }
        }
      })
    })
    .fail(function () {
      alert('Hubo un error al cargar de Perfiles')
    });
  cargarProvincias();
}
function actualizar(dato) {
  var cod = $('#cantoncodigo' + dato).val();
  var nom = $('#canton' + dato).val();
  var provincia = $('#provinciacanton1' + dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroCantones.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'provincia': provincia,
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
            cargarProvincias()
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
  var cod = $('#cantoncodigo' + dato).val();
  var nom = $('#canton' + dato).val();
  var provincia = $('#provinciacanton' + dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroCantones.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'provincia': provincia,
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
            cargarProvincias()
            cargartabla1()
            $(this).dialog("close");

          }
        }
      })
      cargarProvincias()
      cargartabla1()
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    })
}
