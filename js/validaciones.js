// JavaScript Document
$(document).ready(function(){
	cargarcarreras();
	cargarfechas();
});
function validarcedula() {

        var cad = document.getElementById("cedula").value.trim();
        var total = 0;
        var longitud = cad.length;
        var longcheck = longitud - 1;

        if (cad !== "" && longitud === 10){
			  for(i = 0; i < longcheck; i++){
				  if (i%2 === 0) {
					var aux = cad.charAt(i) * 2;
					if (aux > 9) aux -= 9;
					total += aux;
				  } else {
					total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
				  }
			  }

          	  total = total % 10 ? 10 - total % 10 : 0;

			  if (cad.charAt(longitud-1) == total) {
				$("#cedula").css({"background":"#8F8"}); //valido

			  }else{
				 $("#cedula").css({"background":"#F22" });//imvalido

			  }
        }

}
function cargarcarreras() {
	$.ajax({
	  type: 'GET',
	  url: '../ajax/ajaxsselectcarrerasprint.php'

	})
	  .done(function (cargar) {
		$('#carrera').html(cargar)
	  })
	  .fail(function () {
		alert('Hubo un error al cargar')
	  });
  }
  function cargarfechas() {
	$.ajax({
	  type: 'GET',
	  url: '../ajax/ajaxsselectmatriculasporfecha.php'

	})
	  .done(function (cargar) {
		$('#fechamatricula').html(cargar)
	  })
	  .fail(function () {
		alert('Hubo un error al cargar')
	  });
  }
