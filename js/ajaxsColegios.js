$(document).ready(function () {
  cargarpais();
  cargartabla();

});

function cargartabla1() {

  var id = $('#cantonColegio').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsColegiosTabla.php',
    data: {
      'id': id,
    }
  })
    .done(function (cargar) {
      $('#contenedorColegios').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });
}
function cargartabla() {
  $('#cantonColegio').on('change', function () {
    var id = $('#cantonColegio').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsColegiosTabla.php',
      data: {
        'id': id,
      }
    })
      .done(function (cargar) {
        $('#contenedorColegios').html(cargar)
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
      $('#paisColegio').html(cargar);
      cargarProvincias();
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });

}

function cargarProvincias() {

  $('#paisColegio').on('change', function () {
    var id = $('#paisColegio').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectprovinciaprint.php',
      data: { 'id': id }
    })
      .done(function (cargar) {
        $('#provinciaColegio').html(cargar);
        cargarCanton();

      })
      .fail(function () {
        alert('Hubo un error al cargar la lista de Provincias')
      })
  })
}
function cargarCanton() {

  $('#provinciaColegio').on('change', function () {
    var id = $('#provinciaColegio').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectcantonprint.php',
      data: {
        'canton': -1,
        'provincia': id
      }
    })
      .done(function (cargar) {
        $('#cantonColegio').html(cargar);
        cargartabla();

      })
      .fail(function () {
        alert('Hubo un error al cargar la lista de Provincias')
      })
  })
}
function registro() {
  var cod = $('#colegioscodigo').val();
  var nom = $('#colegios').val();
  var cantoncodigo = $('#cantonColegio').val();
  var tipoColegio_tipoColegioId=$('#TipoColegio_tipoColegioId').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroColegioTabla.php',
    data: {
      'id': null,
      'codigo': cod,
      'colegios': nom,
      'canton': cantoncodigo,
      'tipoColegioId':tipoColegio_tipoColegioId,
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
  var cod = $('#colegioscodigo' + dato).val();
  var nom = $('#colegios' + dato).val();
  var cantoncodigo = $('#cantonColegio').val();
  var tipoColegio_tipoColegioId=$('#TipoColegio_tipoColegioId'+ dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroColegioTabla.php',
    data: {
      'id': dato,
      'codigo': cod,
      'colegios': nom,
      'canton': cantoncodigo,
      'tipoColegioId':tipoColegio_tipoColegioId,
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
  var cod = $('#colegioscodigo' + dato).val();
  var nom = $('#colegios' + dato).val();
  var cantoncodigo = $('#cantonColegio').val();
  var tipoColegio_tipoColegioId=$('#TipoColegio_tipoColegioId'+ dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registroColegioTabla.php',
    data: {
      'id': dato,
      'codigo': cod,
      'colegios': nom,
      'canton': cantoncodigo,
      'tipoColegioId':tipoColegio_tipoColegioId,
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
