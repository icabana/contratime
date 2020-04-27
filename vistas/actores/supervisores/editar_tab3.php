<div class="row">      

      <div class="col-md-4">

        <label>Pa&iacute;s</label>

        <?php
          echo $froms->Lista_Desplegable(
              $paises,
              'nombre_pais',
              'id_pais',
              'pais_supervisor',
              $datos['pais_supervisor'],
              '',
              ''
            );
        ?>

      </div>


      <div class="col-md-4">

        <label>Departamento</label>

        <?php
          echo $froms->Lista_Desplegable(
              $departamentos,
              'nombre_departamento',
              'id_departamento',
              'departamento_supervisor',
              $datos['departamento_supervisor'],
              '',
              'cargar_municipios_supervisor()'
            );
        ?>
          
      </div>

      <div class="col-md-4">

        <label>Ciudad</label>

        <div id ="div_municipio_supervisores">
        <?php
            echo $froms->Lista_Desplegable(
                $municipios,
                'nombre_municipio',
                'id_municipio',
                'municipio_supervisor',
                $datos['municipio_supervisor'],
                '',
                ''
              );
          ?>
        </div>
          
      </div>

</div>




<br>




<div class="row">  
    
      <div class="col-md-4">
          <label>Genero</label>

          <?php
            echo $froms->Lista_Desplegable(
              $generos,
              'nombre_genero',
              'id_genero',
              'genero_supervisor',
              $datos['genero_supervisor'],
              '',
              ''
            );
          ?>
      </div>


      <div class="col-md-4">
          <label>Estado Civil</label>

          <?php
            echo $froms->Lista_Desplegable(
              $estadoscivil,
              'nombre_estadocivil',
              'id_estadocivil',
              'estadocivil_supervisor',
              $datos['estadocivil_supervisor'],
              '',
              ''
            );
          ?>
      </div>


      <div class="col-md-4">

          <label>No de Hijos</label>

          <input 
            type="text" 
            class="form-control" 
            id="hijos_supervisor" 
            name="hijos_supervisor" 
            value="<?php echo $datos['hijos_supervisor']; ?>">

      </div>

</div>



<br>




<div class="row">  


    <div class="col-md-4">
      <label>Profesi&oacute;n</label>

      <?php
        echo $froms->Lista_Desplegable(
          $profesiones,
          'nombre_profesion',
          'id_profesion',
          'profesion_supervisor',
          $datos['profesion_supervisor'],
          '',
          ''
        );
      ?>
    </div>
    
    <div class="col-md-4">

      <label>Fecha de Nacimiento</label>

      <input 
        type="date" 
        class="form-control" 
        id="fechanacimiento_supervisor" 
        name="fechanacimiento_supervisor" 
        value="<?php echo $datos['fechanacimiento_supervisor']; ?>">

    </div>

    
</div>






