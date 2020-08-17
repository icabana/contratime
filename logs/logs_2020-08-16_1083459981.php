
SQL .............>  (2020-08-16 13:32:12) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '2',
                        '16'
                    );

SQL .............>  (2020-08-16 13:32:55) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '11',
                        '16'
                    );

SQL .............>  (2020-08-16 13:34:19) (Usuario: 1083459981) INSERT INTO contratos (
                        numproceso_contrato,
                        valproceso_contrato,
                        favisoproceso_contrato,
                        fevaluacionproceso_contrato,
                        fevaluacionproceso2_contrato,
                        fadjudicacionproceso_contrato,
                        fcierreproceso_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                    VALUES(
                        '0001',
                        '15000000',
                        '2020-08-16',
                        '2020-08-22',
                        '2020-08-29',
                        '2020-08-29',
                        '2020-09-06',
                        '1',
                        '2',
                        'bfgb gbfg gfg fgng',
                        '1'
                    );

SQL .............>  (2020-08-16 13:34:19) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '18',
                        '2020-08-16 13:34:19',
                        '1'
                    );

SQL .............>  (2020-08-16 13:34:42) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '2',
                        '18'
                    );

SQL .............>  (2020-08-16 13:34:42) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a Maikol  Grandett cómo encargado de éste Proceso',
                        '18',
                        '2020-08-16 13:34:42',
                        '1'
                    );

SQL .............>  (2020-08-16 13:34:54) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '6',
                        '18'
                    );

SQL .............>  (2020-08-16 13:34:54) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a Ismael Cabana Manga cómo encargado de éste Proceso',
                        '18',
                        '2020-08-16 13:34:54',
                        '1'
                    );

SQL .............>  (2020-08-16 13:35:04) (Usuario: 1083459981) DELETE FROM contratos_encargados WHERE id_encargado = '43'

SQL .............>  (2020-08-16 13:35:04) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Desasoció a Maikol  Grandett cómo encargado de éste Proceso',
                        '18',
                        '2020-08-16 13:35:04',
                        '1'
                    );

SQL .............>  (2020-08-16 13:35:06) (Usuario: 1083459981) DELETE FROM contratos_encargados WHERE id_encargado = '44'

SQL .............>  (2020-08-16 13:35:06) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Desasoció a Ismael Cabana Manga cómo encargado de éste Proceso',
                        '18',
                        '2020-08-16 13:35:06',
                        '1'
                    );

SQL .............>  (2020-08-16 13:50:13) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '18'

SQL .............>  (2020-08-16 13:50:13) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ismael 
         cabana.',
                        '18',
                        '2020-08-16 13:50:13',
                        '1'
                    );

SQL .............>  (2020-08-16 13:51:51) (Usuario: 1083459981) INSERT INTO contratos (
                        numproceso_contrato,
                        valproceso_contrato,
                        favisoproceso_contrato,
                        fevaluacionproceso_contrato,
                        fevaluacionproceso2_contrato,
                        fadjudicacionproceso_contrato,
                        fcierreproceso_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                    VALUES(
                        '0002',
                        '120000',
                        '2020-08-14',
                        '2020-08-22',
                        '2020-08-22',
                        '2020-08-23',
                        '2020-09-04',
                        '8',
                        '6',
                        'vvrv er',
                        '1'
                    );

SQL .............>  (2020-08-16 13:51:51) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '19',
                        '2020-08-16 13:51:51',
                        '1'
                    );

SQL .............>  (2020-08-16 13:52:00) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '19'

SQL .............>  (2020-08-16 13:52:00) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ismael 
         cabana.',
                        '19',
                        '2020-08-16 13:52:00',
                        '1'
                    );

SQL .............>  (2020-08-16 13:52:11) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'cefefwefew',
                        '19',
                        '2020-08-16 13:52:11',
                        '1'
                    );

