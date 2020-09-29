
SUCCESS ---------->  (2020-09-28 14:18:45) (Usuario: 123456789) Inicio de Sesión correcto.

SUCCESS ---------->  (2020-09-28 14:22:31) (Usuario: 123456789) Se cerró la Sesión de forma correcta.

SUCCESS ---------->  (2020-09-28 17:40:59) (Usuario: 123456789) Inicio de Sesión correcto.

SQL .............>  (2020-09-28 17:41:41) (Usuario: 123456789) INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '29',
                            '1',
                            '2020-09-28',
                            '350000'
                    );

SQL .............>  (2020-09-28 17:41:42) (Usuario: 123456789) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha regitrado un pago a este contrato: Tipo de pago: ANTICIPO, Valor: $350.000',
                        '29',
                        '2020-09-28 17:41:42',
                        '9'
                    );

SQL .............>  (2020-09-28 17:41:55) (Usuario: 123456789) INSERT INTO contratos_pagos (
                            contrato_pago,
                            tipo_pago,
                            fecha_pago, 
                            valor_pago
                            )
                    VALUES(
                            '29',
                            '2',
                            '2020-09-29',
                            '150000'
                    );

SQL .............>  (2020-09-28 17:41:55) (Usuario: 123456789) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se ha regitrado un pago a este contrato: Tipo de pago: PAGO PARCIAL, Valor: $150.000',
                        '29',
                        '2020-09-28 17:41:55',
                        '9'
                    );

SUCCESS ---------->  (2020-09-28 17:42:57) (Usuario: 123456789) Se cerró la Sesión de forma correcta.
