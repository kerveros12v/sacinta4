$(document).ready(function () {
});
function cargarCantonest1() {

  var id = $('#fkprovinciasetec').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectcantonprint.php',
    data: {
      'canton': -1,
      'provincia': id
    }
  })
    .done(function (cargar) {
      $('#fkcantonsetec').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
}

function parroquiaRecidencia() {

  var id = $('#fkcantonsetec').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectparroquiasprint.php',
    data: {
      'id': id
    }
  })
    .done(function (cargar) {
      $('#parroquiasetec').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
}