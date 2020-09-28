
SQL .............>  (2020-09-26 00:04:02) (Usuario: 1083459981)   UPDATE planes_detalles 
                
                    SET codigos_detalle = '14111704    5313160814111703    4713180347131603',
                        descripcion_detalle = 'Suministro de elementos de aseo y cafeteria para las diferentes oficinas de la ESSMAR ',
                        fechainicio_detalle = 'Marzo',
                        meses_detalle = '10 Meses',
                        modalidad_detalle = '5',
                        fuente_detalle = '1',
                        valtotal_detalle = '100000000',
                        valactual_detalle = '100000000',
                        futuras_detalle = 'NO',
                        estadofuturas_detalle = 'N/A',
                        contacto_detalle = '11'
        
                    WHERE id_detalle = '23'

SQL .............>  (2020-09-26 00:04:02) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = (select sum(valactual_detalle) from planes_detalles where plan_detalle = '13')

                WHERE id_plan = '13'

SQL .............>  (2020-09-26 01:55:12) (Usuario: 1083459981) INSERT INTO contratos (
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
                        estado_contrato,
                        agncon,
                        concon
                            )
                    VALUES(
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '1',
                        '6',
                        'bdfbdfb',
                        '1',
                        '2020',
                        ''
                    );

SQL .............>  (2020-09-26 01:55:12) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '26',
                        '2020-09-26 01:55:12',
                        '1'
                    );

SQL .............>  (2020-09-26 02:01:16) (Usuario: 1083459981) INSERT INTO contratos (
                        numero_contrato,
                        valor_contrato,
                        modalidad_contrato,
                        tipo_contrato,
                        fechainicio_contrato,
                        fechafinal_contrato,
                        objeto_contrato,
                        estado_contrato,
                        agncon,
                        concon
                            )
                    VALUES(
                        '2020 - 1',
                        '1800000',
                        '1',
                        '6',
                        '2020-09-26',
                        '2020-12-25',
                        '1',
                        '1',
                        '2020',
                        'bdfbfdbdbdfb'
                    );

SQL .............>  (2020-09-26 02:01:16) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '27',
                        '2020-09-26 02:01:16',
                        '1'
                    );

SQL .............>  (2020-09-26 02:05:10) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '15000000',
                        '1',
                        '6',
                        '2020-09-10',
                        '2020-10-11',
                        '1',
                        'svdsvsdv',
                        '1',
                        '2020',
                        ''
                    );

SQL .............>  (2020-09-26 02:05:10) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '28',
                        '2020-09-26 02:05:10',
                        '1'
                    );

SQL .............>  (2020-09-26 02:05:16) (Usuario: 1083459981) UPDATE contratos SET estado_contrato = '6' WHERE id_contrato = '27'

SQL .............>  (2020-09-26 02:10:21) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '1800000',
                        '1',
                        '6',
                        '2020-09-26',
                        '2020-12-26',
                        '1',
                        'fhthrththrthrt',
                        '3',
                        '2020',
                        ''
                    );

SQL .............>  (2020-09-26 02:10:21) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '1',
                        '2020-09-26 02:10:21',
                        '1'
                    );

SQL .............>  (2020-09-26 02:11:34) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '15000000',
                        '1',
                        '2',
                        '2020-09-12',
                        '2020-10-02',
                        '1',
                        'wegwgegege',
                        '3',
                        '2020',
                        ''
                    );

SQL .............>  (2020-09-26 02:11:35) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '2',
                        '2020-09-26 02:11:35',
                        '1'
                    );

SQL .............>  (2020-09-26 02:20:37) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '1800000',
                        '1',
                        '6',
                        '2020-09-05',
                        '2020-09-20',
                        '1',
                        'wefefefewfe',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:20:37) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '3',
                        '2020-09-26 02:20:37',
                        '1'
                    );

SQL .............>  (2020-09-26 02:21:33) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '1800000',
                        '1',
                        '1',
                        '2020-09-26',
                        '2020-10-04',
                        '2',
                        'bdfbdfbdbfdbdf',
                        '3',
                        '2020',
                        ''
                    );

SQL .............>  (2020-09-26 02:21:34) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '1',
                        '2020-09-26 02:21:34',
                        '1'
                    );

SQL .............>  (2020-09-26 02:24:23) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '80000000',
                        '1',
                        '6',
                        '2020-09-13',
                        '2020-10-04',
                        '1',
                        'dbfdb',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:24:23) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '2',
                        '2020-09-26 02:24:23',
                        '1'
                    );

SQL .............>  (2020-09-26 02:24:56) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '15000000',
                        '1',
                        '6',
                        '2020-09-12',
                        '2020-10-03',
                        '1',
                        'sfsef',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:24:56) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '3',
                        '2020-09-26 02:24:56',
                        '1'
                    );

SQL .............>  (2020-09-26 02:27:03) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '15000000',
                        '1',
                        '6',
                        '2020-09-06',
                        '2020-10-03',
                        '1',
                        'RGERG',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:27:03) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '4',
                        '2020-09-26 02:27:03',
                        '1'
                    );

