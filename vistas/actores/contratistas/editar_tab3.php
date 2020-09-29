<div class="row">      

      <div class="col-md-4">

        <label>Pa&iacute;s</label>

        <?php
          echo $froms->Lista_Desplegable(
              $paises,
              'nombre_pais',
              'id_pais',
              'pais_contratista',
              $datos['pais_contratista'],
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
              'departamento_contratista',
              $datos['departamento_contratista'],
              '',
              'cargar_municipios_contratista()'
            );
        ?>
          
      </div>

      <div class="col-md-4">

        <label>Ciudad</label>

        <div id ="div_municipio_contratistas">
        <?php
            echo $froms->Lista_Desplegable(
                $municipios,
                'nombre_municipio',
                'id_municipio',
                'municipio_contratista',
                $datos['municipio_contratista'],
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
              'genero_contratista',
              $datos['genero_contratista'],
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
              'estadocivil_contratista',
              $datos['estadocivil_contratista'],
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
            id="hijos_contratista" 
            name="hijos_contratista" 
            value="<?php echo $datos['hijos_contratista']; ?>">

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
          'profesion_contratista',
          $datos['profesion_contratista'],
          '',
          ''
        );
      ?>
    </div>
    
   
    
</div>