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
    var codigoPeriodo=$('#codigoPeriodo').val();
    var periodoAcademico=$('#periodoAcademico').val();
    var ciclo=$('#ciclo').val();
    var fechaInicio=$('#fechaInicio').val();
    var fechafin=$('#fechafin').val();
    var observaciones=$('#observaciones').val();
    var actual=0;
    if($('#actual').is(':checked')==true){
      actual=1;
    }
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaPeriodoAcademico.php',
      data:{
        'periodoacademicoId':null,
        'codigoPeriodo':codigoPeriodo,
        'periodoAcademico':periodoAcademico,
        'ciclo':ciclo,
        'fechaInicio':fechaInicio,
        'fechafin':fechafin,
        'observaciones':observaciones,
        'actual':actual,
        'eliminar':0,
        'actualizar':0,
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
    var codigoPeriodo=$('#codigoPeriodo'+dato).val();
    var periodoAcademico=$('#periodoAcademico'+dato).val();
    var ciclo=$('#ciclo'+dato).val();
    var fechaInicio=$('#fechaInicio'+dato).val();
    var fechafin=$('#fechafin'+dato).val();
    var observaciones=$('#observaciones'+dato).val();
    var actual=1;

    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaPeriodoAcademico.php',
      data:{
        'periodoacademicoId':dato,
        'codigoPeriodo':codigoPeriodo,
        'periodoAcademico':periodoAcademico,
        'ciclo':ciclo,
        'fechaInicio':fechaInicio,
        'fechafin':fechafin,
        'observaciones':observaciones,
        'actual':actual,
        'eliminar':0,
          'actualizar':1,
        'opt':2}
      })
      .done(function(cargar){
        cargarlistaperiodost()
     alert(cargar)
      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      })

    }
    function eliminar(dato){
      var codigoPeriodo=$('#codigoPeriodo'+dato).val();
    var periodoAcademico=$('#periodoAcademico'+dato).val();
    var ciclo=$('#ciclo'+dato).val();
    var fechaInicio=$('#fechaInicio'+dato).val();
    var fechafin=$('#fechafin'+dato).val();
    var observaciones=$('#observaciones'+dato).val();
    var actual=0;
    if($('#actual'+dato).is(':checked')==true){
      actual=1;
    }
    $.ajax({
      type: 'POST',
      url: '../controladores/registrotablaPeriodoAcademico.php',
      data:{
        'periodoacademicoId':dato,
        'codigoPeriodo':codigoPeriodo,
        'periodoAcademico':periodoAcademico,
        'ciclo':ciclo,
        'fechaInicio':fechaInicio,
        'fechafin':fechafin,
        'observaciones':observaciones,
        'actual':actual,
        'eliminar':1,
        'actualizar':2,
        'opt':0}
      })
      .done(function(cargar){
        cargarlistaperiodost()
     alert(cargar)
      })
      .fail(function(){
        alert('Hubo un error al cargar de Perfiles')
      })
    }