
SQL .............>  (2020-10-05 00:15:28) (Usuario: 1083459981)   UPDATE contratos 

                SET contratista_contrato = '1',
                    tipo_contrato = '1',
                    objeto_contrato = 'gggggggggggg',
                    estado2_contrato = '',

                    numero_contrato = '2020 - 1',
                    valor_contrato = '1800000',
                    fecha_contrato = '2020-10-04',
                    fechainicio_contrato = '2020-09-04',
                    fechafinal_contrato = '2020-09-27',
                    fechaliquidacion_contrato = '2020-10-31'

                WHERE id_contrato = '35'

SQL .............>  (2020-10-05 00:15:28) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Contrato',
                        '1',
                        '2020-10-05 00:15:28',
                        '1'
                    );

SQL .............>  (2020-10-05 00:15:58) (Usuario: 1083459981)   UPDATE contratos 

                SET numproceso_contrato = '2020 - 1',
                    valproceso_contrato = '3',
                    favisoproceso_contrato = '2020-09-05',
                    fevaluacionproceso_contrato = '',
                    fevaluacionproceso2_contrato = '',
                    fadjudicacionproceso_contrato = '',
                    fcierreproceso_contrato = '',
                    modalidad_contrato = '2',
                    contratista_contrato = '1',
                    tipo_contrato = '1',
                    objeto_contrato = 'ffffffff5',
                    estado2_contrato = '',

                    numero_contrato = '2020 - 1',
                    valor_contrato = '2222',
                    fecha_contrato = '2020-10-28',
                    fechainicio_contrato = '2020-10-18',
                    fechafinal_contrato = '2020-10-31',
                    fechaliquidacion_contrato = '2020-10-31',
                    conpro = '1'

                WHERE id_contrato = '37'

SQL .............>  (2020-10-05 00:17:38) (Usuario: 1083459981)   UPDATE contratos 

                SET contratista_contrato = '1',
                    tipo_contrato = '1',
                    objeto_contrato = 'gggggggggggg',
                    estado2_contrato = '1',

                    numero_contrato = '2020 - 1',
                    valor_contrato = '1800000',
                    fecha_contrato = '2020-10-04',
                    fechainicio_contrato = '2020-09-04',
                    fechafinal_contrato = '2020-09-27',
                    fechaliquidacion_contrato = '2020-10-31'

                WHERE id_contrato = '35'

SQL .............>  (2020-10-05 00:17:39) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Contrato',
                        '1',
                        '2020-10-05 00:17:39',
                        '1'
                    );

SQL .............>  (2020-10-05 00:17:46) (Usuario: 1083459981)   UPDATE contratos 

                SET numproceso_contrato = '2020 - 1',
                    valproceso_contrato = '3',
                    favisoproceso_contrato = '2020-09-05',
                    fevaluacionproceso_contrato = '',
                    fevaluacionproceso2_contrato = '',
                    fadjudicacionproceso_contrato = '',
                    fcierreproceso_contrato = '',
                    modalidad_contrato = '2',
                    contratista_contrato = '1',
                    tipo_contrato = '1',
                    objeto_contrato = 'ffffffff5',
                    estado2_contrato = '1',

                    numero_contrato = '2020 - 1',
                    valor_contrato = '2222',
                    fecha_contrato = '2020-10-28',
                    fechainicio_contrato = '2020-10-18',
                    fechafinal_contrato = '2020-10-31',
                    fechaliquidacion_contrato = '2020-10-31',
                    conpro = '1'

                WHERE id_contrato = '37'

SQL .............>  (2020-10-05 00:19:16) (Usuario: 1083459981)   UPDATE contratos 

                    SET plan_contrato = '24'

                    WHERE id_contrato = '38'

SQL .............>  (2020-10-05 00:19:16) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Relacionó un registro del Plan de Accion del 2020',
                        '38',
                        '2020-10-05 00:19:16',
                        '1'
                    );

SUCCESS ---------->  (2020-10-05 00:28:12) (Usuario: 1083459981) Se cerrÃ³ la SesiÃ³n de forma correcta.

