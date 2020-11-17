$(document).ready(function () {
  cargarinstitutos();


});
function cargartabla() {

  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxstablacursos.php'
  })
    .done(function (cargar) {
      $('#contenedorcursos').html(cargar)
    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });



}

function cargarinstitutos() {
  $.ajax({
    type: 'GET',
    url: '../ajax/ajaxsselectinstitutoprint.php'

  })
    .done(function (cargar) {
      $('#instituto').html(cargar);
      cargarcarreras();

    })
    .fail(function () {
      alert('Hubo un error al cargar')
    });

}

function cargarcarreras() {

  $('#instituto').on('change', function () {
    var id = $('#instituto').val();
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectcarrerasprint.php',
      data: { 'instituto': id }
    })
      .done(function (cargar) {
        $('#fkcarrerasId').html(cargar);
        cargarJornadaAcademica();
      cargarPeriodoAcademica();
      cargarNivelAcademica();
      cargartabla();
      })
      .fail(function () {
        alert('Hubo un error al cargar la lista de Carreras')
      })
  })
}
function cargarJornadaAcademica() {
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectjornadaacademicaprint.php'

  })
    .done(function (cargar) {
      $('#fkjJornadaAcademicaId').html(cargar);

    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de JornadaAcademica')
    })

}
function cargarPeriodoAcademica() {
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectperidoacademicoprint.php'

  })
    .done(function (cargar) {
      $('#fkperiodo').html(cargar);

    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Periodo Academica')
    })

}
function cargarNivelAcademica() {
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectnivelacademicoprint.php'

  })
    .done(function (cargar) {
      $('#fknivelAcademicoQueCursaId').html(cargar);

    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Nivel Academico')
    })

}
function registro() {
  var cod = $('#cursoscodigo').val();
  var fkparaleloId = $('#fkparaleloId').val();
  var fkcarrerasId = $('#fkcarrerasId').val();
  var fkjJornadaAcademicaId = $('#fkjJornadaAcademicaId').val();
  var fkperiodo = $('#fkperiodo').val();
  var fknivelAcademicoQueCursaId = $('#fknivelAcademicoQueCursaId').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registroCursos.php',
    data: {
      'id': null,
      'cod': cod,
      'fkparaleloId': fkparaleloId,
      'fkcarrerasId': fkcarrerasId,
      'fkjJornadaAcademicaId': fkjJornadaAcademicaId,
      'fkperiodo':fkperiodo,
      'fknivelAcademicoQueCursaId':fknivelAcademicoQueCursaId,
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
    });

}
function actualizar(dato) {
  var cod = $('#cursoscodigo'+dato).val();
  var fkparaleloId = $('#fkparaleloId'+dato).val();
  var fkcarrerasId = $('#fkcarrerasId').val();
  var fkjJornadaAcademicaId = $('#fkjJornadaAcademicaId').val();
  var fkperiodo = $('#fkperiodo').val();
  var fknivelAcademicoQueCursaId = $('#fknivelAcademicoQueCursaId').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registroCursos.php',
    data: {
      'id': dato,
      'cod': cod,
      'fkparaleloId': fkparaleloId,
      'fkcarrerasId': fkcarrerasId,
      'fkjJornadaAcademicaId': fkjJornadaAcademicaId,
      'fkperiodo':fkperiodo,
      'fknivelAcademicoQueCursaId':fknivelAcademicoQueCursaId,
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
  var cod = $('#cursoscodigo'+dato).val();
  var fkparaleloId = $('#fkparaleloId'+dato).val();
  var fkcarrerasId = $('#fkcarrerasId').val();
  var fkjJornadaAcademicaId = $('#fkjJornadaAcademicaId').val();
  var fkperiodo = $('#fkperiodo').val();
  var fknivelAcademicoQueCursaId = $('#fknivelAcademicoQueCursaId').val();

  $.ajax({
    type: 'POST',
    url: '../controladores/registroCursos.php',
    data: {
      'id': dato,
      'cod': cod,
      'fkparaleloId': fkparaleloId,
      'fkcarrerasId': fkcarrerasId,
      'fkjJornadaAcademicaId': fkjJornadaAcademicaId,
      'fkperiodo':fkperiodo,
      'fknivelAcademicoQueCursaId':fknivelAcademicoQueCursaId,
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
