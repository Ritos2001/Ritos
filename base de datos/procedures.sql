use Ritos;
DELIMITER //
#procedimiento crear usuario
CREATE PROCEDURE crear_user (
IN var_nombre varchar(25),
IN var_usuario varchar(25),
IN var_contraseña varchar(25),
IN var_email varchar(25)
)
NOT DETERMINISTIC
begin
    INSERT INTO usuario(ID_rol,nombre,username,passwd,email) VALUES (1,var_nombre,var_usuario,
    var_contraseña,var_email);
end //
#procedimiento insertar vendedor
CREATE PROCEDURE insertar_producto (
IN var_nombre varchar(25),
IN var_precio varchar(25),
IN var_cantidad varchar(25),
IN var_vendible varchar(25)
)
NOT DETERMINISTIC
begin
	insert into producto (nombre,precio,cantidad,vendible) values (var_nombre,var_precio,var_cantidad,var_vendible);
end //
#procedimiento actualizar vendedor
create procedure update_producto (
IN var_codigo int,
IN var_nombre varchar(25),
IN var_precio int,
IN var_cantidad int,
IN var_vendible varchar(25)
)
NOT DETERMINISTIC
begin
		update producto set nombre=var_nombre,precio=var_precio,cantidad=var_cantidad,vendible=var_vendible where id_producto=var_codigo;
end //
#procedimiento borar vendedor
create procedure delete_producto (
IN var_producto varchar(25)
)
NOT DETERMINISTIC
begin
delete from producto where id_producto=var_producto;
end //
#procedimiento actualizar repartidor
create procedure update_pedido (
IN var_id_pedido int,
IN var_estado varchar(25),
IN var_nombre varchar(25)
)
NOT DETERMINISTIC
begin	
		DECLARE var_usuario int;
        DECLARE var_empleado int;
        select id_usuario into var_usuario from usuario where username=var_nombre;
        select id_empleado into var_empleado from empleado where id_usuario=var_usuario;
		update pedido set id_usuario=var_usuario,id_repartidor=var_empleado,
        estado=var_estado where id_pedido=var_id_pedido;
end //
#procedimiento cambiar fecha repartidor
create procedure update_fecha(
IN var_id_pedido int
)
NOT DETERMINISTIC
begin	
		update pedido set fecha_entrega=curdate() where id_pedido=var_id_pedido;
end //
#procedimiento actualizar almacen
create procedure update_suministro (
IN var_fecha varchar(25),
IN var_cantidad int,
IN var_id int
)
NOT DETERMINISTIC
begin
	declare var_producto int;
	update suministro set fecha=var_fecha where id_suministro=var_id;
    update suministro_producto set cantidad=var_cantidad where id_suministro=var_id;
end //
#procedimiento borrar almacen
create procedure delete_suministro (
IN var_id int
)
NOT DETERMINISTIC
begin
	delete from suministro where id_suministro=var_id;
    delete from suministro_producto where id_suministro=var_id;
end //
#procedimiento insertar proveedor almacen
create procedure insert_proveedor (
IN var_nombre varchar(25),
IN var_telefono varchar(25),
IN var_Email varchar(25),
IN var_DNI varchar(25)
)
NOT DETERMINISTIC
begin
	insert into proveedor (nombre,telefono,Email,DNI) values(var_nombre,var_telefono,var_Email,var_DNI);
end //
#procedimiento actualizar proveedor almacen
create procedure update_proveedor (
IN var_nombre varchar(25),
IN var_telefono varchar(25),
IN var_Email varchar(25),
IN var_DNI varchar(25),
IN var_id int
)
NOT DETERMINISTIC
begin
	update proveedor set nombre=var_nombre,telefono=var_telefono,Email=var_Email,DNI=var_DNI where id_proveedor=var_id;
end //
#procedimiento borrar proveedor almacen
create procedure delete_proveedor (
IN var_id int
)
NOT DETERMINISTIC
begin
	delete from proveedor where id_proveedor=var_id;