SUCCESS ---------->  (2020-10-05 00:28:17) (Usuario: 1083459981) Inicio de SesiÃ³n correcto.

SQL .............>  (2020-10-05 00:30:18) (Usuario: 1083459981)   UPDATE usuarios SET correo_usuario = 'contacto@logintime.co', 
                                            password_usuario = '81dc9bdb52d04dc20036dbd8313ed055', 
                                            estado_usuario = '1'
            
                        WHERE id_usuario = '1'

SQL .............>  (2020-10-05 00:30:18) (Usuario: 1083459981) DELETE FROM perfiles WHERE usuario_perfil = '1'

SQL .............>  (2020-10-05 00:30:18) (Usuario: 1083459981) INSERT INTO perfiles (
                                usuario_perfil,
                                rol_perfil
                            )
                            VALUES(
                                '1',
                                '1'
                            );

SQL .............>  (2020-10-05 00:30:18) (Usuario: 1083459981) INSERT INTO perfiles (
                                usuario_perfil,
                                rol_perfil
                            )
                            VALUES(
                                '1',
                                '5'
                            );

SQL .............>  (2020-10-05 00:30:18) (Usuario: 1083459981) INSERT INTO perfiles (
                                usuario_perfil,
                                rol_perfil
                            )
                            VALUES(
                                '1',
                                '10'
                            );

SQL .............>  (2020-10-05 00:30:18) (Usuario: 1083459981) INSERT INTO perfiles (
                                usuario_perfil,
                                rol_perfil
                            )
                            VALUES(
                                '1',
                                '4'
                            );

SQL .............>  (2020-10-05 00:30:18) (Usuario: 1083459981) INSERT INTO perfiles (
                                usuario_perfil,
                                rol_perfil
                            )
                            VALUES(
                                '1',
                                '2'
                            );

SQL .............>  (2020-10-05 00:30:18) (Usuario: 1083459981) INSERT INTO perfiles (
                                usuario_perfil,
                                rol_perfil
                            )
                            VALUES(
                                '1',
                                '3'
                            );

SUCCESS ---------->  (2020-10-05 00:30:21) (Usuario: 1083459981) Se cerrÃ³ la SesiÃ³n de forma correcta.

SUCCESS ---------->  (2020-10-05 00:30:26) (Usuario: 1083459981) Inicio de SesiÃ³n correcto.

SQL .............>  (2020-10-05 09:14:01) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 09:14:01) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '41',
                        '2020-10-05 09:14:01',
                        '1'
                    );

SQL .............>  (2020-10-05 09:16:51) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'aaaaaaaaaaaaaaa',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 09:16:51) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '42',
                        '2020-10-05 09:16:51',
                        '1'
                    );

SQL .............>  (2020-10-05 09:21:57) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 1',
            valproceso_contrato = '15000000',
            favisoproceso_contrato = '2020-10-08',
            fevaluacionproceso_contrato = '2020-10-10',
            fevaluacionproceso2_contrato = '2020-10-15',
            fadjudicacionproceso_contrato = '2020-10-17',
            fcierreproceso_contrato = '2020-10-24',
            modalidad_contrato = '6',
            tipo_contrato = '12',
            objeto_contrato = 'aaaaaaaaaaaaaaa',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '42'

SQL .............>  (2020-10-05 09:21:57) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '42',
                        '2020-10-05 09:21:57',
                        '1'
                    );

SQL .............>  (2020-10-05 09:22:13) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 1',
            valproceso_contrato = '15000000',
            favisoproceso_contrato = '2020-10-08',
            fevaluacionproceso_contrato = '2020-10-10',
            fevaluacionproceso2_contrato = '2020-10-15',
            fadjudicacionproceso_contrato = '2020-10-17',
            fcierreproceso_contrato = '2020-10-24',
            modalidad_contrato = '6',
            tipo_contrato = '10',
            objeto_contrato = 'aaaaaaaaaaaaaaa',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '42'