SQL .............>  (2020-08-16 13:55:47) (Usuario: 1083459981)   
        UPDATE contratistas  
               
        SET 
        
        tipo_contratista = '2',
        tipodocumento_contratista = '1', 
        documento_contratista = '1083459981', 
        nombres_contratista = 'ISMAEL ANTONIO',
        apellidos_contratista = 'CABANA MANGA', 

        dirresidencia_contratista = 'efe', 
        dircorrespondencia_contratista = '3r3', 
        telefono_contratista = '33', 
        celular_contratista = '3043881447', 
        correo_contratista = 'ismael.cabana@gmail.com', 
        paginaweb_contratista = 'r',

        pais_contratista = '4', 
        departamento_contratista = '8', 
        municipio_contratista = '449', 

        fechanacimiento_contratista = '', 

        genero_contratista = '2', 
        estadocivil_contratista = '2', 
        hijos_contratista = '4', 
        
        profesion_contratista = '1'

        WHERE id_contratista = '1'

SQL .............>  (2020-08-16 13:55:56) (Usuario: 1083459981)   
        UPDATE contratistas  
               
        SET 
        
        tipo_contratista = '2',
        tipodocumento_contratista = '1', 
        documento_contratista = '1083459981', 
        nombres_contratista = 'ISMAEL ANTONIO',
        apellidos_contratista = 'CABANA MANGÁ', 

        dirresidencia_contratista = 'efe', 
        dircorrespondencia_contratista = '3r3', 
        telefono_contratista = '33', 
        celular_contratista = '3043881447', 
        correo_contratista = 'ismael.cabana@gmail.com', 
        paginaweb_contratista = 'r',

        pais_contratista = '4', 
        departamento_contratista = '8', 
        municipio_contratista = '449', 

        fechanacimiento_contratista = '', 

        genero_contratista = '2', 
        estadocivil_contratista = '2', 
        hijos_contratista = '4', 
        
        profesion_contratista = '1'

        WHERE id_contratista = '1'

SQL .............>  (2020-08-16 14:03:33) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = 'cefef',
                        fechainicio_contrato = '2020-08-16',
                        fechafinal_contrato = '2020-08-21',
                        valor_contrato = '32323'

                    WHERE id_contrato = '19'

SQL .............>  (2020-08-16 14:03:33) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: cefef, cuya vigencia es desde el 2020-08-16 hasta el 2020-08-21',
                        '19',
                        '2020-08-16 14:03:33',
                        '1'
                    );

SQL .............>  (2020-08-16 14:06:47) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = 'vvv',
                        fechainicio_contrato = '2020-08-15',
                        fechafinal_contrato = '2020-08-22',
                        valor_contrato = '33323'

                    WHERE id_contrato = '18'

SQL .............>  (2020-08-16 14:06:47) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: vvv, cuya vigencia es desde el 2020-08-15 hasta el 2020-08-22',
                        '18',
                        '2020-08-16 14:06:47',
                        '1'
                    );

SQL .............>  (2020-08-16 14:07:32) (Usuario: 1083459981) INSERT INTO contratos (
                        numproceso_contrato,
                        valproceso_contrato,
                        favisoproceso_contrato,
                        fevaluacionproceso_contrato,
                        fevaluacionproceso2_contrato,
                        fadjudicacionproceso_contrato,
                        fcierreproceso_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                    VALUES(
                        '00023',
                        '323',
                        '2020-08-16',
                        '2020-08-21',
                        '2020-08-30',
                        '2020-08-30',
                        '2020-09-01',
                        '8',
                        '6',
                        'efwefefewvewefw',
                        '1'
                    );

SQL .............>  (2020-08-16 14:07:32) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '20',
                        '2020-08-16 14:07:32',
                        '1'
                    );

SQL .............>  (2020-08-16 14:07:36) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '20'

SQL .............>  (2020-08-16 14:07:36) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '20',
                        '2020-08-16 14:07:36',
                        '1'
                    );

SQL .............>  (2020-08-16 14:07:54) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '323',
                        fechainicio_contrato = '2020-08-21',
                        fechafinal_contrato = '2020-08-30',
                        valor_contrato = '343434'

                    WHERE id_contrato = '20'

SQL .............>  (2020-08-16 14:07:54) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: 323, cuya vigencia es desde el 2020-08-21 hasta el 2020-08-30',
                        '20',
                        '2020-08-16 14:07:54',
                        '1'
                    );

