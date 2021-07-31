create database manager;
use manager;
create table cliente(
idcliente int not null auto_increment,
email varchar (30) not null,
clave varchar (15) not null,
primary key (idcliente)
)engine=InnoDB;
create table producto(
codigo int not null auto_increment,
nombre varchar (30) not null,
descripcion varchar (100) not null,
precio double (4,2) not null,
tipo varchar (10) not null,
primary key (codigo)
)engine=InnoDB;