SQL .............>  (2020-09-26 02:28:39) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '15000000',
                        '1',
                        '6',
                        '2020-09-04',
                        '2020-10-02',
                        '1',
                        'fregrge',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:28:39) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '5',
                        '2020-09-26 02:28:39',
                        '1'
                    );

SQL .............>  (2020-09-26 02:29:52) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '15000000',
                        '1',
                        '6',
                        '2020-09-03',
                        '2020-09-27',
                        '2',
                        'fwefewefefwef',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:29:52) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '6',
                        '2020-09-26 02:29:52',
                        '1'
                    );

SQL .............>  (2020-09-26 02:30:36) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '80000000',
                        '1',
                        '6',
                        '2020-09-05',
                        '2020-10-04',
                        '1',
                        'vffvdfv',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:30:36) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '7',
                        '2020-09-26 02:30:36',
                        '1'
                    );

SQL .............>  (2020-09-26 02:31:38) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '15000000',
                        '1',
                        '6',
                        '2020-09-12',
                        '2020-09-27',
                        '2',
                        'dsdvvsdvdv',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:31:38) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '8',
                        '2020-09-26 02:31:38',
                        '1'
                    );

SQL .............>  (2020-09-26 02:31:48) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '1800000',
                        '1',
                        '6',
                        '2020-09-04',
                        '2020-09-27',
                        '1',
                        'efewffe',
                        '3',
                        '2020',
                        '2'
                    );

SQL .............>  (2020-09-26 02:31:49) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '9',
                        '2020-09-26 02:31:49',
                        '1'
                    );

SQL .............>  (2020-09-26 02:33:58) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 1',
                        '1800000',
                        '1',
                        '6',
                        '2020-09-04',
                        '2020-09-27',
                        '1',
                        'dvsvsdvsd',
                        '3',
                        '2020',
                        '1'
                    );

SQL .............>  (2020-09-26 02:33:58) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '10',
                        '2020-09-26 02:33:58',
                        '1'
                    );

SQL .............>  (2020-09-26 02:34:09) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 2',
                        '80000000',
                        '1',
                        '6',
                        '2020-09-13',
                        '2020-10-03',
                        '1',
                        'svsdvsdvsvdv',
                        '3',
                        '2020',
                        '2'
                    );

SQL .............>  (2020-09-26 02:34:10) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '11',
                        '2020-09-26 02:34:10',
                        '1'
                    );

SQL .............>  (2020-09-26 02:35:35) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '2020 - 3',
                        '80000000',
                        '1',
                        '6',
                        '2020-09-05',
                        '2020-12-11',
                        '1',
                        'dfsfsf',
                        '3',
                        '2020',
                        '3'
                    );

SQL .............>  (2020-09-26 02:35:35) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el contrato por primera vez, con estado Convocado',
                        '12',
                        '2020-09-26 02:35:35',
                        '1'
                    );

SQL .............>  (2020-09-26 11:26:27) (Usuario: 1083459981)   UPDATE contratos 

                SET numproceso_contrato = '',
                    valproceso_contrato = '',
                    favisoproceso_contrato = '',
                    fevaluacionproceso_contrato = '',
                    fevaluacionproceso2_contrato = '',
                    fadjudicacionproceso_contrato = '',
                    fcierreproceso_contrato = '',
                    modalidad_contrato = 'ContrataciÃ³n Directa',
                    contratista_contrato = '1',
                    tipo_contrato = '2',
                    objeto_contrato = 'dvsvsdvsd',

                    numero_contrato = '2020 - 1',
                    valor_contrato = '1800000',
                    fechainicio_contrato = '2020-09-04',
                    fechafinal_contrato = '2020-09-27'

                WHERE id_contrato = '10'

SQL .............>  (2020-09-26 11:35:01) (Usuario: 1083459981)   UPDATE contratos 

                SET contratista_contrato = '1',
                    tipo_contrato = '6',
                    objeto_contrato = 'dvsvsdvsd',

                    numero_contrato = '2020 - 1',
                    valor_contrato = '567000',
                    fechainicio_contrato = '2020-09-04',
                    fechafinal_contrato = '2020-09-27'

                WHERE id_contrato = '10'

SQL .............>  (2020-09-26 11:45:13) (Usuario: 1083459981)   UPDATE contratos 

                SET contratista_contrato = '1',
                    tipo_contrato = '6',
                    objeto_contrato = 'svsdvsdvsvdv',

                    numero_contrato = '2020 - 2',
                    valor_contrato = '80000000',
                    fechainicio_contrato = '2020-09-13',
                    fechafinal_contrato = '2020-10-09'

                WHERE id_contrato = '11'