SQL .............>  (2020-10-05 09:22:13) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '42',
                        '2020-10-05 09:22:13',
                        '1'
                    );

SQL .............>  (2020-10-05 09:22:19) (Usuario: 1083459981)   UPDATE contratos 

                    SET plan_contrato = '25'

                    WHERE id_contrato = '42'

SQL .............>  (2020-10-05 09:22:20) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Relacionó un registro del Plan de Accion del 2020',
                        '42',
                        '2020-10-05 09:22:20',
                        '1'
                    );

SQL .............>  (2020-10-05 09:22:58) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '12',
                        '42'
                    );

SQL .............>  (2020-10-05 09:22:58) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a ANA ISABEL  OROZCO CONTRERAS cómo Encargado de éste Proceso',
                        '42',
                        '2020-10-05 09:22:58',
                        '1'
                    );

SQL .............>  (2020-10-05 09:23:40) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '42'

SQL .............>  (2020-10-05 09:23:41) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '42',
                        '2020-10-05 09:23:41',
                        '1'
                    );

SQL .............>  (2020-10-05 12:50:32) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 1',
            valproceso_contrato = '15000000',
            favisoproceso_contrato = '2020-10-08',
            fevaluacionproceso_contrato = '2020-10-10',
            fevaluacionproceso2_contrato = '2020-10-15',
            fadjudicacionproceso_contrato = '2020-10-31',
            fcierreproceso_contrato = '2020-10-15',
            modalidad_contrato = '6',
            tipo_contrato = '10',
            objeto_contrato = 'aaaaaaaaaaaaaaa',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '42'

SQL .............>  (2020-10-05 12:50:32) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '42',
                        '2020-10-05 12:50:32',
                        '1'
                    );

SQL .............>  (2020-10-05 12:50:39) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 1',
            valproceso_contrato = '15000000',
            favisoproceso_contrato = '2020-10-08',
            fevaluacionproceso_contrato = '2020-10-10',
            fevaluacionproceso2_contrato = '2020-10-15',
            fadjudicacionproceso_contrato = '2020-10-31',
            fcierreproceso_contrato = '2020-10-15',
            modalidad_contrato = '6',
            tipo_contrato = '10',
            objeto_contrato = 'aaaaaaaaaaaaaaa',
            estado2_contrato = '1',

            conpro = '1'

        WHERE id_contrato = '42'

SQL .............>  (2020-10-05 12:50:39) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '42',
                        '2020-10-05 12:50:39',
                        '1'
                    );

SQL .............>  (2020-10-05 12:53:43) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Adjuntado un documento a éste contrato',
                        '42',
                        '2020-10-05 12:53:43',
                        '1'
                    );

SQL .............>  (2020-10-05 15:30:11) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '2020 - 1',
                        fecha_contrato = '',
                        fechainicio_contrato = '2020-10-16',
                        fechafinal_contrato = '2020-10-31',
                        fechaliquidacion_contrato = '',
                        valor_contrato = '600000',
                        concon = '1'

                    WHERE id_contrato = '42'

SQL .............>  (2020-10-05 15:30:11) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el 2020-10-16 hasta el 2020-10-31',
                        '42',
                        '2020-10-05 15:30:11',
                        '1'
                    );

SQL .............>  (2020-10-05 16:07:02) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'ddddddddddd',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 16:07:02) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '43',
                        '2020-10-05 16:07:02',
                        '1'
                    );

SQL .............>  (2020-10-05 16:07:06) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '43'

SQL .............>  (2020-10-05 16:07:06) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '43',
                        '2020-10-05 16:07:06',
                        '1'
                    );

SQL .............>  (2020-10-05 16:08:52) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'efwefefw',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 16:08:52) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '44',
                        '2020-10-05 16:08:52',
                        '1'
                    );

SQL .............>  (2020-10-05 16:09:15) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 1',
            valproceso_contrato = '120000',
            favisoproceso_contrato = '2020-10-08',
            fevaluacionproceso_contrato = '2020-10-15',
            fevaluacionproceso2_contrato = '2020-10-25',
            fadjudicacionproceso_contrato = '2020-11-07',
            fcierreproceso_contrato = '2020-10-30',
            modalidad_contrato = '2',
            tipo_contrato = '2',
            objeto_contrato = 'efwefefw',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '44'

