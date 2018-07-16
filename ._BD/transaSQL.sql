/**CREACION DE LA BASE DE DATOS FOROBINARIO
  @AUTOR : steven antony castillo flores*/
------------------------------------------
--Create DataBase foroBinario
------------------------------------------

/**INSERTAR DATOS EN LAS DIFERENTES TABLAS
  @AUTOR : steven antony castillo flores*/
------------------------------------------
--      CATEGORIA
insert into categoria (codigo_cat,nombre_cat,area_cat,img_cat,estado_cat)
values ('LJA01','JavaScript','Lenguaje','null','activo');
insert into categoria (codigo_cat,nombre_cat,area_cat,img_cat,estado_cat)
values ('LPH02','Php','Lenguaje','null','activo');
insert into categoria (codigo_cat,nombre_cat,area_cat,img_cat,estado_cat)
values ('BSQ03','SQL Server','Base de Datos','null','nuevo');
insert into categoria (codigo_cat,nombre_cat,area_cat,img_cat,estado_cat)
values ('LCS04','Css','Lenguaje','null','activo');
insert into categoria (codigo_cat,nombre_cat,area_cat,img_cat,estado_cat)
values ('SWI05','Windows','Sistema Operativo','null','activo');
insert into categoria (codigo_cat,nombre_cat,area_cat,img_cat,estado_cat)
values ('SLI06','Linux','Sistema Operativo','null','nuevo');
insert into categoria (codigo_cat,nombre_cat,area_cat,img_cat,estado_cat)
values ('LC+07','C++','Lenguaje','null','activo');
INSERT INTO categoria(codigo_cat, nombre_cat,area_cat,img_cat,estado_cat)
VALUES ('HVI08','Visual Code','Herramienta','null','activo');
--      TEMA

insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('LC+07','Structura','LCST001','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('HVI08','Extension Mysql','HVEX002','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('LJA01','Array','LJAR003','nuevo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('LJA01','Json','LJJS004','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('LJA01','Eventos','LJEV005','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('LPH02','Get y Post','LPGE006','nuevo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('LPH02','Conexion BD','LPCO007','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('BSQ03','Consultas','BSCO008','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('BSQ03','Configuracion','BSCO009','nuevo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('BSQ03','Crear Tablas','BSCR010','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('LCS04','Flex box','LCFL011','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('SWI05','Activacion','SWAC012','nuevo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('SWI05','driver','SWDR013','activo');
insert into tema (codigo_cat,nombre_tem,codigo_tem,estado_tem)
values ('SLI06','Instalar','SLIN014','activo');

--      USUARIOS
  insert into users (name,email,password)
  values ('Steven Antony','castillo_flores1997@outlook.com','12345678');
  insert into users (name,email,password)
  values ('Daleska Casales','Daleska@outlook.com','12345678');
  insert into users (name,email,password)
  values ('Aron Ismael','aronIsmarl@outlook.com','12345678');
  insert into users (name,email,password)
  values ('Mariana Rosario','mariana.Rosario@outlook.com','12345678');
--      DETALLE USUARIO
insert into detalleuser (user_id,estado,avatar_dus,ubicacion_dus,puntaje_dus,nivel)
values (1,'activo','avatar.jpg','Lambayeque-Peru',10.00,1);
insert into detalleuser (user_id,estado,avatar_dus,ubicacion_dus,puntaje_dus,nivel)
values (2,'activo','avatar.jpg','Madrid-España',15.50,1);
insert into detalleuser (user_id,estado,avatar_dus,ubicacion_dus,puntaje_dus,nivel)
values (3,'activo','avatar.jpg','Lima-Peru',5.10,1);
insert into detalleuser (user_id,estado,avatar_dus,ubicacion_dus,puntaje_dus,nivel)
values (4,'activo','avatar.jpg','Lambayeque-Peru',5.42,1);
--      PREGUNTAS
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P01A','LJAR003',1,'Crear un Arreglo','quisiera saber como puedo crear un arrgeglo.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P02B','LJJS004',2,'Mostrar JSON','Como puedo mostrar un JSON en HMTL.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P03C','LJEV005',2,'Pulsar Teclado','Tengo un problema a la hora de llamar el evento key.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P04D','LPGE006',3,'Enviar Archivo img','como puedo enviar un file por la ruta GET.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P05E','LPCO007',4,'Conectar a MYSQL','Como me puedo conectar a mysql.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P06F','BSCR010',4,'Relacionar Tabla','No puedo acceder de una tabla a otra, tengo problemas.','activo');
--      RESPUESTAS
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP01A','P01A',4,'quisiera saber como puedo crear un arrgeglo.','habilitado',4);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP02B','P02B',3,'Como puedo mostrar un JSON en HMTL.','habilitado',4.3);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP02G','P02B',4,'Como puedo mostrar un JSON en HMTL.','habilitado',3.2);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP03C','P03C',3,'Tengo un problema a la hora de llamar el evento key.','habilitado',2.1);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP04D','P04D',1,'como puedo enviar un file por la ruta GET.','habilitado',5);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP05E','P05E',2,'Como me puedo conectar a mysql.','habilitado',40);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP06F','P06F',2,'No puedo acceder de una tabla a otra, tengo problemas.','habilitado',4.6);

------------------------------------------

/**CREAR PROCEDIMIENTOS Y CONSULTAR DE LAS DIFERENTES CONSULTAS
  @AUTOR : steven antony castillo flores*/

  --> Mostrar usuario con las preguntas realizadas y las respuestas
  -- declare @preResp;

  select pg.titulo_pre,pg.descripcion_pre,pg.descripcionCode__pre,pg.fecha_pre,pg.hora_pre,pg.estado_pre,rp.descripcion_resp,rp.descripcionCode__resp,rp.fecha_resp,rp.hora_resp,rp.estado_resp,rp.valoracion_resp, ua.name as usuarioRespondio from users ua inner join respuesta rp on ua.id = rp.user_id
  inner join pregunta pg on rp.codigo_pre = pg.codigo_pre
  inner join users u on pg.user_id = u.id
  where u.id = 2


 --> Mostrar las preguntas de cada categoria

  select pg.titulo_pre,pg.descripcion_pre,pg.descripcionCode__pre,pg.fecha_pre,pg.hora_pre,pg.estado_pre,rp.descripcion_resp,rp.descripcionCode__resp,rp.fecha_resp,rp.hora_resp,rp.estado_resp,rp.valoracion_resp, ua.name as usuarioRespondio from users ua inner join respuesta rp on ua.id = rp.user_id
  inner join pregunta pg on rp.codigo_pre = pg.codigo_pre
  inner join tema t on pg.id_tem = t.id_tem
  inner join categoria ct on t.codigo_categ = ct.codigo_categ
  -- where ct.codigo_categ = 'LPJS01OE'
  -- group by ct.


--> Mostrar las Categorias segun la area

  -- select * from categoria where codigo_categ LIKE 'L%'
  -- union
  -- select * from categoria where codigo_categ LIKE 'BD%'
  -- union
  -- select * from categoria where codigo_categ LIKE 'SO%'

--> Mostrar ultimas preguntas
select pg.codigo_pre,u.name,pg.titulo_pre,pg.fecha_pre,pg.hora_pre,ct.nombre_categ from users u inner join pregunta pg on u.id = pg.user_id
inner join tema t on pg.id_tem = t.id_tem
inner join categoria ct on t.codigo_categ = ct.codigo_categ
order by pg.fecha_pre desc

DELIMITER //
CREATE FUNcTION holaMundo() RETURNS VARCHAR(20)
BEGIN
    RETURN 'HolaMundo';
END
//


--> REALIZAR BUSQUEDAS EN EL WELCOME

select * from pregunta pg inner join respuesta rp on pg.codigo_pre = rp.codigo_pre where pg.titulo_pre like 'cre%'

--> Mayor Puntaje

  select