SQL .............>  (2020-09-26 11:45:27) (Usuario: 1083459981)   UPDATE contratos 

                SET contratista_contrato = '1',
                    tipo_contrato = '6',
                    objeto_contrato = 'svsdvsdvsvdv',

                    numero_contrato = '2020 - 2',
                    valor_contrato = '80000000',
                    fechainicio_contrato = '2020-09-13',
                    fechafinal_contrato = '2020-10-07'

                WHERE id_contrato = '11'

SQL .............>  (2020-09-26 11:58:01) (Usuario: 1083459981) INSERT INTO contratos (
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
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '',
                        '3',
                        '2020',
                        ''
                    );

SQL .............>  (2020-09-26 12:02:48) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'egrerg',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-09-26 12:02:48) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '14',
                        '2020-09-26 12:02:48',
                        '1'
                    );

SQL .............>  (2020-09-26 14:05:49) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '9',
                        '14'
                    );

SQL .............>  (2020-09-26 14:05:49) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a Camila Gonzalez ty cómo Encargado de éste Proceso',
                        '14',
                        '2020-09-26 14:05:49',
                        '1'
                    );

SQL .............>  (2020-09-26 14:18:02) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = '0001',
                        valproceso_contrato = '15000000',
                        favisoproceso_contrato = '2020-09-05',
                        fevaluacionproceso_contrato = '2020-09-26',
                        fevaluacionproceso2_contrato = '2020-09-26',
                        fadjudicacionproceso_contrato = '2020-09-18',
                        fcierreproceso_contrato = '2020-09-25',
                        modalidad_contrato = '1',
                        tipo_contrato = '6',
                        objeto_contrato = 'egrerg',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = ''

                    WHERE id_contrato = '14'

SQL .............>  (2020-09-26 14:18:49) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'rergerge',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-09-26 14:18:49) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '15',
                        '2020-09-26 14:18:49',
                        '1'
                    );

SQL .............>  (2020-09-26 14:23:04) (Usuario: 1083459981) INSERT INTO contratos (                     
                        objeto_contrato,
                        estado_contrato,
                        agncon
                            )
                    VALUES(                      
                        'vdfvfdb',
                        '1',
                        '2020'
                    );

SQL .............>  (2020-09-26 14:23:04) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Registró el Proceso por primera vez, con estado Convocado',
                        '16',
                        '2020-09-26 14:23:04',
                        '1'
                    );

SQL .............>  (2020-09-26 14:23:15) (Usuario: 1083459981) INSERT INTO contratos_encargados (
                        encargado_encargado,
                        contrato_encargado
                            )
                    VALUES(
                        '9',
                        '15'
                    );

SQL .............>  (2020-09-26 14:23:15) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Se Asoció a Camila Gonzalez ty cómo Encargado de éste Proceso',
                        '15',
                        '2020-09-26 14:23:15',
                        '1'
                    );

SQL .............>  (2020-09-26 14:24:24) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = '0001',
                        valproceso_contrato = '15000000',
                        favisoproceso_contrato = '2020-09-27',
                        fevaluacionproceso_contrato = '2020-10-01',
                        fevaluacionproceso2_contrato = '2020-10-11',
                        fadjudicacionproceso_contrato = '2020-10-11',
                        fcierreproceso_contrato = '2020-11-12',
                        modalidad_contrato = '7',
                        tipo_contrato = '6',
                        objeto_contrato = 'rergerge',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = ''

                    WHERE id_contrato = '15'

SQL .............>  (2020-09-26 14:31:41) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = '0001',
                        valproceso_contrato = '15000000',
                        favisoproceso_contrato = '2020-09-05',
                        fevaluacionproceso_contrato = '2020-09-26',
                        fevaluacionproceso2_contrato = '2020-09-26',
                        fadjudicacionproceso_contrato = '2020-09-18',
                        fcierreproceso_contrato = '2020-10-03',
                        modalidad_contrato = '1',
                        tipo_contrato = '6',
                        objeto_contrato = 'egrerg',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = ''

                    WHERE id_contrato = '14'

SQL .............>  (2020-09-26 14:31:41) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '1',
                        '2020-09-26 14:31:41',
                        '1'
                    );

SQL .............>  (2020-09-26 14:36:56) (Usuario: 1083459981)   UPDATE contratos 

                    SET numproceso_contrato = '0001',
                        valproceso_contrato = '15000000',
                        favisoproceso_contrato = '2020-09-05',
                        fevaluacionproceso_contrato = '2020-09-26',
                        fevaluacionproceso2_contrato = '2020-09-26',
                        fadjudicacionproceso_contrato = '2020-09-18',
                        fcierreproceso_contrato = '2020-10-03',
                        modalidad_contrato = '2',
                        tipo_contrato = '6',
                        objeto_contrato = 'egrerg',

                        numero_contrato = '',
                        valor_contrato = '',
                        fechainicio_contrato = '',
                        fechafinal_contrato = ''

                    WHERE id_contrato = '14'

SQL .............>  (2020-09-26 14:36:57) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '14',
                        '2020-09-26 14:36:57',
                        '1'
                    );