SQL .............>  (2020-08-16 14:08:37) (Usuario: 1083459981) INSERT INTO contratos (
                        numproceso_contrato,
                        valproceso_contrato,
                        favisoproceso_contrato,
                        fevaluacionproceso_contrato,
                        fevaluacionproceso2_contrato,
                        fadjudicacionproceso_contrato,
                        fcierreproceso_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                    VALUES(
                        '0005',
                        '670000',
                        '2020-08-22',
                        '2020-08-22',
                        '2020-08-22',
                        '2020-09-03',
                        '2020-09-03',
                        '8',
                        '6',
                        'vdsvsdvsdvsdvsdv dvsdvd dvsd',
                        '1'
                    );

SQL .............>  (2020-08-16 14:08:37) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '21',
                        '2020-08-16 14:08:37',
                        '1'
                    );

SQL .............>  (2020-08-16 14:08:49) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '21'

SQL .............>  (2020-08-16 14:08:49) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '21',
                        '2020-08-16 14:08:49',
                        '1'
                    );

SQL .............>  (2020-08-16 14:09:10) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '3232',
                        fechainicio_contrato = '2020-08-16',
                        fechafinal_contrato = '2020-08-21',
                        valor_contrato = '32323'

                    WHERE id_contrato = '21'

SQL .............>  (2020-08-16 14:09:10) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: 3232, cuya vigencia es desde el 2020-08-16 hasta el 2020-08-21',
                        '21',
                        '2020-08-16 14:09:10',
                        '1'
                    );

SQL .............>  (2020-08-16 14:09:50) (Usuario: 1083459981) INSERT INTO contratos (
                        numproceso_contrato,
                        valproceso_contrato,
                        favisoproceso_contrato,
                        fevaluacionproceso_contrato,
                        fevaluacionproceso2_contrato,
                        fadjudicacionproceso_contrato,
                        fcierreproceso_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                    VALUES(
                        '0007',
                        '70000',
                        '2020-08-22',
                        '2020-08-29',
                        '2020-08-29',
                        '2020-08-29',
                        '2020-08-29',
                        '8',
                        '6',
                        'cwev weewef',
                        '1'
                    );

SQL .............>  (2020-08-16 14:09:50) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '22',
                        '2020-08-16 14:09:50',
                        '1'
                    );

SQL .............>  (2020-08-16 14:10:02) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '22'

SQL .............>  (2020-08-16 14:10:02) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '22',
                        '2020-08-16 14:10:02',
                        '1'
                    );

SQL .............>  (2020-08-16 14:10:17) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '00007',
                        fechainicio_contrato = '2020-08-18',
                        fechafinal_contrato = '2020-08-21',
                        valor_contrato = '80000000000'

                    WHERE id_contrato = '22'

SQL .............>  (2020-08-16 14:10:17) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: 00007, cuya vigencia es desde el 2020-08-18 hasta el 2020-08-21',
                        '22',
                        '2020-08-16 14:10:17',
                        '1'
                    );

SQL .............>  (2020-08-16 14:12:03) (Usuario: 1083459981) INSERT INTO contratos (
                        numproceso_contrato,
                        valproceso_contrato,
                        favisoproceso_contrato,
                        fevaluacionproceso_contrato,
                        fevaluacionproceso2_contrato,
                        fadjudicacionproceso_contrato,
                        fcierreproceso_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                    VALUES(
                        '0009',
                        '120000',
                        '2020-08-16',
                        '2020-08-18',
                        '2020-08-21',
                        '2020-08-23',
                        '2020-08-27',
                        '8',
                        '6',
                        'fefrgr er',
                        '1'
                    );

SQL .............>  (2020-08-16 14:12:03) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '23',
                        '2020-08-16 14:12:03',
                        '1'
                    );

SQL .............>  (2020-08-16 14:12:08) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '23'

SQL .............>  (2020-08-16 14:12:08) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '23',
                        '2020-08-16 14:12:08',
                        '1'
                    );

