$(document).ready(function () {
  cargarpais();
  cargarProvincias();
  cargartabla();

});

function cargartabla1() {

  var id = $('#cantonparroquia').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsparroquiasTabla.php',
    data: {
      'id': id,
    }
  })
    .done(function (cargar) {
      $('#contenedorparroquia').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });
}
function cargartabla() {
  $('#cantonparroquia').on('change', function () {
    var id = $('#cantonparroquia').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsparroquiasTabla.php',
      data: {
        'id': id,
      }
    })
      .done(function (cargar) {
        $('#contenedorparroquia').html(cargar)
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
      $('#paisparroquia').html(cargar);
      cargarProvincias();
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });

}

function cargarProvincias() {

  $('#paisparroquia').on('change', function () {
    var id = $('#paisparroquia').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectprovinciaprint.php',
      data: { 'id': id }
    })
      .done(function (cargar) {
        $('#provinciaparroquia').html(cargar);
        cargarCanton();

      })
      .fail(function () {
        alert('Hubo un error al cargar la lista de Provincias')
      })
  })
}
function cargarCanton() {

  $('#provinciaparroquia').on('change', function () {
    var id = $('#provinciaparroquia').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectcantonprint.php',
      data: {
        'canton': -1,
        'provincia': id
      }
    })
      .done(function (cargar) {
        $('#cantonparroquia').html(cargar);
        cargartabla();

      })
      .fail(function () {
        alert('Hubo un error al cargar la lista de Provincias')
      })
  })
}
function registro() {
  var cod = $('#codigoparroquia').val();
  var nom = $('#parroquia').val();
  var cantoncodigo = $('#cantonparroquia').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroParroquias.php',
    data: {
      'id': null,
      'codigo': cod,
      'parroquia': nom,
      'canton': cantoncodigo,
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
  var cod = $('#codigoparroquia' + dato).val();
  var nom = $('#parroquia' + dato).val();
  var cantoncodigo = $('#cantonparroquia').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroParroquias.php',
    data: {
      'id': dato,
      'codigo': cod,
      'parroquia': nom,
      'canton': cantoncodigo,
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
            cargartabla1()
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
  var cod = $('#codigoparroquia' + dato).val();
  var nom = $('#parroquia' + dato).val();
  var cantoncodigo = $('#cantonparroquia').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroParroquias.php',
    data: {
      'id': dato,
      'codigo': cod,
      'parroquia': nom,
      'canton': cantoncodigo,
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
            cargartabla1()
            $(this).dialog("close");

          }
        }
      })
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    })
}