SQL .............>  (2020-10-05 16:09:16) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '44',
                        '2020-10-05 16:09:16',
                        '1'
                    );

SQL .............>  (2020-10-05 16:09:25) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '44'

SQL .............>  (2020-10-05 16:09:25) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '44',
                        '2020-10-05 16:09:25',
                        '1'
                    );

SQL .............>  (2020-10-05 16:09:38) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '2020 - 1',
                        fecha_contrato = '',
                        fechainicio_contrato = '2020-10-01',
                        fechafinal_contrato = '2020-10-03',
                        fechaliquidacion_contrato = '',
                        valor_contrato = '50000',
                        concon = '1'

                    WHERE id_contrato = '44'

SQL .............>  (2020-10-05 16:09:39) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el 2020-10-01 hasta el 2020-10-03',
                        '44',
                        '2020-10-05 16:09:39',
                        '1'
                    );

SQL .............>  (2020-10-05 16:12:28) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'fffffffffffffff',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 16:12:28) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '45',
                        '2020-10-05 16:12:28',
                        '1'
                    );

SQL .............>  (2020-10-05 16:12:52) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 2',
            valproceso_contrato = '15000000',
            favisoproceso_contrato = '2020-10-16',
            fevaluacionproceso_contrato = '2020-10-16',
            fevaluacionproceso2_contrato = '2020-10-30',
            fadjudicacionproceso_contrato = '2020-11-01',
            fcierreproceso_contrato = '2020-10-30',
            modalidad_contrato = '6',
            tipo_contrato = '1',
            objeto_contrato = 'fffffffffffffff',
            estado2_contrato = '2',

            conpro = '2'

        WHERE id_contrato = '45'

SQL .............>  (2020-10-05 16:12:53) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '45',
                        '2020-10-05 16:12:53',
                        '1'
                    );

SQL .............>  (2020-10-05 16:13:05) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '45'

SQL .............>  (2020-10-05 16:13:05) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '45',
                        '2020-10-05 16:13:05',
                        '1'
                    );

SQL .............>  (2020-10-05 16:13:18) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '2020 - 2',
                        fecha_contrato = '2020-10-05',
                        fechainicio_contrato = '2020-10-01',
                        fechafinal_contrato = '',
                        fechaliquidacion_contrato = '',
                        valor_contrato = '7800000',
                        concon = '2'

                    WHERE id_contrato = '45'

SQL .............>  (2020-10-05 16:13:18) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el 2020-10-01 hasta el ',
                        '45',
                        '2020-10-05 16:13:18',
                        '1'
                    );

SQL .............>  (2020-10-05 16:15:07) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '2020 - 1',
                        fecha_contrato = '2020-10-05',
                        fechainicio_contrato = '2020-10-08',
                        fechafinal_contrato = '2020-10-09',
                        fechaliquidacion_contrato = '',
                        valor_contrato = '9000',
                        concon = '1'

                    WHERE id_contrato = '43'

SQL .............>  (2020-10-05 16:15:07) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el 2020-10-08 hasta el 2020-10-09',
                        '43',
                        '2020-10-05 16:15:07',
                        '1'
                    );

SQL .............>  (2020-10-05 16:28:57) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        ' fffffffffffffffffff',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 16:28:57) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '46',
                        '2020-10-05 16:28:57',
                        '1'
                    );

SQL .............>  (2020-10-05 16:29:16) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 1',
            valproceso_contrato = '120000',
            favisoproceso_contrato = '2020-10-05',
            fevaluacionproceso_contrato = '2020-10-07',
            fevaluacionproceso2_contrato = '2020-10-10',
            fadjudicacionproceso_contrato = '2020-10-31',
            fcierreproceso_contrato = '2020-10-22',
            modalidad_contrato = '7',
            tipo_contrato = '1',
            objeto_contrato = ' fffffffffffffffffff',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '46'

