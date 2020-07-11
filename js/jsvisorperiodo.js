$(document).ready(function(){
  cargarlistaperiodost();
  cargarajaxs_select2();
});
  function cargarlistaperiodost(){
    $.ajax({
        type: 'POST',
        url: '../ajax/ajaxsperiodost.php'
      })
      .done(function(peri1){
        $('#contenedorperiodos').html(peri1)
      })
      .fail(function(){
        console.log('Hubo un error al carga la lista de periodos')
      });
  }
  function cargarajaxs_select2(){
    $.ajax({
        type: 'POST',
        url: '../ajax/ajaxsselect2print.php'
      })
      .done(function(peri1){
        $('#ajaxs_select2').html(peri1)
      })
      .fail(function(){
        console.log('Hubo un error al carga del script select2')
      });
  }
  function registro(){
    var periodoacademicoId= null;
    var codigoPeriodo=$('#codigoPeriodo').val();
    var periodoAcademico=$('#periodoAcademico').val();
    var ciclo=$('#ciclo').val();
    var fechaInicio=$('#fechaInicio').val();
    var duracionPeriodoAcademico=$('#duracionPeriodoAcademico').val();
    var anioPeriodoAcademico=$('#anioPeriodoAcademico').val();
    var actual=$('#actual').val();
    var eliminar=$('#eliminar').val();
    $.ajax({
      type: 'POST',
      url: '../controladores/registroPeriodoAcademico.php',
      data:{
        'periodoacademicoId':periodoacademicoId,
        'codigoPeriodo':codigoPeriodo,
        'periodoAcademico':periodoAcademico,
        'ciclo':ciclo,
        'fechaInicio':fechaInicio,
        'duracionPeriodoAcademico':duracionPeriodoAcademico,
        'anioPeriodoAcademico':anioPeriodoAcademico,
        'actual':actual,
        'eliminar':eliminar,
        'opt':1
      }
    })
    .done(function(cargar){

      cargarlistaperiodost()
   alert(cargar)
    })
    .fail(function(){
      alert('No Todos los campos estan llenos')
    });
  }
  function actualizar(dato){
      var id= $('#idsetec'+dato).val();
      var nom=$('#nomperfil'+dato).val();
      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecPerfil.php',
        data:{'id':id,'nom':nom,'opt':2}
      })
      .done(function(cargar){
     cargartabla()
     alert(cargar)
      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      })
    }
    function eliminar(dato){
      var id= $('#idsetec'+dato).val();
      var nom=$('#nomperfil'+dato).val();
      $.ajax({
        type: 'POST',
        url: '../controladores/registroSetecPerfil.php',
        data:{'id':id,'nom':nom,'opt':0}
      })
      .done(function(cargar){
     cargartabla()
     alert(cargar)
      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      })
    }