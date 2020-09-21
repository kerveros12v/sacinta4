$(document).ready(function () {
  cargarpais();
  cargartabla();

});
function cargartabla() {
    var id = $('#provinciainstituto').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxstablaInstitucion.php',
    data: {
      'id': id
    }
  })
    .done(function (cargar) {
      $('#contenedorinstituto').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });
}
function registro() {
  var cod = $('#institutoscodigo').val();
  var nom = $('#institutoNombre').val();
  var canton = $('#cantonId').val();
  var sostenimiento = $('#fkidSostenimiento').val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablainstituto.php',
    data: {
      'id': null,
      'cod': cod,
      'nom': nom,
      'canton': canton,
      'sostenimiento': sostenimiento,
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

  var cod = $('#institutoscodigo' + dato).val();
  var nom = $('#institutoNombre' + dato).val();
  var canton = $('#cantonId'+ dato).val();
  var sostenimiento = $('#fkidSostenimiento'+ dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablainstituto.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'canton': canton,
      'sostenimiento': sostenimiento,
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

  var cod = $('#institutoscodigo' + dato).val();
  var nom = $('#institutoNombre' + dato).val();
  var canton = $('#cantonId'+ dato).val();
  var sostenimiento = $('#fkidSostenimiento'+ dato).val();
  $.ajax({
    type: 'POST',
    url: '../controladores/registrotablainstituto.php',
    data: {
      'id': dato,
      'cod': cod,
      'nom': nom,
      'canton': canton,
      'sostenimiento': sostenimiento,
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
function cargarProvincias() {
  var id = $('#paisinstituto').val()
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectprovinciaprint.php',
    data: { 'id': id }
  })
    .done(function (cargar) {
      $('#provinciainstituto').html(cargar)
      cargartabla()
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })

}
function cargarpais() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsselectpaisprint.php'

  })
    .done(function (cargar) {
      $('#paisinstituto').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });

}