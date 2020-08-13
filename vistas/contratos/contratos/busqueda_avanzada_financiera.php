<script type="text/javascript" src="js/vistas/contratos/contratos/busqueda_avanzada.js"></script>

<script>

    $( document ).ready(function() {
      $('#modalidad_busqueda').prepend("<option value='0' selected >Todos</option>");
      $('#tipocontrato_busqueda').prepend("<option value='0' selected >Todos</option>");
      $('#estado_busqueda').prepend("<option value='0' selected >Todos</option>");
    });

</script>

<?php
  $froms = new Formularios();
?>

<div class="box box-default" style="padding: 25px">

  <form id="formBusquedaAvanzada" method="post">

    <div class="card card-primary">


      <div class="card-header">
        <h3 class="card-title">Busqueda Avanzada</h3>
      </div>


      <div class="card-body"  >
         
      <div class="row">  
  
        <div class="col-md-4">

            <label>Modalidad<span style="color:red">*</span></label>

            <?php
            
              echo $froms->Lista_Desplegable(
                  $modalidades,
                  'nombre_modalidad',
                  'id_modalidad',
                  'modalidad_busqueda'
                );
            ?>

        </div>


        <div class="col-md-4">
          
            <label>Tipo de Contrato<span style="color:red">*</span></label>

            <?php
              echo $froms->Lista_Desplegable(
                  $tiposcontrato,
                  'nombre_tipocontrato',
                  'id_tipocontrato',
                  'tipocontrato_busqueda'
              );
            ?>

        </div>

        
        <div class="col-md-4">
          
            <label>Estado<span style="color:red">*</span></label>

            <?php
              echo $froms->Lista_Desplegable(
                  $estados,
                  'nombre_estado',
                  'id_estado',
                  'estado_busqueda'
              );
            ?>

        </div>

    </div>




<br>



<div class="card-header">
    <div class="box">
      <h2><center>Buscar la fecha de Inicio del Contrato usando un Rango de Fechas</center></h2>
<div class="row">

  <div class="col-md-3"></div>

  <div class="col-md-3">

    <label>Fecha Inicio<span style="color:red">*</span></label>

    <input 
      type="date" 
      class="form-control " 
      id="fechainicio_busqueda" 
      name="fechainicio_busqueda">

  </div>


  <div class="col-md-3">

    <label>Fecha Final<span style="color:red">*</span></label>
 
    <input 
      type="date" 
      class="form-control " 
      id="fechafinal_busqueda" 
      name="fechafinal_busqueda">

  </div>


</div>
</div>
</div>


<br><br>

   
<div class="card-header">
    <div class="box">
      <h2><center>Buscar el valor del Contrato usando un Rango de Valores</center></h2>
  
      <div class="row">

        <div class="col-sm-12">
          <input id="range_1" type="text" name="range_1" value="">
        </div>
      
      </div>        
    </div>
</div>







<br>


        <div class="card-footer">
          <div class="row">
            <div class="col-md-5">
         
            </div>     
            <div class="col-md-4">
              <button onclick="realizar_busqueda_avanzada_financiera(); return false;" class="btn btn-success">Realizar Busqueda</button>
            </div>     
          </div>     
        </div>     

    </div>







  </div>

  </form>
</div>


<script>
  $(function () {
  

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 100000,
      max     : 100000000,
      from    : 100000,
      to      : 50000000,
      type    : 'double',
      step    : 1000000,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    });
  
  });
</script>