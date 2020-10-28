
SQL .............>  (2020-10-28 01:14:00) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '5', obsdel = '4444'
                    WHERE id_contrato = '2'

SQL .............>  (2020-10-28 01:14:00) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha descartado este contrato',
                        '2',
                        '2020-10-28 01:14:00',
                        '1'
                    );

SQL .............>  (2020-10-28 01:14:55) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '5', obsdel = 'eeeeeeeeeeeee'
                    WHERE id_contrato = '2'

SQL .............>  (2020-10-28 01:14:55) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha descartado este contrato',
                        '2',
                        '2020-10-28 01:14:55',
                        '1'
                    );

SQL .............>  (2020-10-28 01:33:28) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '5', obsdel = 'fffffffffv ffffffffffffff fffffffffffffffff fffffffffffff ffffffffffffffffffffff'
                    WHERE id_contrato = '3'

SQL .............>  (2020-10-28 01:33:28) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha descartado este contrato',
                        '3',
                        '2020-10-28 01:33:28',
                        '1'
                    );

SQL .............>  (2020-10-28 01:34:46) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '3'

SQL .............>  (2020-10-28 01:34:46) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: PEDRO DCCSC',
                        '3',
                        '2020-10-28 01:34:46',
                        '1'
                    );

SQL .............>  (2020-10-28 01:35:21) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '5', obsdel = 'fffff vvvvvvvvv ed de veeeeeeeeeeeee dswwef edwefee'
                    WHERE id_contrato = '4'

SQL .............>  (2020-10-28 01:35:21) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha descartado este contrato',
                        '4',
                        '2020-10-28 01:35:21',
                        '1'
                    );

SQL .............>  (2020-10-28 01:35:51) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '2'
                    WHERE id_contrato = '4'

SQL .............>  (2020-10-28 01:35:51) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: 455555',
                        '4',
                        '2020-10-28 01:35:51',
                        '1'
                    );

SQL .............>  (2020-10-28 01:38:28) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '',
                        fecha_contrato = '2020-10-28',
                        fechainicio_contrato = '',
                        fechafinal_contrato = '',
                        fechaliquidacion_contrato = '',
                        valor_contrato = '',
                        concon = '1'

                    WHERE id_contrato = '1'

SQL .............>  (2020-10-28 01:38:28) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el  hasta el ',
                        '1',
                        '2020-10-28 01:38:28',
                        '1'
                    );

SQL .............>  (2020-10-28 01:41:18) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '123987555',
                        fecha_contrato = '2020-10-28',
                        fechainicio_contrato = '2020-10-08',
                        fechafinal_contrato = '',
                        fechaliquidacion_contrato = '2020-10-31',
                        valor_contrato = '50000',
                        concon = '1'

                    WHERE id_contrato = '3'

SQL .............>  (2020-10-28 01:41:18) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: 123987555, cuya vigencia es desde el 2020-10-08 hasta el ',
                        '3',
                        '2020-10-28 01:41:18',
                        '1'
                    );

SQL .............>  (2020-10-28 01:42:04) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '4444444',
                        fecha_contrato = '2020-10-28',
                        fechainicio_contrato = '2020-10-13',
                        fechafinal_contrato = '',
                        fechaliquidacion_contrato = '2020-10-23',
                        valor_contrato = '34444',
                        concon = '1'

                    WHERE id_contrato = '4'

SQL .............>  (2020-10-28 01:42:04) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: 4444444, cuya vigencia es desde el 2020-10-13 hasta el ',
                        '4',
                        '2020-10-28 01:42:04',
                        '1'
                    );

SQL .............>  (2020-10-28 01:43:35) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'eeeeeeeeeeeeeeeeeee',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-28 01:43:35) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '11',
                        '2020-10-28 01:43:35',
                        '1'
                    );

SQL .............>  (2020-10-28 01:44:08) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '0001',
            valproceso_contrato = '120000',
            favisoproceso_contrato = '2020-10-10',
            fevaluacionproceso_contrato = '2020-10-11',
            fevaluacionproceso2_contrato = '2020-10-11',
            fadjudicacionproceso_contrato = '2020-11-06',
            fcierreproceso_contrato = '2020-10-10',
            hcierreproceso_contrato = '02:46',
            modalidad_contrato = '2',
            tipo_contrato = '1',
            objeto_contrato = 'eeeeeeeeeeeeeeeeeee',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '11'

SQL .............>  (2020-10-28 01:44:08) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '11',
                        '2020-10-28 01:44:08',
                        '1'
                    );

SQL .............>  (2020-10-28 01:44:19) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '0001',
            valproceso_contrato = '120000',
            favisoproceso_contrato = '2020-10-10',
            fevaluacionproceso_contrato = '2020-10-11',
            fevaluacionproceso2_contrato = '2020-10-11',
            fadjudicacionproceso_contrato = '2020-11-06',
            fcierreproceso_contrato = '2020-10-10',
            hcierreproceso_contrato = '02:46',
            modalidad_contrato = '2',
            tipo_contrato = '1',
            objeto_contrato = 'eeeeeeeeeeeeeeeeeee',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '11'

SQL .............>  (2020-10-28 01:44:22) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '0001',
            valproceso_contrato = '1200003',
            favisoproceso_contrato = '2020-10-10',
            fevaluacionproceso_contrato = '2020-10-11',
            fevaluacionproceso2_contrato = '2020-10-11',
            fadjudicacionproceso_contrato = '2020-11-06',
            fcierreproceso_contrato = '2020-10-10',
            hcierreproceso_contrato = '02:46',
            modalidad_contrato = '2',
            tipo_contrato = '1',
            objeto_contrato = 'eeeeeeeeeeeeeeeeeee',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '11'

SQL .............>  (2020-10-28 01:44:22) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '11',
                        '2020-10-28 01:44:22',
                        '1'
                    );

SQL .............>  (2020-10-28 01:44:27) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '11'

SQL .............>  (2020-10-28 01:44:28) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: PEDRO DCCSC',
                        '11',
                        '2020-10-28 01:44:28',
                        '1'
                    );

SQL .............>  (2020-10-28 01:44:37) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '333333',
                        fecha_contrato = '2020-10-28',
                        fechainicio_contrato = '',
                        fechafinal_contrato = '2020-10-01',
                        fechaliquidacion_contrato = '',
                        valor_contrato = '22222',
                        concon = '1'

                    WHERE id_contrato = '11'

SQL .............>  (2020-10-28 01:44:37) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: 333333, cuya vigencia es desde el  hasta el 2020-10-01',
                        '11',
                        '2020-10-28 01:44:37',
                        '1'
                    );