SQL .............>  (2020-10-05 16:29:16) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '46',
                        '2020-10-05 16:29:16',
                        '1'
                    );

SQL .............>  (2020-10-05 16:29:27) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '46'

SQL .............>  (2020-10-05 16:29:27) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '46',
                        '2020-10-05 16:29:27',
                        '1'
                    );

SQL .............>  (2020-10-05 16:29:41) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '2020 - 1',
                        fecha_contrato = '2020-10-05',
                        fechainicio_contrato = '2020-10-07',
                        fechafinal_contrato = '2020-10-11',
                        fechaliquidacion_contrato = '',
                        valor_contrato = '5500000',
                        concon = '1'

                    WHERE id_contrato = '46'

SQL .............>  (2020-10-05 16:29:41) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el 2020-10-07 hasta el 2020-10-11',
                        '46',
                        '2020-10-05 16:29:41',
                        '1'
                    );

SQL .............>  (2020-10-05 16:30:11) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'fffffffffffffv',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 16:30:11) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '47',
                        '2020-10-05 16:30:11',
                        '1'
                    );

SQL .............>  (2020-10-05 16:30:27) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 2',
            valproceso_contrato = '120000',
            favisoproceso_contrato = '2020-10-09',
            fevaluacionproceso_contrato = '2020-10-16',
            fevaluacionproceso2_contrato = '2020-10-25',
            fadjudicacionproceso_contrato = '2020-10-30',
            fcierreproceso_contrato = '2020-10-27',
            modalidad_contrato = '7',
            tipo_contrato = '1',
            objeto_contrato = 'fffffffffffffv',
            estado2_contrato = '2',

            conpro = '2'

        WHERE id_contrato = '47'

SQL .............>  (2020-10-05 16:30:28) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '47',
                        '2020-10-05 16:30:28',
                        '1'
                    );

SQL .............>  (2020-10-05 16:30:34) (Usuario: 1083459981)   UPDATE contratos 

                    SET plan_contrato = '23'

                    WHERE id_contrato = '47'

SQL .............>  (2020-10-05 16:30:34) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Relacionó un registro del Plan de Accion del 2020',
                        '47',
                        '2020-10-05 16:30:34',
                        '1'
                    );

SQL .............>  (2020-10-05 16:32:29) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '12',
                        '47'
                    );

SQL .............>  (2020-10-05 16:32:29) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a ANA ISABEL  OROZCO CONTRERAS cómo Encargado de éste Proceso',
                        '47',
                        '2020-10-05 16:32:29',
                        '1'
                    );

SQL .............>  (2020-10-05 16:32:43) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '47'

SQL .............>  (2020-10-05 16:32:43) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '47',
                        '2020-10-05 16:32:43',
                        '1'
                    );

SQL .............>  (2020-10-05 16:34:37) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '2020 - 2',
                        fecha_contrato = '2020-10-05',
                        fechainicio_contrato = '2020-10-08',
                        fechafinal_contrato = '2020-10-10',
                        fechaliquidacion_contrato = '2020-10-22',
                        valor_contrato = '700000',
                        concon = '2'

                    WHERE id_contrato = '47'

SQL .............>  (2020-10-05 16:34:37) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el 2020-10-08 hasta el 2020-10-10',
                        '47',
                        '2020-10-05 16:34:37',
                        '1'
                    );

SQL .............>  (2020-10-05 16:35:35) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'fffffffffffffff',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 16:35:36) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '48',
                        '2020-10-05 16:35:36',
                        '1'
                    );

SQL .............>  (2020-10-05 16:35:54) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '6',
                        '48'
                    );

SQL .............>  (2020-10-05 16:35:54) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a Ismael Cabana Manga cómo Encargado de éste Proceso',
                        '48',
                        '2020-10-05 16:35:54',
                        '1'
                    );

