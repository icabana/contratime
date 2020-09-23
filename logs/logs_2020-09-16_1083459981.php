
SQL .............>  (2020-09-16 11:05:02) (Usuario: 1083459981) INSERT INTO planes (
                        ano_plan,
                        contacto_plan,
                        valor_plan
                    )
                    VALUES(
                        '2020',
                        'rg',
                        '0'
                    );

SQL .............>  (2020-09-16 11:12:38) (Usuario: 1083459981) INSERT INTO planes (
                        ano_plan,
                        contacto_plan,
                        valor_plan
                    )
                    VALUES(
                        '2020',
                        'JOSE RODRIGO DAJUD',
                        '0'
                    );

SQL .............>  (2020-09-16 11:12:46) (Usuario: 1083459981)   UPDATE planes 
                
                    SET ano_plan = '',
                        contacto_plan = 'JOSE RODRIGO DAJUD 777',
                        valor_plan = '0'
        
                    WHERE id_plan = '12'

SQL .............>  (2020-09-16 11:12:51) (Usuario: 1083459981)   UPDATE planes 
                
                    SET ano_plan = '',
                        contacto_plan = 'JOSE RODRIGO DAJUD',
                        valor_plan = '0'
        
                    WHERE id_plan = '12'

SQL .............>  (2020-09-16 11:13:49) (Usuario: 1083459981) INSERT INTO planes (
                        ano_plan,
                        contacto_plan,
                        valor_plan
                    )
                    VALUES(
                        '2020',
                        'JOSE RODRIGO DAJUD',
                        '0'
                    );

SQL .............>  (2020-09-16 11:13:54) (Usuario: 1083459981)   UPDATE planes 
                
                    SET contacto_plan = 'JOSE RODRIGO DAJUD 777'
        
                    WHERE id_plan = '13'

SQL .............>  (2020-09-16 11:13:58) (Usuario: 1083459981)   UPDATE planes 
                
                    SET contacto_plan = 'JOSE RODRIGO DAJUD'
        
                    WHERE id_plan = '13'

SQL .............>  (2020-09-16 11:14:38) (Usuario: 1083459981) INSERT INTO planes_detalles (
                        plan_detalle,
                        codigos_detalle,
                        descripcion_detalle,
                        fechainicio_detalle,
                        meses_detalle,
                        modalidad_detalle,
                        fuente_detalle,
                        valtotal_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle
                    )
                    VALUES(
                        '13',
                        '777,99,544343',
                        'aaaaaaaaaaaaaaaaaaaaa',
                        'Abril',
                        '5',
                        '1',
                        '8',
                        '700000',
                        'NO',
                        'Pendiente',
                        '6'
                    );

SQL .............>  (2020-09-16 11:26:31) (Usuario: 1083459981) DELETE 
                    FROM planes_detalles 
                    WHERE id_detalle = '12'

SQL .............>  (2020-09-16 11:33:05) (Usuario: 1083459981) INSERT INTO planes_detalles (
                        plan_detalle,
                        codigos_detalle,
                        descripcion_detalle,
                        fechainicio_detalle,
                        meses_detalle,
                        modalidad_detalle,
                        fuente_detalle,
                        valtotal_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle
                    )
                    VALUES(
                        '13',
                        '777,99,544343',
                        'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr',
                        'Febrero',
                        '5',
                        '8',
                        '4',
                        '700000',
                        'SI',
                        'Pendiente',
                        '2'
                    );

SQL .............>  (2020-09-16 11:33:05) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = valor_plan + 700000

                WHERE id_plan = '13'

SQL .............>  (2020-09-16 11:34:18) (Usuario: 1083459981) INSERT INTO planes_detalles (
                        plan_detalle,
                        codigos_detalle,
                        descripcion_detalle,
                        fechainicio_detalle,
                        meses_detalle,
                        modalidad_detalle,
                        fuente_detalle,
                        valtotal_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle
                    )
                    VALUES(
                        '13',
                        '777,99,544343',
                        'hh',
                        'Enero',
                        '5',
                        '8',
                        '4',
                        '400000',
                        'SI',
                        'Pendiente',
                        '9'
                    );

SQL .............>  (2020-09-16 11:34:18) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = valor_plan + 400000

                WHERE id_plan = '13'

SQL .............>  (2020-09-16 11:34:43) (Usuario: 1083459981) INSERT INTO planes_detalles (
                        plan_detalle,
                        codigos_detalle,
                        descripcion_detalle,
                        fechainicio_detalle,
                        meses_detalle,
                        modalidad_detalle,
                        fuente_detalle,
                        valtotal_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle
                    )
                    VALUES(
                        '13',
                        '777,99,544343',
                        'tt',
                        'Julio',
                        '5',
                        '8',
                        '4',
                        '250000',
                        'SI',
                        'N/A',
                        '9'
                    );

SQL .............>  (2020-09-16 11:34:43) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = valor_plan + 250000

                WHERE id_plan = '13'

SQL .............>  (2020-09-16 11:34:49) (Usuario: 1083459981) DELETE 
                    FROM planes_detalles 
                    WHERE id_detalle = '14'

SQL .............>  (2020-09-16 11:34:49) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = valor_plan - 

                WHERE id_plan = '13'

SQL .............>  (2020-09-16 11:35:47) (Usuario: 1083459981) DELETE 
                    FROM planes_detalles 
                    WHERE id_detalle = '13'

SQL .............>  (2020-09-16 11:35:47) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = valor_plan - 700000

                WHERE id_plan = '13'

SQL .............>  (2020-09-16 11:47:05) (Usuario: 1083459981) INSERT INTO planes_detalles (
                        plan_detalle,
                        codigos_detalle,
                        descripcion_detalle,
                        fechainicio_detalle,
                        meses_detalle,
                        modalidad_detalle,
                        fuente_detalle,
                        valtotal_detalle,
                        futuras_detalle,
                        estadofuturas_detalle,
                        contacto_detalle
                    )
                    VALUES(
                        '13',
                        '777,99,544343',
                        'dd',
                        'Marzo',
                        '2',
                        '8',
                        '4',
                        '400000',
                        'NO',
                        'N/A',
                        '9'
                    );

SQL .............>  (2020-09-16 11:47:05) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = valor_plan + 400000

                WHERE id_plan = '13'

SQL .............>  (2020-09-16 11:47:14) (Usuario: 1083459981) DELETE 
                    FROM planes_detalles 
                    WHERE id_detalle = '15'

SQL .............>  (2020-09-16 11:47:14) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = valor_plan - 250000

                WHERE id_plan = '13'
