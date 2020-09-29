
SQL .............>  (2020-09-29 00:00:11) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'ffffffff',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-09-29 00:00:11) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '37',
                        '2020-09-29 00:00:11',
                        '1'
                    );

SQL .............>  (2020-09-29 00:00:19) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = '2020 - 1',
                        valproceso_contrato = '3',
                        favisoproceso_contrato = '2020-09-05',
                        fevaluacionproceso_contrato = '',
                        fevaluacionproceso2_contrato = '',
                        fadjudicacionproceso_contrato = '',
                        fcierreproceso_contrato = '',
                        modalidad_contrato = '2',
                        tipo_contrato = '1',
                        objeto_contrato = 'ffffffff',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = '',
                        conpro = '1'

                    WHERE id_contrato = '37'

SQL .............>  (2020-09-29 00:00:19) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '37',
                        '2020-09-29 00:00:19',
                        '1'
                    );

SQL .............>  (2020-09-29 00:28:28) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        '4343',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-09-29 00:28:28) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '38',
                        '2020-09-29 00:28:28',
                        '1'
                    );

SQL .............>  (2020-09-29 00:28:33) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = '2020 - 1',
                        valproceso_contrato = '120000',
                        favisoproceso_contrato = '',
                        fevaluacionproceso_contrato = '',
                        fevaluacionproceso2_contrato = '',
                        fadjudicacionproceso_contrato = '',
                        fcierreproceso_contrato = '',
                        modalidad_contrato = '7',
                        tipo_contrato = '1',
                        objeto_contrato = '4343',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = '',
                        conpro = '1'

                    WHERE id_contrato = '38'

SQL .............>  (2020-09-29 00:28:33) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '38',
                        '2020-09-29 00:28:33',
                        '1'
                    );

SQL .............>  (2020-09-29 00:40:12) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 1',
            valproceso_contrato = '3',
            favisoproceso_contrato = '2020-09-05',
            fevaluacionproceso_contrato = '',
            fevaluacionproceso2_contrato = '',
            fadjudicacionproceso_contrato = '',
            fcierreproceso_contrato = '',
            modalidad_contrato = '2',
            tipo_contrato = '1',
            objeto_contrato = 'ffffffff5',

            conpro = '1'

        WHERE id_contrato = '37'

SQL .............>  (2020-09-29 00:40:12) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '37',
                        '2020-09-29 00:40:12',
                        '1'
                    );

SQL .............>  (2020-09-29 09:58:35) (Usuario: 1083459981) 
        INSERT INTO contratistas (

            tipo_contratista,
            tipodocumento_contratista,
            documento_contratista,
            nombres_contratista,
            apellidos_contratista,

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
            hijos_contratista,

            profesion_contratista
        )

        VALUES(
            '2',
            '1', 
            '333',
            'FEFE', 
            'FWEFEF', 

            '', 
            '', 
            '', 
            '333',
            'prueba@gmail.com', 
            '',

            '50', 
            '91', 
            '503', 


            '2',
            '2',
            '',

            '1'

        );

SQL .............>  (2020-09-29 09:58:41) (Usuario: 1083459981)   
        UPDATE contratistas  
               
        SET 
        
        tipo_contratista = '2',
        tipodocumento_contratista = '1', 
        documento_contratista = '333', 
        nombres_contratista = 'FEFE3333333333333333',
        apellidos_contratista = 'FWEFEF33333333333333', 

        dirresidencia_contratista = '', 
        dircorrespondencia_contratista = '', 
        telefono_contratista = '', 
        celular_contratista = '333', 
        correo_contratista = 'prueba@gmail.com', 
        paginaweb_contratista = '',

        pais_contratista = '50', 
        departamento_contratista = '91', 
        municipio_contratista = '503', 


        genero_contratista = '2', 
        estadocivil_contratista = '2', 
        hijos_contratista = '0', 
        
        profesion_contratista = '1'

        WHERE id_contratista = '229'

SQL .............>  (2020-09-29 09:58:57) (Usuario: 1083459981) 
        INSERT INTO supervisores (

            tipo_supervisor,
            tipodocumento_supervisor,
            documento_supervisor,
            nombres_supervisor,
            apellidos_supervisor,

            dirresidencia_supervisor,
            dircorrespondencia_supervisor,                            
            telefono_supervisor,
            celular_supervisor,
            correo_supervisor,
            paginaweb_supervisor,

            pais_supervisor,
            departamento_supervisor,
            municipio_supervisor,


            genero_supervisor,
            estadocivil_supervisor,
            hijos_supervisor,

            profesion_supervisor
        )

        VALUES(
            '2',
            '1', 
            '444',
            '444', 
            '44', 

            '', 
            '', 
            '', 
            '43434',
            'anaorozco@gmail.com', 
            '',

            '50', 
            '91', 
            '503', 


            '2',
            '2',
            '',

            '1'

        );

SQL .............>  (2020-09-29 09:59:02) (Usuario: 1083459981)   
        UPDATE supervisores  
               
        SET 
        
        tipo_supervisor = '2',
        tipodocumento_supervisor = '1', 
        documento_supervisor = '444', 
        nombres_supervisor = '4445555555555555555',
        apellidos_supervisor = '445555555555555555555', 

        dirresidencia_supervisor = '', 
        dircorrespondencia_supervisor = '', 
        telefono_supervisor = '', 
        celular_supervisor = '43434', 
        correo_supervisor = 'anaorozco@gmail.com', 
        paginaweb_supervisor = '',

        pais_supervisor = '50', 
        departamento_supervisor = '91', 
        municipio_supervisor = '503', 


        genero_supervisor = '2', 
        estadocivil_supervisor = '2', 
        hijos_supervisor = '0', 
        
        profesion_supervisor = '1'

        WHERE id_supervisor = '13'

SQL .............>  (2020-09-29 09:59:23) (Usuario: 1083459981) 
        INSERT INTO encargados (

            tipo_encargado,
            tipodocumento_encargado,
            documento_encargado,
            nombres_encargado,
            apellidos_encargado,

            dirresidencia_encargado,
            dircorrespondencia_encargado,                            
            telefono_encargado,
            celular_encargado,
            correo_encargado,
            paginaweb_encargado,

            pais_encargado,
            departamento_encargado,
            municipio_encargado,


            genero_encargado,
            estadocivil_encargado,
            hijos_encargado,

            profesion_encargado
        )

        VALUES(
            '2',
            '1', 
            '123456789033',
            '34', 
            '3434', 

            '', 
            '', 
            '', 
            '3434',
            'ana.orozco@gmail.com', 
            '',

            '50', 
            '91', 
            '503', 

            '2',
            '2',
            '',

            '1'

        );