end //
#procedimiento insertar usuario mantenimiento
CREATE PROCEDURE insert_usuario (
IN var_id_rol varchar(25),
IN var_nombre varchar(25),
IN var_usuario varchar(25),
IN var_contraseña varchar(25)
)
NOT DETERMINISTIC
begin
    INSERT INTO usuario(ID_rol,nombre,username,passwd) VALUES (var_id_rol,var_nombre,var_usuario,var_contraseña);
end //
#procedimiento actualizar usuario mantenimiento
create procedure update_usuario (
IN var_ID_usuario int,
IN var_ID_rol int,
IN var_nombre varchar(25),
IN var_username varchar(25),
IN var_passwd varchar(25),
IN VAR_id int
)
NOT DETERMINISTIC
begin
	update usuario set ID_usuario=var_ID_usuario,ID_rol=var_ID_rol,nombre=var_nombre,username=var_username,
    passwd=var_passwd where ID_usuario=var_id;
end //
#procedimiento borrar usuario mantenimiento
create procedure delete_usuario(
IN var_id int
)
NOT DETERMINISTIC
begin
	delete from usuario where ID_usuario=var_id;
end //
#procedimiento insertar dirrecion mantenimiento
CREATE PROCEDURE insert_dirrecion (
IN var_id_usuario int,
IN var_dirrecion varchar(25),
IN var_alias varchar(25)
)
NOT DETERMINISTIC
begin
    INSERT INTO direcciones (ID_usuario,direccion,alias) VALUES (var_id_usuario,var_dirrecion,var_alias);
end //
#procedimiento actualizar dirrecion mantenimiento
create procedure update_dirrecion (
IN var_ID_usuario int,
IN var_direccion varchar(25),
IN var_alias varchar(25),
var_id int
)
NOT DETERMINISTIC
begin
	update direcciones set id_usuario=var_ID_usuario,direccion=var_direccion,alias=var_alias where ID_usuario=var_id;
end //
#procedimiento borrar dirrecion mantenimiento
create procedure delete_dirrecion(
IN var_id int
)
NOT DETERMINISTIC
begin
	delete from direcciones where ID_usuario=var_id;
end //
#procedimiento insertar rol mantenimiento
CREATE PROCEDURE insert_rol (
IN var_nombre varchar(25)
)
NOT DETERMINISTIC
begin
    INSERT INTO rol (nombre) VALUES (var_nombre);
end //
#procedimiento actualizar rol mantenimiento
create procedure update_rol (
IN var_ID_rol int,
IN var_nombre varchar(25),
var_id int
)
NOT DETERMINISTIC
begin
	update rol set ID_rol=var_ID_rol,nombre=var_nombre where ID_rol=var_id;
end //
#procedimiento borrar rol mantenimiento
create procedure delete_rol(
IN var_id int
)
NOT DETERMINISTIC
begin
	delete from rol where ID_rol=var_id;
end //
#procedimiento insertar empleado mantenimiento
CREATE PROCEDURE insert_empleado (
IN var_nombre varchar(25),
IN var_apellidos varchar(25),
IN var_telefono varchar(25),
IN var_DNI varchar(25),
IN var_ID_usuario int
)
NOT DETERMINISTIC
begin
    INSERT INTO empleado (Nombre,Apellidos,Telefono,DNI,ID_usuario) VALUES (var_nombre,var_apellidos,
    var_telefono,var_DNI,var_ID_usuario);
end //
#procedimiento actualizar empleado mantenimiento
CREATE PROCEDURE update_empleado (
IN var_nombre varchar(25),
IN var_apellidos varchar(25),
IN var_telefono varchar(25),
IN var_DNI varchar(25),
IN var_ID_usuario int,
IN var_id int
)
NOT DETERMINISTIC
begin
    update empleado set nombre=var_nombre,apellidos=var_apellidos,telefono=var_telefono,DNI=var_DNI,
    ID_usuario=var_ID_usuario where ID_empleado=var_id;