SQL .............>  (2020-08-16 14:12:19) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '0009999',
                        fechainicio_contrato = '2020-08-14',
                        fechafinal_contrato = '2020-08-22',
                        valor_contrato = '4343434'

                    WHERE id_contrato = '23'

SQL .............>  (2020-08-16 14:12:19) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: 0009999, cuya vigencia es desde el 2020-08-14 hasta el 2020-08-22',
                        '23',
                        '2020-08-16 14:12:19',
                        '1'
                    );

SQL .............>  (2020-08-16 14:16:53) (Usuario: 1083459981) INSERT INTO contratos_supervisores (
                        supervisor_supervisor,
                        contrato_supervisor
                            )
                    VALUES(
                        '2',
                        '22'
                    );

SQL .............>  (2020-08-16 14:16:53) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Asignado cómo supervisor de éste contrato a Maikol  Grandett',
                        '22',
                        '2020-08-16 14:16:53',
                        '1'
                    );

SQL .............>  (2020-08-16 14:16:54) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha enviado un correo de Notificación a Maikol  Grandett Informando que ha sido Asignado cómo supervisor de éste contrato',
                        '22',
                        '2020-08-16 14:16:54',
                        '1'
                    );

SQL .............>  (2020-08-16 14:26:46) (Usuario: 1083459981) DELETE FROM contratos_supervisores WHERE id_supervisor = '5'

SQL .............>  (2020-08-16 14:26:46) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Desasoció a Maikol  Grandett cómo Supervisor de éste Contrato',
                        '22',
                        '2020-08-16 14:26:46',
                        '1'
                    );

SQL .............>  (2020-08-16 14:27:03) (Usuario: 1083459981) INSERT INTO contratos_supervisores (
                        supervisor_supervisor,
                        contrato_supervisor
                            )
                    VALUES(
                        '2',
                        '22'
                    );

SQL .............>  (2020-08-16 14:27:03) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a Maikol  Grandett cómo Supervisor de éste Contrato',
                        '22',
                        '2020-08-16 14:27:03',
                        '1'
                    );

SQL .............>  (2020-08-16 14:27:12) (Usuario: 1083459981) DELETE FROM contratos_supervisores WHERE id_supervisor = '6'

SQL .............>  (2020-08-16 14:27:12) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Desasoció a Maikol  Grandett cómo Supervisor de éste Contrato',
                        '22',
                        '2020-08-16 14:27:12',
                        '1'
                    );

SQL .............>  (2020-08-16 14:28:08) (Usuario: 1083459981) INSERT INTO contratos_cdps (
                            contrato_cdp,
                            numero_cdp,
                            fecha_cdp,
                            valor_cdp
                            )
                    VALUES(
                            '22',
                            '1111',
                            '2020-08-17',
                            '80000'
                    );

SQL .............>  (2020-08-16 14:28:08) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha asociado el CDP No. 1111 a éste contrato',
                        '22',
                        '2020-08-16 14:28:08',
                        '1'
                    );

SQL .............>  (2020-08-16 14:29:45) (Usuario: 1083459981) INSERT INTO contratos_cdps (
                            contrato_cdp,
                            numero_cdp,
                            fecha_cdp,
                            valor_cdp
                            )
                    VALUES(
                            '22',
                            '1111',
                            '2020-08-23',
                            '333'
                    );

SQL .............>  (2020-08-16 14:29:45) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció el CDP No. 1111 a éste contrato',
                        '22',
                        '2020-08-16 14:29:45',
                        '1'
                    );

SQL .............>  (2020-08-16 14:29:51) (Usuario: 1083459981) DELETE FROM contratos_cdps WHERE id_cdp = '1'

SQL .............>  (2020-08-16 14:29:51) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se desasoció el CDP No. 1111 a éste contrato',
                        '22',
                        '2020-08-16 14:29:51',
                        '1'
                    );

SQL .............>  (2020-08-16 14:31:04) (Usuario: 1083459981) INSERT INTO contratos_cdps (
                            contrato_cdp,
                            numero_cdp,
                            fecha_cdp,
                            valor_cdp
                            )
                    VALUES(
                            '22',
                            '11112',
                            '2020-08-21',
                            '80000'
                    );