SQL .............>  (2020-10-05 16:37:20) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 3',
            valproceso_contrato = '15000000',
            favisoproceso_contrato = '2020-10-07',
            fevaluacionproceso_contrato = '2020-10-16',
            fevaluacionproceso2_contrato = '2020-10-30',
            fadjudicacionproceso_contrato = '2020-11-08',
            fcierreproceso_contrato = '2020-11-07',
            modalidad_contrato = '7',
            tipo_contrato = '1',
            objeto_contrato = 'fffffffffffffff',
            estado2_contrato = '',

            conpro = '3'

        WHERE id_contrato = '48'

SQL .............>  (2020-10-05 16:37:20) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '48',
                        '2020-10-05 16:37:20',
                        '1'
                    );

SQL .............>  (2020-10-05 16:37:29) (Usuario: 1083459981)   UPDATE contratos 

                    SET plan_contrato = '75'

                    WHERE id_contrato = '48'

SQL .............>  (2020-10-05 16:37:29) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Relacionó un registro del Plan de Accion del 2020',
                        '48',
                        '2020-10-05 16:37:29',
                        '1'
                    );

SQL .............>  (2020-10-05 16:41:14) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 3',
            valproceso_contrato = '15000000',
            favisoproceso_contrato = '2020-10-07',
            fevaluacionproceso_contrato = '2020-10-16',
            fevaluacionproceso2_contrato = '2020-10-30',
            fadjudicacionproceso_contrato = '2020-11-08',
            fcierreproceso_contrato = '2020-11-07',
            modalidad_contrato = '7',
            tipo_contrato = '1',
            objeto_contrato = 'fffffffffffffff',
            estado2_contrato = '',

            conpro = '3'

        WHERE id_contrato = '48'

SQL .............>  (2020-10-05 18:10:44) (Usuario: 1083459981) INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '47',
                            '1',
                            '2020-10-05',
                            '120000'
                    );

SQL .............>  (2020-10-05 18:10:44) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha regitrado un pago a este contrato: Tipo de pago: ANTICIPO, Valor: $120.000',
                        '47',
                        '2020-10-05 18:10:44',
                        '1'
                    );

SQL .............>  (2020-10-05 18:11:08) (Usuario: 1083459981) DELETE FROM contratos_pagos WHERE id_pago = '20'

SQL .............>  (2020-10-05 18:11:08) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha eliminado un pago en este contrato por valor de : $120.000',
                        '47',
                        '2020-10-05 18:11:08',
                        '1'
                    );

SQL .............>  (2020-10-05 18:11:13) (Usuario: 1083459981) INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '47',
                            '1',
                            '2020-10-05',
                            '700000'
                    );

SQL .............>  (2020-10-05 18:11:13) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha regitrado un pago a este contrato: Tipo de pago: ANTICIPO, Valor: $700.000',
                        '47',
                        '2020-10-05 18:11:13',
                        '1'
                    );

SQL .............>  (2020-10-05 18:11:20) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '4'
                    WHERE id_contrato = '47'

SQL .............>  (2020-10-05 18:11:20) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Liquidado este contrato con No. de contrato: .',
                        '47',
                        '2020-10-05 18:11:20',
                        '1'
                    );

SQL .............>  (2020-10-05 18:15:05) (Usuario: 1083459981) INSERT INTO contratos (
                        numero_contrato,
                        valor_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        fechainicio_contrato,
                        fechafinal_contrato,
                        fechaliquidacion_contrato,
                        contratista_contrato,
                        objeto_contrato,
                        estado_contrato,
                        agncon,
                        concon
                            )
                    VALUES(
                        '2020 - 1',
                        '15000000',
                        '1',
                        '11',
                        '2020-10-08',
                        '2020-10-10',
                        '2020-10-21',
                        '2',
                        '777777777777',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-10-05 18:15:05) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '49',
                        '2020-10-05 18:15:05',
                        '1'
                    );

