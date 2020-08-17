
SQL .............>  (2020-08-17 00:04:19) (Usuario: 1083459981) INSERT INTO contratos_polizas (
                            contrato_poliza,
                            numero_poliza,
                            fechaexp_poliza, 
                            fechainicio_poliza, 
                            fechafinal_poliza
                            )
                    VALUES(
                            '22',
                            '33',
                            '2020-08-15',
                            '2020-08-22',
                            '2020-09-05'
                    );

SQL .............>  (2020-08-17 00:04:19) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha asociado la Poliza de GarantÌa No. 33 a Èste contrato',
                        '22',
                        '2020-08-17 00:04:19',
                        '1'
                    );

SQL .............>  (2020-08-17 00:04:33) (Usuario: 1083459981) INSERT INTO contratos_polizas (
                            contrato_poliza,
                            numero_poliza,
                            fechaexp_poliza, 
                            fechainicio_poliza, 
                            fechafinal_poliza
                            )
                    VALUES(
                            '22',
                            '3',
                            '2020-08-22',
                            '2020-08-08',
                            '2020-08-30'
                    );

SQL .............>  (2020-08-17 00:04:33) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha asociado la Poliza de GarantÌa No. 3 a Èste contrato',
                        '22',
                        '2020-08-17 00:04:33',
                        '1'
                    );

SQL .............>  (2020-08-17 00:04:36) (Usuario: 1083459981) DELETE FROM contratos_polizas 
                    WHERE id_poliza = '2'

SQL .............>  (2020-08-17 00:04:36) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha eliminado la asociacion de la Poliza de GarantÌa No.  en Èste contrato',
                        '22',
                        '2020-08-17 00:04:36',
                        '1'
                    );

SQL .............>  (2020-08-17 00:04:40) (Usuario: 1083459981) DELETE FROM contratos_polizas 
                    WHERE id_poliza = '3'

SQL .............>  (2020-08-17 00:04:40) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha eliminado la asociacion de la Poliza de GarantÌa No.  en Èste contrato',
                        '22',
                        '2020-08-17 00:04:40',
                        '1'
                    );

SQL .............>  (2020-08-17 00:04:42) (Usuario: 1083459981) DELETE FROM contratos_polizas 
                    WHERE id_poliza = '4'

SQL .............>  (2020-08-17 00:04:42) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha eliminado la asociacion de la Poliza de GarantÌa No.  en Èste contrato',
                        '22',
                        '2020-08-17 00:04:42',
                        '1'
                    );

SQL .............>  (2020-08-17 00:05:03) (Usuario: 1083459981) INSERT INTO contratos_polizas (
                            contrato_poliza,
                            numero_poliza,
                            fechaexp_poliza, 
                            fechainicio_poliza, 
                            fechafinal_poliza
                            )
                    VALUES(
                            '22',
                            '567',
                            '2020-08-08',
                            '2020-08-16',
                            '2020-08-23'
                    );

SQL .............>  (2020-08-17 00:05:03) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha asociado la Poliza de GarantÌa No. 567 a Èste contrato',
                        '22',
                        '2020-08-17 00:05:03',
                        '1'
                    );

SQL .............>  (2020-08-17 00:05:23) (Usuario: 1083459981) INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '22',
                            '1',
                            '2020-08-17',
                            '444'
                    );

SQL .............>  (2020-08-17 00:05:23) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha regitrado un pago a este contrato: Tipo de pago: ANTICIPO, Valor: $444',
                        '22',
                        '2020-08-17 00:05:23',
                        '1'
                    );

SQL .............>  (2020-08-17 00:05:27) (Usuario: 1083459981) DELETE FROM contratos_pagos WHERE id_pago = '8'

SQL .............>  (2020-08-17 00:05:27) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha eliminado un pago en este contrato por valor de : $333',
                        '22',
                        '2020-08-17 00:05:27',
                        '1'
                    );

SQL .............>  (2020-08-17 00:13:43) (Usuario: 1083459981)   UPDATE parametros             

                    SET nombre_parametro = 'correoalertas1', 
                        valor_parametro = 'ismael.cabana@gmail.com' 

                    WHERE id_parametro = '30'

SUCCESS ---------->  (2020-08-17 03:44:17) (Usuario: 1083459981) Se cerr√≥ la Sesi√≥n de forma correcta.

SUCCESS ---------->  (2020-08-17 03:44:33) (Usuario: 1083459981) Inicio de Sesi√≥n correcto.
