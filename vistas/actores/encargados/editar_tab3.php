<div class="row">      

      <div class="col-md-4">

        <label>Pa&iacute;s</label>

        <?php
          echo $froms->Lista_Desplegable(
              $paises,
              'nombre_pais',
              'id_pais',
              'pais_encargado',
              $datos['pais_encargado'],
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
              'departamento_encargado',
              $datos['departamento_encargado'],
              '',
              'cargar_municipios_encargado()'
            );
        ?>
          
      </div>

      <div class="col-md-4">

        <label>Ciudad</label>

        <div id ="div_municipio_encargados">
        <?php
            echo $froms->Lista_Desplegable(
                $municipios,
                'nombre_municipio',
                'id_municipio',
                'municipio_encargado',
                $datos['municipio_encargado'],
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
              'genero_encargado',
              $datos['genero_encargado'],
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
              'estadocivil_encargado',
              $datos['estadocivil_encargado'],
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
            id="hijos_encargado" 
            name="hijos_encargado" 
            value="<?php echo $datos['hijos_encargado']; ?>">

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
          'profesion_encargado',
          $datos['profesion_encargado'],
          '',
          ''
        );
      ?>
    </div>
    
 
    
</div>