SQL .............>  (2020-10-05 18:40:00) (Usuario: 1083459981) INSERT INTO contratos (
                        numero_contrato,
                        valor_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        fechainicio_contrato,
                        fechafinal_contrato,
                        fechaliquidacion_contrato,
                        contratista_contrato,
                        objeto_contrato,
                        estado_contrato,
                        agncon,
                        concon
                            )
                    VALUES(
                        '2020 - 2',
                        '80000000',
                        '1',
                        '10',
                        '2020-10-06',
                        '2020-10-08',
                        '2020-10-10',
                        '1',
                        'ddddddddddddddddddd',
                        '3',
                        '2020',
                        '2'
                    );

SQL .............>  (2020-10-05 18:40:00) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '50',
                        '2020-10-05 18:40:00',
                        '1'
                    );

SQL .............>  (2020-10-05 18:42:25) (Usuario: 1083459981)   UPDATE contratos 

                SET contratista_contrato = '1',
                    tipo_contrato = '10',
                    objeto_contrato = 'ddddddddddddddddddd',
                    estado2_contrato = '1',

                    numero_contrato = '2020 - 2',
                    valor_contrato = '80000000',
                    fecha_contrato = '2020-10-05',
                    fechainicio_contrato = '2020-10-06',
                    fechafinal_contrato = '2020-10-08',
                    fechaliquidacion_contrato = '2020-10-10'

                WHERE id_contrato = '50'

SQL .............>  (2020-10-05 18:42:26) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Contrato',
                        '1',
                        '2020-10-05 18:42:26',
                        '1'
                    );

SQL .............>  (2020-10-05 18:43:21) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'rrrrrrrrrrrrrrrrrrrrrr',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 18:43:21) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '51',
                        '2020-10-05 18:43:21',
                        '1'
                    );

SQL .............>  (2020-10-05 19:06:22) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 19:06:22',
                        '1'
                    );

SQL .............>  (2020-10-05 19:35:24) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 19:35:24',
                        '1'
                    );

SQL .............>  (2020-10-05 19:37:45) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 19:37:45',
                        '1'
                    );

SQL .............>  (2020-10-05 19:40:37) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 19:40:37',
                        '1'
                    );

SQL .............>  (2020-10-05 19:42:27) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 19:42:27',
                        '1'
                    );

SQL .............>  (2020-10-05 19:55:52) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 19:55:52',
                        '1'
                    );

SQL .............>  (2020-10-05 19:56:26) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 19:56:26',
                        '1'
                    );

SQL .............>  (2020-10-05 19:59:07) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 19:59:07',
                        '1'
                    );

SQL .............>  (2020-10-05 20:00:27) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:00:27',
                        '1'
                    );

SQL .............>  (2020-10-05 20:03:41) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:03:41',
                        '1'
                    );

SQL .............>  (2020-10-05 20:04:56) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:04:56',
                        '1'
                    );

SQL .............>  (2020-10-05 20:06:17) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:06:17',
                        '1'
                    );

SQL .............>  (2020-10-05 20:08:29) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:08:29',
                        '1'
                    );

SQL .............>  (2020-10-05 20:10:22) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:10:22',
                        '1'
                    );

SQL .............>  (2020-10-05 20:10:49) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:10:49',
                        '1'
                    );

SQL .............>  (2020-10-05 20:14:21) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:14:21',
                        '1'
                    );

SQL .............>  (2020-10-05 20:15:49) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:15:49',
                        '1'
                    );

SQL .............>  (2020-10-05 20:18:15) (Usuario: 1083459981) DELETE FROM contratistas WHERE id_contratista = '228'

SQL .............>  (2020-10-05 20:18:18) (Usuario: 1083459981) DELETE FROM contratistas WHERE id_contratista = '229'

SQL .............>  (2020-10-05 20:20:11) (Usuario: 1083459981) DELETE FROM supervisores WHERE id_supervisor = '13'

SQL .............>  (2020-10-05 20:20:22) (Usuario: 1083459981) DELETE FROM encargados WHERE id_encargado = '14'

SQL .............>  (2020-10-05 20:20:25) (Usuario: 1083459981) DELETE FROM encargados WHERE id_encargado = '13'

