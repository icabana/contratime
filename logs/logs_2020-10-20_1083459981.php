
SUCCESS ---------->  (2020-10-20 07:58:20) (Usuario: 1083459981) Inicio de SesiÃ³n correcto.

SQL .............>  (2020-10-20 08:07:24) (Usuario: 1083459981)   UPDATE contratos 

        SET numproceso_contrato = '2020-34',
            valproceso_contrato = '9000',
            favisoproceso_contrato = '2020-10-20',
            fevaluacionproceso_contrato = '2020-10-22',
            fevaluacionproceso2_contrato = '2020-10-23',
            fadjudicacionproceso_contrato = '2020-10-24',
            fcierreproceso_contrato = '2020-10-22',
            modalidad_contrato = '7',
            tipo_contrato = '1',
            objeto_contrato = 'aaa',
            estado2_contrato = '2',

            conpro = '1'

        WHERE id_contrato = '2'

SQL .............>  (2020-10-20 08:07:24) (Usuario: 1083459981) INSERT INTO contratos_trazabilidad (
                        accion_trazabilidad,
                        contrato_trazabilidad,
                        fecha_trazabilidad,
                        usuario_trazabilidad
                    )
                    VALUES(
                        'Modificó la información del Proceso',
                        '2',
                        '2020-10-20 08:07:24',
                        '1'
                    );

SQL .............>  (2020-10-20 08:07:56) (Usuario: 1083459981)   UPDATE modalidades 
                
                    SET nombre_modalidad = 'IDO',
                        tipo_modalidad = 'Proceso'
        
                    WHERE id_modalidad = '6'

SQL .............>  (2020-10-20 08:08:13) (Usuario: 1083459981)   UPDATE modalidades 
                
                    SET nombre_modalidad = 'MAYOR CUANTÍA',
                        tipo_modalidad = 'Proceso'
        
                    WHERE id_modalidad = '2'

SQL .............>  (2020-10-20 08:08:24) (Usuario: 1083459981)   UPDATE modalidades 
                
                    SET nombre_modalidad = 'MENOR CUANTÍA',
                        tipo_modalidad = 'Proceso'
        
                    WHERE id_modalidad = '5'

SQL .............>  (2020-10-20 08:08:35) (Usuario: 1083459981)   UPDATE modalidades 
                
                    SET nombre_modalidad = 'CONVENIOS',
                        tipo_modalidad = 'Proceso'
        
                    WHERE id_modalidad = '7'
