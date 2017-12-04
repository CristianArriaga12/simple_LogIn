create database LogIn;
use login;
create table registro(
    User_name varchar(50) not null unique,
    Contrasenia varchar(100) not null unique,
    primer_nombre varchar(50) not null,
    segundo_nombre varchar(50),
    apellido_paterno varchar(50) not null,
    apellido_materno varchar(50) not null,
    correo_electronico varchar(100) not null unique
    
)Engine InnoDB default charset=latin1;