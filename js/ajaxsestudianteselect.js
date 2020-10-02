$(document).ready(function () {
});
function cargarProvincias() {
  var id = $('#paisNacionalidad').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectprovinciaprint.php',
    data: { 'id': id }
  })
    .done(function (cargar) {
      $('#provinciaNacionalidad').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
  cargarCategoriaMigratoria();
}
function cargarCantonest1() {

  var id = $('#provinciaNacionalidad').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectcantonprint.php',
    data: {
      'canton': -1,
      'provincia': id
    }
  })
    .done(function (cargar) {
      $('#cantonNacionalidad').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
}

function cargarCategoriaMigratoria() {
  var id = $('#paisNacionalidad').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectcategoriamigratoriaprint.php',
    data: {
      'id': id,
      'cate': 0
    }
  })
    .done(function (cargar) {
      $('#categoraMigratoria').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })

}
function selectpueblo() {
  var id = $('#pueblonacionalidad').val();
  console.log("Pueblo seleccionado: " + id);
}
function cargarPueblo() {

  var id = $('#etnia').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectpuebloprint.php',
    data: {
      'id': id
    }
  })
    .done(function (cargar) {
      $('#pueblonacionalidad').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Pueblos Nacionales')
    })
  cargaridioma();
}
function cargaridioma() {

  var id = $('#etnia').val();
  console.log("La etnia seleccionada es: " + id);
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectidiomaansestralprint.php',
    data: {
      'id': id
    }
  })
    .done(function (cargar) {
      $('#lstidioma').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Pueblos Nacionales')
    })
}
function cargarProvinciasest2() {
  var id = $('#paisRecidencia').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectprovinciaprint.php',
    data: { 'id': id }
  })
    .done(function (cargar) {
      $('#provinciaRecidencia').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
  cargarCantonest2();
}
function cargarCantonest2() {

  var id = $('#provinciaRecidencia').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectcantonprint.php',
    data: {
      'canton': -1,
      'provincia': id
    }
  })
    .done(function (cargar) {
      $('#cantonRecidencia').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
  parroquiaRecidencia();
}
function parroquiaRecidencia() {

  var id = $('#cantonRecidencia').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectparroquiasprint.php',
    data: {
      'id': id
    }
  })
    .done(function (cargar) {
      $('#parroquiaRecidencia1').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
}
function cargarCantonest3() {

  var id = $('#provColegio').val();
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
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
}
function cargarColegio() {

  var id = $('#cantonColegio').val();
  $.ajax({
    type: 'POST',
    url: '../ajax/ajaxsselectcolegiosprint.php',
    data: {
      'canton': id
    }
  })
    .done(function (cargar) {
      $('#colegio').html(cargar);
    })
    .fail(function () {
      alert('Hubo un error al cargar la lista de Provincias')
    })
}
