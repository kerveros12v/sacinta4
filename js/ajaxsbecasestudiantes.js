$(document).ready(function(){
    lstbecas();
    cargartabla();
});
function lstbecas(){
    $.ajax({
      type: 'POST',
      url: '../ajax/ajaxsselectbecasestudiantesprint.php'
      })
      .done(function(cargar){
        $('#lstbecasestudiantes').html(cargar)

      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      })
    }
    function cargartabla() {
        var id=$('#lstbecasestudiantes').val();
        $.ajax({
          type: 'POST',
          url: '../ajax/ajaxsformulariodatosdelestudiantebecas.php',
          data: {
            'id': id
          }
        })
          .done(function (cargar) {
            $('#contenedorbecas').html(cargar)
          })
          .fail(function () {
            alert('Hubo un error al cargar')
          });
      }

function registrarbeca(id) {
    var fknumeroIdentificacion = $('#fknumeroIdentificacion').val();
    var aplicacionbecascodigo = $('#aplicacionbecascodigo').val();
    var fktipoBecaId = $('#fktipoBecaId').val();
    var fkfinanciamientoBecaid = $('#fkfinanciamientoBecaid').val();
    var abperiodo = $('#abperiodo').val();
    var abfechainicio = $('#abfechainicio').val();
    var abfechafin = $('#abfechafin').val();
    var fkprimeraRazonBecaId = $('#fkprimeraRazonBecaId').val();
    var fksegundaRazonBecaId = $('#fksegundaRazonBecaId').val();
    var fkterceraRazonBecaId = $('#fkterceraRazonBecaId').val();
    var fkcuartaRazonBecaId = $('#fkcuartaRazonBecaId').val();
    var fkquintaRazonBecaId = $('#fkquintaRazonBecaId').val();
    var fksextaRazonBecaId = $('#fksextaRazonBecaId').val();
    var montoBeca = $('#montoBeca').val();
    var porcientoBecaCoberturaManuntencion = $('#porcientoBecaCoberturaManuntencion').val();
    var porcientoBecaCoberturaArancel = $('#porcientoBecaCoberturaArancel').val();
    var abobservaciones = $('#abobservaciones').val();
    var abactivo = $('#abactivo').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registroAplicacionBecas.php',
      data: {
        'id': id,
        'fknumeroIdentificacion': fknumeroIdentificacion,
        'aplicacionbecascodigo': aplicacionbecascodigo,
        'fktipoBecaId': fktipoBecaId,
        'fkfinanciamientoBecaid': fkfinanciamientoBecaid,
        'abperiodo': abperiodo,
        'abfechainicio': abfechainicio,
        'abfechafin': abfechafin,
        'fkprimeraRazonBecaId': fkprimeraRazonBecaId,
        'fksegundaRazonBecaId': fksegundaRazonBecaId,
        'fkterceraRazonBecaId': fkterceraRazonBecaId,
        'fkcuartaRazonBecaId': fkcuartaRazonBecaId,
        'fkquintaRazonBecaId': fkquintaRazonBecaId,
        'fksextaRazonBecaId': fksextaRazonBecaId,
        'montoBeca': montoBeca,
        'porcientoBecaCoberturaManuntencion': porcientoBecaCoberturaManuntencion,
        'porcientoBecaCoberturaArancel': porcientoBecaCoberturaArancel,
        'abobservaciones': abobservaciones,
        'abactivo': abactivo,
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
              lstbecas()
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
  function eliminarbeca(id) {

    var fknumeroIdentificacion = $('#fknumeroIdentificacion').val();
    var aplicacionbecascodigo = $('#aplicacionbecascodigo').val();
    var fktipoBecaId = $('#fktipoBecaId').val();
    var fkfinanciamientoBecaid = $('#fkfinanciamientoBecaid').val();
    var abperiodo = $('#abperiodo').val();
    var abfechainicio = $('#abfechainicio').val();
    var abfechafin = $('#abfechafin').val();
    var fkprimeraRazonBecaId = $('#fkprimeraRazonBecaId').val();
    var fksegundaRazonBecaId = $('#fksegundaRazonBecaId').val();
    var fkterceraRazonBecaId = $('#fkterceraRazonBecaId').val();
    var fkcuartaRazonBecaId = $('#fkcuartaRazonBecaId').val();
    var fkquintaRazonBecaId = $('#fkquintaRazonBecaId').val();
    var fksextaRazonBecaId = $('#fksextaRazonBecaId').val();
    var montoBeca = $('#montoBeca').val();
    var porcientoBecaCoberturaManuntencion = $('#porcientoBecaCoberturaManuntencion').val();
    var porcientoBecaCoberturaArancel = $('#porcientoBecaCoberturaArancel').val();
    var abobservaciones = $('#abobservaciones').val();
    var abactivo = $('#abactivo').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registroAplicacionBecas.php',
      data: {
        'id': id,
        'fknumeroIdentificacion': fknumeroIdentificacion,
        'aplicacionbecascodigo': aplicacionbecascodigo,
        'fktipoBecaId': fktipoBecaId,
        'fkfinanciamientoBecaid': fkfinanciamientoBecaid,
        'abperiodo': abperiodo,
        'abfechainicio': abfechainicio,
        'abfechafin': abfechafin,
        'fkprimeraRazonBecaId': fkprimeraRazonBecaId,
        'fksegundaRazonBecaId': fksegundaRazonBecaId,
        'fkterceraRazonBecaId': fkterceraRazonBecaId,
        'fkcuartaRazonBecaId': fkcuartaRazonBecaId,
        'fkquintaRazonBecaId': fkquintaRazonBecaId,
        'fksextaRazonBecaId': fksextaRazonBecaId,
        'montoBeca': montoBeca,
        'porcientoBecaCoberturaManuntencion': porcientoBecaCoberturaManuntencion,
        'porcientoBecaCoberturaArancel': porcientoBecaCoberturaArancel,
        'abobservaciones': abobservaciones,
        'abactivo': abactivo,
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
                lstbecas()
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