SQL .............>  (2020-10-05 20:22:58) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Enviado una Copia del Contrato No. :  por correo al contratista este contrato con .',
                        '46',
                        '2020-10-05 20:22:58',
                        '1'
                    );

SQL .............>  (2020-10-05 20:23:14) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'ftghrthtrh',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-10-05 20:23:14) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '52',
                        '2020-10-05 20:23:14',
                        '1'
                    );

SQL .............>  (2020-10-05 20:23:46) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020 - 1',
            valproceso_contrato = '7777000',
            favisoproceso_contrato = '2020-10-15',
            fevaluacionproceso_contrato = '2020-10-16',
            fevaluacionproceso2_contrato = '2020-10-24',
            fadjudicacionproceso_contrato = '2020-10-31',
            fcierreproceso_contrato = '2020-10-24',
            modalidad_contrato = '2',
            tipo_contrato = '14',
            objeto_contrato = 'ftghrthtrh',
            estado2_contrato = '1',

            conpro = '1'

        WHERE id_contrato = '52'

SQL .............>  (2020-10-05 20:23:46) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '52',
                        '2020-10-05 20:23:46',
                        '1'
                    );

SQL .............>  (2020-10-05 20:23:55) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '52'

SQL .............>  (2020-10-05 20:23:55) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '52',
                        '2020-10-05 20:23:55',
                        '1'
                    );

SQL .............>  (2020-10-05 20:24:44) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '2020 - 1',
                        fecha_contrato = '2020-10-05',
                        fechainicio_contrato = '2020-10-08',
                        fechafinal_contrato = '2020-10-23',
                        fechaliquidacion_contrato = '2020-10-31',
                        valor_contrato = '7777900',
                        concon = '1'

                    WHERE id_contrato = '52'

SQL .............>  (2020-10-05 20:24:44) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el 2020-10-08 hasta el 2020-10-23',
                        '52',
                        '2020-10-05 20:24:44',
                        '1'
                    );

SQL .............>  (2020-10-05 20:25:07) (Usuario: 1083459981) INSERT INTO contratos_ajustes (
                            contrato_ajuste,
                            tipo_ajuste,
                            fecha_ajuste,
                            valor_ajuste
                            )
                    VALUES(
                            '52',
                            '1',
                            '2020-10-09',
                            '7000'
                    );

SQL .............>  (2020-10-05 20:25:17) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Adjuntado un documento a éste contrato',
                        '52',
                        '2020-10-05 20:25:17',
                        '1'
                    );

SQL .............>  (2020-10-05 20:25:25) (Usuario: 1083459981) INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '52',
                            '1',
                            '2020-10-05',
                            '500000'
                    );

SQL .............>  (2020-10-05 20:25:25) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha regitrado un pago a este contrato: Tipo de pago: ANTICIPO, Valor: $500.000',
                        '52',
                        '2020-10-05 20:25:25',
                        '1'
                    );

SQL .............>  (2020-10-05 20:26:30) (Usuario: 1083459981) INSERT INTO contratos_prorrogas (
                            contrato_prorroga,
                            fecha_prorroga,
                            dias_prorroga
                            )
                    VALUES(
                            '52',
                            '2020-10-05 20:26:30',
                            '33'
                    );

SQL .............>  (2020-10-05 20:26:35) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '12',
                        '52'
                    );

SQL .............>  (2020-10-05 20:26:35) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a ANA ISABEL  OROZCO CONTRERAS cómo Encargado de éste Proceso',
                        '52',
                        '2020-10-05 20:26:35',
                        '1'
                    );

SQL .............>  (2020-10-05 20:32:58) (Usuario: 1083459981) UPDATE contratos SET estado_contrato = '6' WHERE id_contrato = '52'

SQL .............>  (2020-10-05 20:33:04) (Usuario: 1083459981) UPDATE contratos SET estado_contrato = '6' WHERE id_contrato = '50'

SQL .............>  (2020-10-05 20:34:40) (Usuario: 1083459981) UPDATE contratos SET estado_contrato = '6' WHERE id_contrato = '51'
