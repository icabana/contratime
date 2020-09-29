
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
