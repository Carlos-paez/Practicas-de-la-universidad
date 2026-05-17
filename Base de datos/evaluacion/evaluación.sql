use prueba;

create table roles(
    id int primary key auto_increment,
    user_roll varchar(50));

CREATE TABLE `permisos` (
  `id` int NOT NULL,
  `fk_roles` int NOT NULL,
  `fk_modulos` int NOT NULL
);

create table modulos (
    id int primary key auto_increment,
    modulo_name varchar(50));

create table estudiante(
    id int primary key auto_increment,
    cedula int, nombre varchar(255),
    apellido varchar(255),
    password varchar(255),
    status int,
    fk_roll int not null);




insert into estudiante(id, cedula, nombre, apellido, password, status, fk_roll)
    VALUE ('1', '31470100', 'Carlos', 'Páez', '3006', '1', '1');

insert into estudiante(id, cedula, nombre, apellido, password, status, fk_roll)
    VALUE ('2', '32470100', 'Leomar', 'Guerra', '6003', '0', '2');

insert into estudiante(id, cedula, nombre, apellido, password, status, fk_roll)
    VALUE ('3', '32570100', 'Fulano', 'tal', '1234', '1', '3');

insert into estudiante(id, cedula, nombre, apellido, password, status, fk_roll)
    VALUE ('4', '32580100', 'Mengano', 'tales', '4321', '0', '1');

insert into estudiante(id, cedula, nombre, apellido, password, status, fk_roll)
    VALUE ('5', '32580100', 'mentado', 'tails', '43251', '2', '3');




insert into roles(id, user_roll)
    VALUE('1', 'Super_admin');

insert into roles(id, user_roll)
    VALUE('2', 'admin');

insert into roles(id, user_roll)
    VALUE('3', 'standar_user');




insert into modulos(id, modulo_name)
    VALUE('1', 'home');
insert into modulos(id, modulo_name)
    VALUE('2', 'reportes');
insert into modulos(id, modulo_name)
    VALUE('3', 'usuarios');
insert into modulos(id, modulo_name)
    VALUE('4', 'productos');





ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_puente_roles` (`fk_roles`),
  ADD KEY `fk_puente_modulos` (`fk_modulos`);

ALTER TABLE `estudiante`
  ADD KEY `fk_estudiante_roles` (`fk_roll`);




ALTER TABLE `permisos`
  ADD CONSTRAINT `fk_permisos_roles` FOREIGN KEY (`fk_roles`) REFERENCES `roles` (`id`) ON DELETE cascade ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_permisos_modulos` FOREIGN KEY (`fk_modulos`) REFERENCES `modulos` (`id`) ON DELETE cascade ON UPDATE CASCADE;
COMMIT;

ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_studiante_roles` FOREIGN KEY (`fk_roll`) REFERENCES `roles` (`id`) ON DELETE cascade ON UPDATE CASCADE;
COMMIT;




INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (1, 1, 1);

INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (2, 1, 2);

INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (3, 1, 3);

INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (4,1, 4);

INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (5, 2, 1);

INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (6, 2, 3);

INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (7, 2, 4);

INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (8, 3, 1);

INSERT INTO `permisos` (id, fk_roles, fk_modulos)
VALUES (9, 3, 4);



SELECT
  p.id AS id_permisos,
  r.user_roll,
  m.modulo_name
FROM permisos p
INNER JOIN roles r ON p.fk_roles = r.id
INNER JOIN modulos m ON p.fk_modulos = m.id;


SELECT
  e.id AS id_estudiante,
  e.cedula,
  e.nombre,
  e.apellido,
  e.password,
  e.status,
  r.user_roll
FROM estudiante e
INNER JOIN roles r ON e.fk_roll = r.id;