end //
#procedimiento borrar borrar mantenimiento
create procedure delete_empleado(
IN var_id int
)
NOT DETERMINISTIC
begin
	delete from empleado where ID_empleado=var_id;
end //
#procedimiento insert pedido mantenimiento
CREATE PROCEDURE insert_pedido (
IN var_ID_empleado int,
IN var_ID_usuario int,
IN var_fecha_pedido varchar(25),
IN var_fecha_entrega varchar(25),
IN var_estado varchar(25)
)
NOT DETERMINISTIC
begin
    INSERT INTO pedido (ID_repartidor,ID_usuario,fecha_pedido,fecha_entrega,estado) VALUES (var_ID_empleado,var_ID_usuario,
    var_fecha_pedido,var_fecha_entrega,var_estado);
end //
#procedimiento actualizar pedido mantenimiento
create procedure update_pedido2 (
IN var_id_pedido int,
var_id_empleado int,
IN var_ID_usuario int,
IN var_fecha_pedido varchar(25),
IN var_estado varchar(25),
IN var_id int
)
NOT DETERMINISTIC
begin
	update pedido set ID_repartidor=var_id_pedido,ID_repartidor=var_id_empleado,ID_usuario=var_ID_usuario,fecha_pedido=var_fecha_pedido,
	estado=var_estado where id_pedido=var_id;
end //
#procedimiento borrar pedido mantenimiento
create procedure delete_pedido(
IN var_id int
)
NOT DETERMINISTIC
begin
	delete from pedido where ID_pedido=var_id;
end //
#procedimiento insertar almacen
create procedure insert_suministro2(
IN var_producto varchar(25),
IN var_nombre varchar(25),
IN var_fecha varchar(25),
IN var_cantidad int
)
NOT DETERMINISTIC
begin
	DECLARE new_idproveedor int;
    DECLARE new_idsuministro int;
    DECLARE new_idproducto int;
    select id_proveedor into new_idproveedor from proveedor where nombre=var_nombre;
    insert into suministro(fecha,id_proveedor) value(var_fecha,new_idproveedor);
    select max(id_suministro) into new_idsuministro from suministro;
    select id_producto into new_idproducto from producto where nombre=var_producto;
    insert into suministro_producto(id_suministro,id_producto,cantidad) value(new_idsuministro,new_idproducto,var_cantidad);
end //
#procedimineto insertar pedido_producto mantenimiento
create procedure insertpedido_producto (
IN var_id_pedido int,
IN var_id_producto int,
In var_cantidad int
)
NOT DETERMINISTIC
begin
	insert into producto_pedido (id_pedido,id_producto,cantidad) 
    value(var_id_pedido,var_id_producto,var_cantidad);
end //
#procedimineto actualizar pedido_producto mantenimiento
create procedure updatepedido_producto (
IN var_id_pedido int,
IN var_id_producto int,
IN var_cantidad int,
IN var_id int,
IN var_id2 int
)
NOT DETERMINISTIC
begin
	update producto_pedido set ID_pedido=var_id_pedido,ID_producto=var_id_producto,
    cantidad=var_cantidad where ID_pedido=var_id && ID_producto=var_id2;
end //
#procedimineto borrar pedido_producto mantenimiento
create procedure deleteproducto_pedido(
IN var_id int,
IN var_id2 int
)
NOT DETERMINISTIC
begin
	delete from producto_pedido where ID_pedido=var_id && ID_producto=var_id2;
end //
#procedimineto actualizar producto mantenimiento
create procedure update_producto2 (
IN var_codigo varchar(25),
IN var_id_producto int,
IN var_nombre varchar(25),
IN var_precio int,
IN var_cantidad int,
IN var_vendible varchar(25)
)
NOT DETERMINISTIC
begin
		update producto set ID_producto=var_id_producto,nombre=var_nombre,precio=var_precio,cantidad=var_cantidad,vendible=var_vendible where id_producto=var_codigo;
