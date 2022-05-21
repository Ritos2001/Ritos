create schema Ritos;
use Ritos;
#tabla proveedor
CREATE TABLE IF NOT EXISTS proveedor (
    ID_proveedor INT AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(25) NOT NULL,
    telefono VARCHAR(25) DEFAULT NULL,
    Email VARCHAR(25) DEFAULT NULL,
    DNI VARCHAR(25) NOT NULL,
    PRIMARY KEY (ID_proveedor)
);
#tabla suministro
create table IF NOT EXISTS suministro (
	ID_suministro int auto_increment not null,
    fecha date not null,
    ID_proveedor int not null,
    fecha_entrega date default null,
    PRIMARY KEY(ID_suministro),
	CONSTRAINT FOREIGN KEY (ID_proveedor) REFERENCES proveedor(ID_proveedor) ON DELETE CASCADE ON UPDATE CASCADE
);
#tabla producto
create table IF NOT EXISTS producto (
	ID_producto int auto_increment not null,
    nombre varchar(25) not null,
    Precio decimal(5,2) not null,
    vendible enum('Vendible','No Vendible'),
    cantidad varchar(25) not null,
    PRIMARY KEY(ID_producto)
);
#tabla suministro_producto
create table IF NOT EXISTS suministro_producto (
	ID_suministro int not null,
    ID_producto int not null,
    cantidad int not null,
	PRIMARY KEY(ID_producto),
	CONSTRAINT FOREIGN KEY (ID_producto) REFERENCES producto(ID_producto) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FOREIGN KEY (ID_suministro) REFERENCES suministro(ID_suministro) ON DELETE CASCADE ON UPDATE CASCADE
);
#tabla rol
create table IF NOT EXISTS rol (
	ID_rol int auto_increment not null,
    nombre varchar(25) not null,
    PRIMARY KEY(ID_rol)
);
#tabla usuario
create table IF NOT EXISTS usuario (
	ID_usuario int auto_increment not null,
    ID_rol int not null,
    nombre varchar(25) not null,
    email varchar(25)default null,
	username varchar(25) not null,
    passwd varchar(25) not null,
    PRIMARY KEY(ID_usuario),
    CONSTRAINT FOREIGN KEY (ID_rol) REFERENCES rol(ID_rol) ON DELETE CASCADE ON UPDATE CASCADE
);
#tabla empleado
create table IF NOT EXISTS empleado (
	ID_empleado int auto_increment not null,
    nombre varchar(25) not null,
    apellidos varchar(25) not null,
    telefono varchar(25)default null,
    DNI varchar(25) not null,
    ID_usuario int not null,
    PRIMARY KEY(ID_empleado),
    CONSTRAINT FOREIGN KEY (ID_usuario) REFERENCES usuario(ID_usuario) ON DELETE CASCADE ON UPDATE CASCADE
);
#tabla pedido
create table IF NOT EXISTS pedido (
	ID_pedido int auto_increment not null,
    ID_repartidor int not null,
    ID_usuario int not null,
    fecha_pedido date not null,
    fecha_entrega date default null,
    estado enum('Libre','Ocupado') not null,
	PRIMARY KEY(ID_pedido),
    CONSTRAINT FOREIGN KEY (ID_repartidor) REFERENCES empleado(ID_empleado) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (ID_usuario) REFERENCES usuario(ID_usuario) ON DELETE CASCADE ON UPDATE CASCADE
);
#tabla direcciones
create table IF NOT EXISTS direcciones (
	id_usuario int not null,
    direccion varchar(25) not null,
    alias enum('Casa','Empresa') not null,
    CONSTRAINT FOREIGN KEY (ID_usuario) REFERENCES usuario(ID_usuario) ON DELETE CASCADE ON UPDATE CASCADE
);
#tabla producto_pedido
create table IF NOT EXISTS producto_pedido(
    ID_producto int not null,
    ID_pedido int not null,
    cantidad varchar(25),
    CONSTRAINT FOREIGN KEY (ID_producto) REFERENCES producto(ID_producto) ON DELETE CASCADE ON UPDATE CASCADE ,
    CONSTRAINT FOREIGN KEY (ID_pedido) REFERENCES pedido(ID_pedido) ON DELETE CASCADE ON UPDATE CASCADE
);