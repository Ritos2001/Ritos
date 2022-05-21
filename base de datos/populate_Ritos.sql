use Ritos;
#Tabla rol
INSERT IGNORE INTO rol(ID_rol, nombre) VALUES (1, "Cliente");
INSERT IGNORE INTO rol(ID_rol, nombre) VALUES (2, "Repartidor");
INSERT IGNORE INTO rol(ID_rol, nombre) VALUES (3, "Jefe");
INSERT IGNORE INTO rol(ID_rol, nombre) VALUES (4, "Mantenimiento");
INSERT IGNORE INTO rol(ID_rol, nombre) VALUES (5, "Vendedor");
INSERT IGNORE INTO rol(ID_rol, nombre) VALUES (6, "Almacén");
#tabla usuarios
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (1,2,"Sergio@gmail.com","Sergio","Sergio12","Lupo.007");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (2,2,null,"Tessa","Tessa18","Cuenca_12");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (3,2,"Alberto@gmail.com","Alberto","Alberto43","Alberto1997");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (4,3,"Elena@gmail.com","Elena","Elena1971","Elena_2001");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (5,4,null,"Carlos","Carlos2002","Carlos.10");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (6,4,"Pablo@gmail.com","Pablo","Pablo12","Pablo_21");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (7,5,null,"Aitana","Aitana24","Aitana.13");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (8,5,"Maria@gmail.com","Maria","Mariameida","AM.13");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (9,6,"Jorge@gmail.com","Jorge","Jorgito","Blanquita.12");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (10,6,"Maria@gmail.com","Maria","Marieta","Maria.2");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (11,1,null,"Ruben","Ruben28","Ruben_12");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (12,1,"Esperanza@gmail.com","Esperanza","Esperanza32","Esperanza_12");
INSERT IGNORE INTO usuario(ID_usuario,ID_rol,email,nombre,username,passwd) VALUES (12,2,"prueva@gmail.com","Prueva","Prueva.12","Lupo.007");
#tabla empleados
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (1,"Sergio","Martinez","664641223","24514246F",1);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (2,"Tessa","Cuenca","654023110","48435275C",2);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (3,"Alberto","Martinez","694642118","15724953G",3);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (4,"Elena","Aragon","682834685","46856423H",4);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (5,"Carlos","Muñoz","649523449","94682563L",5);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (6,"Pablo","Hernandez","654252452","58525625F",6);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (7,"Aitana","Verdu","692457826","57242542D",7);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (8,"Maria","Almeida","682562345","65782431T",8);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (9,"Jorge","Tapia","667252326","45264425T",9);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (10,"Maria","Diaz","652535554","95752546T",10);
INSERT IGNORE INTO empleado(ID_empleado,nombre,apellidos,telefono,DNI,ID_usuario) VALUES (12,"Prueva","Prueva","652535554","95752546T",12);
#tabla dirreciones
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (1,"C.Progreso,82 bajo","Casa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (2,"C.Reina,92 1r piso","Empresa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (3,"Av.Puerto,27 3r piso","Casa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (4,"Av.Blasco Ibañez,2 5r piso","Casa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (5,"C.Malilla,43 4r piso","Empresa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (6,"Av.la Plata,23 6r piso","Casa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (7,"C.Pizarro,90 1r piso","Casa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (8,"C.Ribera,102 3r piso","Casa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (9,"C.Quevedo,56 Baja","Empresa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (10,"C.Espartero,28 2r piso","Casa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (11,"C.Navarra,26 5r piso","Empresa");
INSERT IGNORE INTO direcciones(id_usuario,direccion,alias) VALUES (12,"C.Enguera,26 3r piso","Casa");
#tabla pedido
INSERT IGNORE INTO pedido(ID_pedido,ID_repartidor,ID_usuario,fecha_pedido,fecha_entrega,estado) VALUES (1,1,11,"2022-03-31",Null,"Ocupado");
INSERT IGNORE INTO pedido(ID_pedido,ID_repartidor,ID_usuario,fecha_pedido,fecha_entrega,estado) VALUES (2,2,12,"2022-03-28","2022-03-31","Ocupado");
#tabla productos
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(1,"Pan",0.90,"Vendible",10);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(2,"Pan de espelta",0.80,"Vendible",5);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(3,"Pan integral",0.95,"Vendible",20);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(4,"Pan de semillas",0.70,"Vendible",7);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(5,"Pan sin gluten",1.20,"Vendible",17);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(6,"Bandas de hojaldre",1.10,"Vendible",25);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(7,"Empanadillas",0.60,"Vendible",18);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(8,"Galletas saladas",1.50,"Vendible",30);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(9,"Napolitana de jamón",1.30,"Vendible",25);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(10,"Cruasán",1.20,"Vendible",13);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(11,"Magdalenas",1.30,"Vendible",40);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(12,"Rosquillas",1.45,"Vendible",30);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(13,"Saco de harina",10,"No Vendible",5);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(14,"Saco de levadura",29,"No Vendible",5);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(15,"Azúcar glas",25,"No Vendible",4);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(16,"Leche",4,"No Vendible",7);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(17,"Huevos",40,"No Vendible",17);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(18,"Sal",25,"No Vendible",5);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(19,"Coca-Cola",15,"Vendible",40);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(20,"Fanta",20,"Vendible",25);
INSERT IGNORE INTO producto (ID_producto,nombre,Precio,vendible,cantidad) VALUES(21,"Agua",25,"Vendible",30);

#tabla producto_pedido
INSERT IGNORE INTO producto_pedido (ID_Pedido,ID_producto,cantidad) VALUES(1,8,6);
INSERT IGNORE INTO producto_pedido (ID_Pedido,ID_producto,cantidad) VALUES(1,1,3);
INSERT IGNORE INTO producto_pedido (ID_Pedido,ID_producto,cantidad) VALUES(1,20,2);
INSERT IGNORE INTO producto_pedido (ID_Pedido,ID_producto,cantidad) VALUES(2,12,1);
INSERT IGNORE INTO producto_pedido (ID_Pedido,ID_producto,cantidad) VALUES(2,5,2);
INSERT IGNORE INTO producto_pedido (ID_Pedido,ID_producto,cantidad) VALUES(2,19,5);
#tabla proveedor
INSERT IGNORE INTO proveedor (ID_proveedor,nombre,telefono,Email,DNI) VALUES(1,"Panamar","659864775","panamar@gmail.com","52684595A");
INSERT IGNORE INTO proveedor (ID_proveedor,nombre,telefono,Email,DNI) VALUES(2,"Coca-Cola","675846991","cocacola@gmail.com","56813258F");
INSERT IGNORE INTO proveedor (ID_proveedor,nombre,telefono,Email,DNI) VALUES(3,"Todobebidas","669872554","todobebidas@gmail.com","68348695G");
INSERT IGNORE INTO proveedor (ID_proveedor,nombre,telefono,Email,DNI) VALUES(4,"Granjatucasa","693524881","granjatucasa@gmail.com","46857659H");
#tabla suministro
INSERT IGNORE INTO suministro (ID_suministro,fecha,fecha_entrega,ID_proveedor) VALUES(1,"2022-03-20","2022-04-12",1);
INSERT IGNORE INTO suministro (ID_suministro,fecha,fecha_entrega,ID_proveedor) VALUES(2,"2022-03-20","2022-04-1",2);
INSERT IGNORE INTO suministro (ID_suministro,fecha,fecha_entrega,ID_proveedor) VALUES(3,"2022-03-20","2022-04-13",3);
INSERT IGNORE INTO suministro (ID_suministro,fecha,fecha_entrega,ID_proveedor) VALUES(4,"2022-03-20",null,1);
INSERT IGNORE INTO suministro (ID_suministro,fecha,fecha_entrega,ID_proveedor) VALUES(5,"2022-03-20",null,1);
#tabla suministro_producto
INSERT IGNORE INTO suministro_producto (ID_producto,ID_suministro,cantidad) VALUES(13,1,3);
INSERT IGNORE INTO suministro_producto (ID_producto,ID_suministro,cantidad) VALUES(19,2,10);
INSERT IGNORE INTO suministro_producto (ID_producto,ID_suministro,cantidad) VALUES(20,3,5);
INSERT IGNORE INTO suministro_producto (ID_producto,ID_suministro,cantidad) VALUES(18,4,6);
INSERT IGNORE INTO suministro_producto (ID_producto,ID_suministro,cantidad) VALUES(14,5,2);