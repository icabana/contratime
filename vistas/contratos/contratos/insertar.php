<?php
  $froms = new Formularios();
?>

<div class="box box-default" style="padding: 25px">

  <form autocomplete="on" id="formContratos" method="post">

    <div class="card card-primary">


      <div class="card-header">
        <h3 class="card-title">Agregar Nuevo Contrato</h3>
      </div>


      <div class="card-body" style="height: 400px">


            <input 
              type="hidden" 
              name="id_contrato" 
              id="id_contrato" 
              value="<?php echo $datos['id_contrato']; ?>"> 

              

            <!--TITULOS DE LOS TAB-->
            <ul class="nav nav-pills ml-auto p-2">

              <li class="nav-item">
                <a class="nav-link active" href="#tab_1" data-toggle="tab">
                  Informaci&oacute;n Principal
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_2" data-toggle="tab">
                  Pagos
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_3" data-toggle="tab">
                  Ajustar Presupuesto
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_4" data-toggle="tab">
                  Prorrogas
                </a>
              </li>      
              
              <li class="nav-item">
                <a class="nav-link" href="#tab_5" data-toggle="tab">
                  Fechas importantes
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_6" data-toggle="tab">
                  Polizas
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_7" data-toggle="tab">
                  CDPS
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_8" data-toggle="tab">
                  RPS
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#tab_9" data-toggle="tab">
                  Documentos
                </a>
              </li>

            </ul>


            <!--INICIO DE LAS TABS-->
            <div class="tab-content">

              
              <div style="padding: 20px;" class="tab-pane active" id="tab_1">
            
                <?php
                  include("vistas/actores/contratos/insertar_tab1.php");
                ?>
              
              </div>

              
              <div style="padding: 20px;" class="tab-pane" id="tab_2">

                <?php
                  include("vistas/actores/contratos/insertar_tab2.php");
                ?>
                
              </div>


              <div style="padding: 20px;" class="tab-pane" id="tab_3">

                <?php
                  include("vistas/actores/contratos/insertar_tab3.php");
                ?>
              
              </div>

              <div style="padding: 20px;" class="tab-pane" id="tab_4">

                <?php
                  include("vistas/actores/contratos/insertar_tab4.php");
                ?>
              
              </div>

              <div style="padding: 20px;" class="tab-pane" id="tab_5">

                <?php
                  include("vistas/actores/contratos/insertar_tab5.php");
                ?>
              
              </div>

              <div style="padding: 20px;" class="tab-pane" id="tab_6">

                <?php
                  include("vistas/actores/contratos/insertar_tab6.php");
                ?>
              
              </div>

              <div style="padding: 20px;" class="tab-pane" id="tab_7">

                <?php
                  include("vistas/actores/contratos/insertar_tab7.php");
                ?>
              
              </div>

              <div style="padding: 20px;" class="tab-pane" id="tab_8">

                <?php
                  include("vistas/actores/contratos/insertar_tab8.php");
                ?>
              
              </div>

              <div style="padding: 20px;" class="tab-pane" id="tab_9">

                <?php
                  include("vistas/actores/contratos/insertar_tab9.php");
                ?>
              
              </div>

            
            </div>
          

        </div>


        
        <div class="card-footer">
          <div class="row">
            <div class="col-md-9">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button onclick="cargar_contratos();" class="btn btn-danger">Cancelar</button>
            </div>     
            <div class="col-md-3">
              <button onclick="insertar_contrato(); return false;" class="btn btn-success">Guardar</button>
            </div>     
          </div>     
        </div>     



    </div>

  </form>
</div>