SQL .............>  (2020-08-16 14:31:04) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció el CDP No. 11112 a éste contrato',
                        '22',
                        '2020-08-16 14:31:04',
                        '1'
                    );

SQL .............>  (2020-08-16 14:31:48) (Usuario: 1083459981) INSERT INTO contratos_rps (
                            contrato_rp,
                            numero_rp,
                            fecha_rp,
                            valor_rp
                            )
                    VALUES(
                            '22',
                            '800',
                            '2020-08-16',
                            '6565'
                    );

SQL .............>  (2020-08-16 14:31:48) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha asociado el RP No. 800 a éste contrato',
                        '22',
                        '2020-08-16 14:31:48',
                        '1'
                    );

SQL .............>  (2020-08-16 14:32:07) (Usuario: 1083459981) INSERT INTO contratos_rps (
                            contrato_rp,
                            numero_rp,
                            fecha_rp,
                            valor_rp
                            )
                    VALUES(
                            '22',
                            '434',
                            '2020-08-16',
                            '43434'
                    );

SQL .............>  (2020-08-16 14:32:07) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha asociado el RP No. 434 a éste contrato',
                        '22',
                        '2020-08-16 14:32:07',
                        '1'
                    );

SQL .............>  (2020-08-16 14:32:33) (Usuario: 1083459981) DELETE FROM contratos_rps WHERE id_rp = '1'

SQL .............>  (2020-08-16 14:32:33) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha eliminado la asociación del RP No. 800 en éste contrato',
                        '22',
                        '2020-08-16 14:32:33',
                        '1'
                    );

SQL .............>  (2020-08-16 14:40:26) (Usuario: 1083459981) INSERT INTO contratos_prorrogas (
                            contrato_prorroga,
                            fecha_prorroga,
                            dias_prorroga
                            )
                    VALUES(
                            '22',
                            '2020-08-16 14:40:26',
                            '33'
                    );

SQL .............>  (2020-08-16 14:40:43) (Usuario: 1083459981) INSERT INTO contratos_ajustes (
                            contrato_ajuste,
                            tipo_ajuste,
                            fecha_ajuste,
                            valor_ajuste
                            )
                    VALUES(
                            '22',
                            '1',
                            '2020-08-18',
                            '80000'
                    );

SQL .............>  (2020-08-16 14:41:05) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Adjuntado un documento a éste contrato',
                        '22',
                        '2020-08-16 14:41:05',
                        '1'
                    );

SQL .............>  (2020-08-16 14:41:53) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Adjuntado un documento a éste contrato',
                        '22',
                        '2020-08-16 14:41:53',
                        '1'
                    );

SQL .............>  (2020-08-16 14:43:25) (Usuario: 1083459981) INSERT INTO contratos (
                        numproceso_contrato,
                        valproceso_contrato,
                        favisoproceso_contrato,
                        fevaluacionproceso_contrato,
                        fevaluacionproceso2_contrato,
                        fadjudicacionproceso_contrato,
                        fcierreproceso_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        objeto_contrato,
                        estado_contrato
                            )
                    VALUES(
                        'trhtt66',
                        '9000',
                        '2020-08-16',
                        '2020-08-22',
                        '2020-08-23',
                        '2020-08-23',
                        '2020-08-25',
                        '2',
                        '2',
                        'grthrth',
                        '1'
                    );

SQL .............>  (2020-08-16 14:43:25) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '24',
                        '2020-08-16 14:43:25',
                        '1'
                    );

SQL .............>  (2020-08-16 14:43:57) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = 'trhtt66',
                        valproceso_contrato = '9000',
                        favisoproceso_contrato = '2020-08-16',
                        fevaluacionproceso_contrato = '2020-08-18',
                        fevaluacionproceso2_contrato = '2020-08-18',
                        fadjudicacionproceso_contrato = '2020-08-19',
                        fcierreproceso_contrato = '2020-08-19',
                        modalidad_contrato = '2',
                        tipo_contrato = '2',
                        objeto_contrato = 'grthrth',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = ''

                    WHERE id_contrato = '24'

