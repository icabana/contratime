<script type="text/javascript" src="js/vistas/actores/evaluadores/default.js"></script>

<?php
  $froms = new Formularios();
?>

<div class="box box-default" style="padding: 25px">

  <form autocomplete="on" id="formEvaluadores" method="post">

    <div class="card card-primary">


      <div class="card-header">
        <h3 class="card-title">Editar Evaluador</h3>
      </div>


      <div class="card-body"  style="height: 400px">


            <input 
              type="hidden" 
              name="id_evaluador" 
              id="id_evaluador" 
              value="<?php echo $datos['id_evaluador']; ?>"> 

              

            <!--TITULOS DE LOS TAB-->
            <ul class="nav nav-pills ml-auto p-2">

              <li class="nav-item">
                <a class="nav-link active" href="#tab_1" data-toggle="tab">
                  Informaci&oacute;n Principal
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_2" data-toggle="tab">
                  Datos de Contacto
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_3" data-toggle="tab">
                  Informaci&oacute;n Secundaria
                </a>
              </li>

            </ul>


            <!--INICIO DE LAS TABS-->
            <div class="tab-content">

              
              <div style="padding: 20px;" class="tab-pane active" id="tab_1">
            
                <?php
                  include("vistas/actores/evaluadores/editar_tab1.php");
                ?>
              
              </div>

              
              <div style="padding: 20px;" class="tab-pane" id="tab_2">

                <?php
                  include("vistas/actores/evaluadores/editar_tab2.php");
                ?>
                
              </div>


              <div style="padding: 20px;" class="tab-pane" id="tab_3">

                <?php
                  include("vistas/actores/evaluadores/editar_tab3.php");
                ?>
              
              </div>

            
            </div>
          
         

        </div>

        <div class="card-footer">
          <div class="row">
            <div class="col-md-9">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="cargar_evaluadores();" class="btn btn-danger">Cancelar</button>
            </div>     
            <div class="col-md-3">
              <button onclick="editar_info_actor_evaluador(); return false;" class="btn btn-success">Guardar</button>
            </div>     
          </div>     
        </div>     

    </div>

  </form>
</div>