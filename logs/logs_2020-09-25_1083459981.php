
SUCCESS ---------->  (2020-09-25 16:57:59) (Usuario: 1083459981) Inicio de Sesión correcto.

SQL .............>  (2020-09-25 22:51:11) (Usuario: 1083459981) INSERT INTO modalidades (
                        nombre_modalidad,
                        tipo_modalidad
                    )
                    VALUES(
                        'grrgrg',
                        'Contrato'
                    );

SQL .............>  (2020-09-25 22:51:21) (Usuario: 1083459981)   UPDATE modalidades 
                
                    SET nombre_modalidad = 'grrgrg4444444444',
                        tipo_modalidad = 'Proceso'
        
                    WHERE id_modalidad = '10'

SQL .............>  (2020-09-25 23:29:55) (Usuario: 1083459981)   UPDATE planes_detalles 
                
                    SET codigos_detalle = '3911160339111616',
                        descripcion_detalle = 'Alumbrado Navide?o;Diciembre',
                        fechainicio_detalle = 'Enero',
                        meses_detalle = '2',
                        modalidad_detalle = '1',
                        fuente_detalle = '4',
                        valtotal_detalle = '1600000000',
                        valactual_detalle = '1600000000',
                        futuras_detalle = 'SI',
                        estadofuturas_detalle = 'N/A',
                        contacto_detalle = '11'
        
                    WHERE id_detalle = '109'

SQL .............>  (2020-09-25 23:29:55) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = (select sum(valactual_detalle) from planes_detalles where plan_detalle = '13')

                WHERE id_plan = '13'

SQL .............>  (2020-09-25 23:31:05) (Usuario: 1083459981)   UPDATE planes_detalles 
                
                    SET codigos_detalle = '43231505',
                        descripcion_detalle = 'Alquiler de una herramienta t?cnologica - software y su respectivo funcionamiento, para llevar a cabo los procesos y/o diagnosticos a trav?s de la evaluaci?n de competencias generales',
                        fechainicio_detalle = 'Mayo',
                        meses_detalle = '1 A?o;1',
                        modalidad_detalle = '1',
                        fuente_detalle = '4',
                        valtotal_detalle = '4165000',
                        valactual_detalle = '4165000',
                        futuras_detalle = 'SI',
                        estadofuturas_detalle = 'N/A',
                        contacto_detalle = '11'
        
                    WHERE id_detalle = '38'

SQL .............>  (2020-09-25 23:31:05) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = (select sum(valactual_detalle) from planes_detalles where plan_detalle = '13')

                WHERE id_plan = '13'

SQL .............>  (2020-09-25 23:32:43) (Usuario: 1083459981)   UPDATE planes_detalles 
                
                    SET codigos_detalle = '41112504',
                        descripcion_detalle = 'Suministro e Instalaci?n de macromedidores de 10" y 6" para las tuber?as de salidas y de distribuci?n de las Estaciones de Bombeo de Agua Potable a cargo de la ESSMAR ESP y de sectores hidraulicos de la red de distribuci?n";Octubre;3 Meses;5;1;410000000;410000000;NO;N/A;"Luis Alberto Delgado Lozano
Profesional de Servicios Administrativos
Tel: 4368358 ',
                        fechainicio_detalle = 'Enero',
                        meses_detalle = '5',
                        modalidad_detalle = '1',
                        fuente_detalle = '4',
                        valtotal_detalle = '11700760',
                        valactual_detalle = '11700760',
                        futuras_detalle = 'SI',
                        estadofuturas_detalle = 'N/A',
                        contacto_detalle = '11'
        
                    WHERE id_detalle = '104'

SQL .............>  (2020-09-25 23:32:43) (Usuario: 1083459981)   UPDATE planes 
            
                SET valor_plan = (select sum(valactual_detalle) from planes_detalles where plan_detalle = '13')

                WHERE id_plan = '13'