SQL .............>  (2020-08-16 14:50:52) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = 'proc-0004',
                        valproceso_contrato = '9000',
                        favisoproceso_contrato = '2020-08-16',
                        fevaluacionproceso_contrato = '2020-08-18',
                        fevaluacionproceso2_contrato = '2020-08-18',
                        fadjudicacionproceso_contrato = '2020-08-19',
                        fcierreproceso_contrato = '2020-08-19',
                        modalidad_contrato = '2',
                        tipo_contrato = '2',
                        objeto_contrato = 'grthrth',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = ''

                    WHERE id_contrato = '24'

SQL .............>  (2020-08-16 15:48:38) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = 'proc-0004',
                        valproceso_contrato = '9000',
                        favisoproceso_contrato = '2020-08-16',
                        fevaluacionproceso_contrato = '2020-08-18',
                        fevaluacionproceso2_contrato = '2020-08-18',
                        fadjudicacionproceso_contrato = '2020-08-19',
                        fcierreproceso_contrato = '2020-08-22',
                        modalidad_contrato = '2',
                        tipo_contrato = '2',
                        objeto_contrato = 'grthrth',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = ''

                    WHERE id_contrato = '24'

SQL .............>  (2020-08-16 16:00:11) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = '0007',
                        valproceso_contrato = '70000',
                        favisoproceso_contrato = '2020-07-17',
                        fevaluacionproceso_contrato = '2020-07-17',
                        fevaluacionproceso2_contrato = '2020-07-25',
                        fadjudicacionproceso_contrato = '2020-07-29',
                        fcierreproceso_contrato = '2020-08-29',
                        modalidad_contrato = '8',
                        tipo_contrato = '6',
                        objeto_contrato = 'cwev weewef',

                        numero_contrato = '0007',
                        valor_contrato = '80000000000',
                        fechainicio_contrato = '2020-06-17',
                        fechafinal_contrato = '2020-07-25'

                    WHERE id_contrato = '22'

SQL .............>  (2020-08-16 16:16:43) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'n fggfgngf gnfg',
                        '22',
                        '2020-08-16 16:16:43',
                        '1'
                    );

SQL .............>  (2020-08-16 16:39:37) (Usuario: 1083459981) INSERT INTO contratos_supervisores (
                        supervisor_supervisor,
                        contrato_supervisor
                            )
                    VALUES(
                        '2',
                        '22'
                    );

SQL .............>  (2020-08-16 16:39:37) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a Maikol  Grandett cómo Supervisor de éste Contrato',
                        '22',
                        '2020-08-16 16:39:37',
                        '1'
                    );

SQL .............>  (2020-08-16 16:39:41) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '6',
                        '22'
                    );

SQL .............>  (2020-08-16 16:39:41) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a Ismael Cabana Manga cómo Encargado de éste Proceso',
                        '22',
                        '2020-08-16 16:39:41',
                        '1'
                    );

SQL .............>  (2020-08-16 16:40:00) (Usuario: 1083459981) INSERT INTO contratos_rps (
                            contrato_rp,
                            numero_rp,
                            fecha_rp,
                            valor_rp
                            )
                    VALUES(
                            '22',
                            '56',
                            '2020-08-13',
                            '60000'
                    );

SQL .............>  (2020-08-16 16:40:00) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció el RP No. 56 a éste contrato',
                        '22',
                        '2020-08-16 16:40:00',
                        '1'
                    );

SQL .............>  (2020-08-16 16:40:09) (Usuario: 1083459981) INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '22',
                            '1',
                            '2020-08-16',
                            '333'
                    );

SQL .............>  (2020-08-16 16:40:09) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha regitrado un pago a este contrato: Tipo de pago: ANTICIPO, Valor: $333',
                        '22',
                        '2020-08-16 16:40:09',
                        '1'
                    );

SQL .............>  (2020-08-16 16:40:18) (Usuario: 1083459981) INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '22',
                            '1',
                            '2020-08-16',
                            '333'
                    );