end //
#procedimineto insertar suministro_producto mantenimiento
create procedure insertsuministro_producto (
IN var_id_suministro int,
IN var_id_producto int,
In var_cantidad int
)
NOT DETERMINISTIC
begin
	insert into suministro_producto (id_suministro,id_producto,cantidad) 
    value(var_id_suministro,var_id_producto,var_cantidad);
end //
#procedimineto actualizar suministro_producto mantenimiento
create procedure updatesuministro_producto (
IN var_id_suministro int,
IN var_id_producto int,
IN var_cantidad int,
IN var_id int,
IN var_id2 int
)
NOT DETERMINISTIC
begin
	update suministro_producto set ID_suministro=var_id_suministro,ID_producto=var_id_producto,
    cantidad=var_cantidad where ID_suministro=var_id && ID_producto=var_id2;
end //
#procedimineto borrar suministro_producto mantenimiento
create procedure deletesuministro_producto(
IN var_id int,
IN var_id2 int
)
NOT DETERMINISTIC
begin
	delete from suministro_producto where ID_suministro=var_id && ID_producto=var_id2;
end //
#procedimineto insertar suministro mantenimiento
create procedure insert_suministro3 (
IN var_fecha date,
IN var_ID_proveedor int
)
NOT DETERMINISTIC
begin
	insert into suministro (fecha,fecha_entrega,ID_proveedor) 
    value(var_fecha,var_ID_proveedor);
end //
#procedimineto actualizar suministro mantenimiento
create procedure update_suministro3 (
IN var_ID_suministro int,
IN var_fecha date,
IN var_ID_proveedor int,
IN var_codigo int
)
NOT DETERMINISTIC
begin
	update suministro set ID_suministro=var_ID_suministro,fecha=var_fecha,
    ID_proveedor=var_ID_proveedor where ID_suministro=var_codigo;
end //
#procedimineto actualizar proveedor mantenimiento
create procedure update_proveedor2 (
iN var_ID_proveedor int,
IN var_nombre varchar(25),
IN var_telefono varchar(25),
IN var_Email varchar(25),
IN var_DNI varchar(25),
IN var_id int
)
NOT DETERMINISTIC
begin
	update proveedor set ID_proveedor=var_ID_proveedor,nombre=var_nombre,telefono=var_telefono,
    Email=var_Email,DNI=var_DNI where id_proveedor=var_id;
end //
#procedimineto cliente insertar pedido
create procedure insert_pedido3(
IN var_repartidor int,
IN var_nombre varchar(25),
IN var_cantidad int,
IN var_usuario varchar(25)
)
NOT DETERMINISTIC
begin
	DECLARE new_idproducto int;
    DECLARE new_idpedido int;
    DECLARE new_id_usuario int;
    select id_usuario into new_id_usuario from usuario where nombre=var_usuario;
    insert into pedido (ID_repartidor,ID_usuario,fecha_pedido,fecha_entrega,estado)
    value(var_repartidor,new_id_usuario,CURDATE(),null,"libre");
    select max(id_pedido) into new_idpedido from pedido;
    select id_producto into new_idproducto from producto where nombre=var_nombre;
    insert into producto_pedido (id_pedido,id_producto,cantidad) value(new_idpedido,new_idproducto,var_cantidad);
    update producto set cantidad=cantidad-var_cantidad;
end //
#actualizar fecha suministro
create procedure update_suministrofecha(
IN var_id_suministro int
)
NOT DETERMINISTIC
begin	
		update suministro set fecha_entrega=curdate() where id_suministro=var_id_suministro;
end //
#insertar dirrecion
create procedure direccion (
IN var_usuario varchar(25),
IN var_dirrecion varchar(25),
IN var_alias varchar(25)
)
NOT DETERMINISTIC
begin	
		declare var_id_usuario int;
		select id_usuario into var_id_usuario from usuario where username=var_usuario;
		insert into direcciones (id_usuario,direccion,alias)values(var_id_usuario,var_dirrecion,var_alias);
end //
