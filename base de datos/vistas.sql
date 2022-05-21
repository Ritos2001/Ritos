use Ritos;
#vista vendedor
create view vista_producto as
select id_producto,nombre,precio,cantidad from producto where vendible=1;
#vista almacen
create view vista_suministro as
select s.ID_suministro,pr.nombre,p.nombre proveedor,s.fecha,c.cantidad,s.fecha_entrega from suministro s inner join proveedor p 
on s.ID_proveedor=p.ID_proveedor inner join suministro_producto c on s.ID_suministro=c.ID_suministro 
inner join producto pr on pr.id_producto=c.id_producto ;
#vista entrar paginas
create view vista_entrar as
select username,passwd from usuario;
#vista entrar paginas2
create view vista_entrar2 as
select r.nombre,username from usuario u inner join rol r on u.id_rol =r.id_rol;
#vista pedido cliente
create view vista_cliente as
select p.fecha_pedido,p.fecha_entrega,pr.cantidad,pro.nombre producto,u.nombre from pedido p inner join producto_pedido pr on 
p.id_pedido=pr.id_pedido inner join producto pro on pro.id_producto=pr.id_producto inner join usuario u on
u.id_usuario=u.id_usuario;
#vista pedido 
create view vista_cliente2 as
select p.id_pedido,p.fecha_pedido,p.fecha_entrega,pr.cantidad,pro.nombre producto,u.nombre,estado from pedido p inner join producto_pedido pr on 
p.id_pedido=pr.id_pedido inner join producto pro on pro.id_producto=pr.id_producto inner join usuario u on
u.id_usuario=p.id_usuario;
#vista repartidor
create view vista_pedido as
select pe.id_pedido,p.nombre producto,u.nombre,pe.fecha_pedido,pe.fecha_entrega,c.cantidad,pe.estado from pedido pe 
inner join producto_pedido c on pe.id_pedido=c.id_pedido inner join producto p 
on c.id_producto=p.id_producto inner join usuario u on u.id_usuario=pe.id_usuario
group by p.nombre;