<div class="row">      

    <div class="col-md-4">

      <label>Pa&iacute;s

      <?php
        echo $froms->Lista_Desplegable(
            $paises,
            'nombre_pais',
            'id_pais',
            'pais_contratista',
            '50',
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
            '',
            '',
            'cargar_municipios_contratista()'
          );
      ?>
        
    </div>


    <div class="col-md-4">

      <label>Municipio</label>

      <div id ="div_municipio_contratistas">
        <?php
          echo $froms->Lista_Desplegable(
              $municipios,
              'nombre_municipio',
              'id_municipio',
              'municipio_contratista',
              '',
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
          '',
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
          '',
          '',
          ''
        );
      ?>
    </div>


    <div class="col-md-4">
      <label>Profesi&oacute;n</label>

      <?php
        echo $froms->Lista_Desplegable(
          $profesiones,
          'nombre_profesion',
          'id_profesion',
          'profesion_contratista',
          '',
          '',
          ''
        );
      ?>
    </div>
    
  

</div>