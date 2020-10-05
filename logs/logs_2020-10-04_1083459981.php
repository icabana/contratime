
SUCCESS ---------->  (2020-10-04 20:10:42) (Usuario: 1083459981) Inicio de SesiÃ³n correcto.

SQL .............>  (2020-10-04 22:11:51) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Adjuntado un documento a éste contrato',
                        '37',
                        '2020-10-04 22:11:51',
                        '1'
                    );

SQL .............>  (2020-10-04 22:33:07) (Usuario: 1083459981) INSERT INTO contratos (
                        numero_contrato,
                        valor_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        fecha_contrato,
                        fechainicio_contrato,
                        fechafinal_contrato,
                        contratista_contrato,
                        objeto_contrato,
                        estado_contrato,
                        agncon,
                        concon
                            )
                    VALUES(
                        '2020 - 3',
                        '1800000',
                        '1',
                        '1',
                        '',
                        '2020-10-04',
                        '2020-10-31',
                        '1',
                        'csdvdsv',
                        '3',
                        '2020',
                        '3'
                    );

SQL .............>  (2020-10-04 22:33:07) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '39',
                        '2020-10-04 22:33:07',
                        '1'
                    );

SQL .............>  (2020-10-04 22:34:57) (Usuario: 1083459981) INSERT INTO contratos (
                        numero_contrato,
                        valor_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        fechainicio_contrato,
                        fechafinal_contrato,
                        contratista_contrato,
                        objeto_contrato,
                        estado_contrato,
                        agncon,
                        concon
                            )
                    VALUES(
                        '2020 - 4',
                        '15000000',
                        '1',
                        '1',
                        '2020-10-04',
                        '2020-10-17',
                        '1',
                        'ddddddddd',
                        '3',
                        '2020',
                        '4'
                    );

SQL .............>  (2020-10-04 22:34:57) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '40',
                        '2020-10-04 22:34:57',
                        '1'
                    );

SQL .............>  (2020-10-04 22:52:26) (Usuario: 1083459981)   UPDATE contratos 

                SET contratista_contrato = '1',
                    tipo_contrato = '1',
                    objeto_contrato = 'gggggggggggg',

                    numero_contrato = '2020 - 1',
                    valor_contrato = '1800000',
                    fecha_contrato = '2020-10-04',
                    fechainicio_contrato = '2020-09-04',
                    fechafinal_contrato = '2020-09-27',
                    fechaliquidacion_contrato = '2020-10-31'

                WHERE id_contrato = '35'

SQL .............>  (2020-10-04 22:52:26) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Contrato',
                        '1',
                        '2020-10-04 22:52:26',
                        '1'
                    );

SQL .............>  (2020-10-04 22:52:39) (Usuario: 1083459981)   UPDATE contratos 

                SET contratista_contrato = '1',
                    tipo_contrato = '1',
                    objeto_contrato = 'csdvdsv',

                    numero_contrato = '2020 - 3',
                    valor_contrato = '1800000',
                    fecha_contrato = '2020-10-04',
                    fechainicio_contrato = '2020-10-04',
                    fechafinal_contrato = '2020-10-31',
                    fechaliquidacion_contrato = '2020-11-07'

                WHERE id_contrato = '39'

SQL .............>  (2020-10-04 22:52:40) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Contrato',
                        '1',
                        '2020-10-04 22:52:40',
                        '1'
                    );

SQL .............>  (2020-10-04 23:36:13) (Usuario: 1083459981)   UPDATE contratos 
                    SET estado_contrato = '2', contratista_contrato = '1'
                    WHERE id_contrato = '37'

SQL .............>  (2020-10-04 23:36:13) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha realizado la Adjudicación de este contrato al Contratista: ISMAEL ANTONIO 
         CABANA MANG?.',
                        '37',
                        '2020-10-04 23:36:13',
                        '1'
                    );

SQL .............>  (2020-10-04 23:36:25) (Usuario: 1083459981)   UPDATE contratos 

                    SET estado_contrato = '3', 
                        numero_contrato = '2020 - 1',
                        fecha_contrato = '',
                        fechainicio_contrato = '2020-10-18',
                        fechafinal_contrato = '2020-10-31',
                        fechaliquidacion_contrato = '',
                        valor_contrato = '2222',
                        concon = '1'

                    WHERE id_contrato = '37'

SQL .............>  (2020-10-04 23:36:25) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha Celebrado este contrato, y se le ha asignado el No.: , cuya vigencia es desde el 2020-10-18 hasta el 2020-10-31',
                        '37',
                        '2020-10-04 23:36:25',
                        '1'
                    );
