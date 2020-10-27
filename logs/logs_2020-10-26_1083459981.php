
SQL .............>  (2020-10-26 19:20:12) (Usuario: 1083459981)   
        UPDATE contratistas  
               
        SET 
        
        tipo_contratista = '2',
        tipodocumento_contratista = '1', 
        documento_contratista = '12345673', 
        nombre_contratista = 'PEDRO DCCSC',

        dirresidencia_contratista = '', 
        dircorrespondencia_contratista = '', 
        telefono_contratista = '', 
        celular_contratista = '33', 
        correo_contratista = 'prueba@gmail.com', 
        paginaweb_contratista = '',

        pais_contratista = '50', 
        departamento_contratista = '91', 
        municipio_contratista = '503', 


        genero_contratista = '2', 
        estadocivil_contratista = '2', 
        
        profesion_contratista = '1'

        WHERE id_contratista = '1'

SQL .............>  (2020-10-26 19:20:30) (Usuario: 1083459981) 
        INSERT INTO contratistas (

            tipo_contratista,
            tipodocumento_contratista,
            documento_contratista,
            nombre_contratista,

            dirresidencia_contratista,
            dircorrespondencia_contratista,                            
            telefono_contratista,
            celular_contratista,
            correo_contratista,
            paginaweb_contratista,

            pais_contratista,
            departamento_contratista,
            municipio_contratista,


            genero_contratista,
            estadocivil_contratista,

            profesion_contratista
        )

        VALUES(
            '2',
            '1', 
            '1234567333',
            '455555', 

            '', 
            '', 
            '', 
            '33333',
            'ismael.cabana@gmail.com', 
            '',

            '50', 
            '91', 
            '503', 


            '2',
            '2',

            '1'

        );

SQL .............>  (2020-10-26 19:23:26) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '2'
                    WHERE id_contrato = '1'

SQL .............>  (2020-10-26 19:23:26) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: 455555',
                        '1',
                        '2020-10-26 19:23:26',
                        '1'
                    );
