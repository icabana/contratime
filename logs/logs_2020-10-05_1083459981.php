
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
                        'ModificÛ la informaciÛn del Contrato',
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
                        'ModificÛ la informaciÛn del Contrato',
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
                        'Se RelacionÛ un registro del Plan de Accion del 2020',
                        '38',
                        '2020-10-05 00:19:16',
                        '1'
                    );

SUCCESS ---------->  (2020-10-05 00:28:12) (Usuario: 1083459981) Se cerr√≥ la Sesi√≥n de forma correcta.

SUCCESS ---------->  (2020-10-05 00:28:17) (Usuario: 1083459981) Inicio de Sesi√≥n correcto.

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

SUCCESS ---------->  (2020-10-05 00:30:21) (Usuario: 1083459981) Se cerr√≥ la Sesi√≥n de forma correcta.

SUCCESS ---------->  (2020-10-05 00:30:26) (Usuario: 1083459981) Inicio de Sesi√≥n correcto.