SQL .............>  (2020-08-16 16:40:18) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha regitrado un pago a este contrato: Tipo de pago: ANTICIPO, Valor: $333',
                        '22',
                        '2020-08-16 16:40:18',
                        '1'
                    );

SQL .............>  (2020-08-16 17:51:53) (Usuario: 1083459981) INSERT INTO contratos_polizas (
                            contrato_poliza,
                            numero_poliza,
                            fechaexp_poliza, 
                            fechainicio_poliza, 
                            fechafinal_poliza
                            )
                    VALUES(
                            '22',
                            '32',
                            '2020-08-16',
                            '2020-08-23',
                            '2020-08-28'
                    );

SQL .............>  (2020-08-16 17:51:53) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha asociado la Poliza de Garantía No. 32 a éste contrato',
                        '22',
                        '2020-08-16 17:51:53',
                        '1'
                    );

SQL .............>  (2020-08-16 17:52:07) (Usuario: 1083459981) INSERT INTO contratos_polizas (
                            contrato_poliza,
                            numero_poliza,
                            fechaexp_poliza, 
                            fechainicio_poliza, 
                            fechafinal_poliza
                            )
                    VALUES(
                            '22',
                            '33',
                            '2020-08-23',
                            '2020-08-20',
                            '2020-08-29'
                    );

SQL .............>  (2020-08-16 17:52:07) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha asociado la Poliza de Garantía No. 33 a éste contrato',
                        '22',
                        '2020-08-16 17:52:07',
                        '1'
                    );

SQL .............>  (2020-08-16 18:00:45) (Usuario: 1083459981) INSERT INTO contratos_ajustes (
                            contrato_ajuste,
                            tipo_ajuste,
                            fecha_ajuste,
                            valor_ajuste
                            )
                    VALUES(
                            '22',
                            '1',
                            '2020-08-22',
                            '66565'
                    );

SQL .............>  (2020-08-16 18:00:56) (Usuario: 1083459981) INSERT INTO contratos_prorrogas (
                            contrato_prorroga,
                            fecha_prorroga,
                            dias_prorroga
                            )
                    VALUES(
                            '22',
                            '2020-08-16 18:00:56',
                            '77'
                    );

SQL .............>  (2020-08-16 18:28:02) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'ffffffffffffffffffff',
                        '22',
                        '2020-08-16 18:28:02',
                        '1'
                    );

SQL .............>  (2020-08-16 19:09:48) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = '0009',
                        valproceso_contrato = '120000',
                        favisoproceso_contrato = '2020-08-16',
                        fevaluacionproceso_contrato = '2020-08-18',
                        fevaluacionproceso2_contrato = '2020-08-21',
                        fadjudicacionproceso_contrato = '2020-08-23',
                        fcierreproceso_contrato = '2020-08-27',
                        modalidad_contrato = '8',
                        contratista_contrato = '2',
                        tipo_contrato = '6',
                        objeto_contrato = 'fefrgr er',

                        numero_contrato = '0009',
                        valor_contrato = '4343434',
                        fechainicio_contrato = '2020-08-14',
                        fechafinal_contrato = '2020-08-22'

                    WHERE id_contrato = '23'

SQL .............>  (2020-08-16 19:18:02) (Usuario: 1083459981)   
        UPDATE contratistas  
               
        SET 
        
        tipo_contratista = '1',
        tipodocumento_contratista = '1', 
        documento_contratista = '6758320', 
        nombres_contratista = 'PEDRO',
        apellidos_contratista = 'PEREZ PERTUZ', 

        dirresidencia_contratista = 'dghjk', 
        dircorrespondencia_contratista = 'fhn vzddg', 
        telefono_contratista = '23457', 
        celular_contratista = '25637484', 
        correo_contratista = 'jjimenez@gmail.com', 
        paginaweb_contratista = 'iffjker.www',

        pais_contratista = '50', 
        departamento_contratista = '8', 
        municipio_contratista = '698', 

        fechanacimiento_contratista = '2000-05-12', 

        genero_contratista = '1', 
        estadocivil_contratista = '3', 
        hijos_contratista = '1', 
        
        profesion_contratista = '19'

        WHERE id_contratista = '2'
