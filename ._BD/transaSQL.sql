/**CREACION DE LA BASE DE DATOS FOROBINARIO
  @AUTOR : steven antony castillo flores*/
------------------------------------------
Create DataBase foroBinario
------------------------------------------

/**INSERTAR DATOS EN LAS DIFERENTES TABLAS
  @AUTOR : steven antony castillo flores*/
------------------------------------------
--      CATEGORIA
  insert into categoria (codigo_categ,nombre_categ)
  values ('LPJS01OE','JavaScript');
  insert into categoria (codigo_categ,nombre_categ)
  values ('LPPH02OO','Php');
  insert into categoria (codigo_categ,nombre_categ)
  values ('BDSQ04BD','SQL Server');
  insert into categoria (codigo_categ,nombre_categ)
  values ('LDCS05DS','Css');
  insert into categoria (codigo_categ,nombre_categ)
  values ('SOWS06SO','Windows');
  insert into categoria (codigo_categ,nombre_categ)
  values ('SOLN07SO','Linux');
  insert into categoria (codigo_categ,nombre_categ)
  values ('LPC+08OO','C++');
  INSERT INTO categoria(codigo_categ, nombre_categ) VALUES ('HR01ID','Visual Code');
--      TEMA
  insert into tema (codigo_categ,nombre_tem)
  values ('LPJS01OE','Array');
  insert into tema (codigo_categ,nombre_tem)
  values ('LPJS01OE','Json');
  insert into tema (codigo_categ,nombre_tem)
  values ('LPJS01OE','Eventos');
  insert into tema (codigo_categ,nombre_tem)
  values ('LPPH02OO','Get y Post');
  insert into tema (codigo_categ,nombre_tem)
  values ('LPPH02OO','Conexion BD');
  insert into tema (codigo_categ,nombre_tem)
  values ('BDSQ04BD','Consultas');
  insert into tema (codigo_categ,nombre_tem)
  values ('BDSQ04BD','Configuracion');
  insert into tema (codigo_categ,nombre_tem)
  values ('BDSQ04BD','Crear Tablas');
  insert into tema (codigo_categ,nombre_tem)
  values ('LDCS05DS','Flex box');
  insert into tema (codigo_categ,nombre_tem)
  values ('SOWS06SO','Activacion');
  insert into tema (codigo_categ,nombre_tem)
  values ('SOWS06SO','driver');
  insert into tema (codigo_categ,nombre_tem)
  values ('SOLN07SO','Instalar');

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
  insert into detalleuser (user_id,estado,fecha_ing,avatar)
  values (1,'activo','2018-05-01','avatar.jpg');
  insert into detalleuser (user_id,estado,fecha_ing,avatar)
  values (2,'activo','2018-05-05','avatar.jpg');
  insert into detalleuser (user_id,estado,fecha_ing,avatar)
  values (3,'activo','2018-06-15','avatar.jpg');
  insert into detalleuser (user_id,estado,fecha_ing,avatar)
  values (4,'activo','2018-03-25','avatar.jpg');
--      PREGUNTAS
  insert into pregunta (codigo_pre,id_tem,user_id,titulo_pre,descripcion_pre,fecha_pre,hora_pre,estado_pre)
  values ('P01A',1,1,'Crear un Arreglo','quisiera saber como puedo crear un arrgeglo.','2018-04-07','10:08:20','habilitado');
  -- insert into pregunta (codigo_pre,id_tem,user_id,titulo_pre,descripcion_pre,fecha_pre,hora_pre,estado_pre)
  -- values ('P01A',2,1,'Mostrar JSON','Como puedo mostrar un JSON en HMTL.','2018-04-07','10:08:20','habilitado');
  insert into pregunta (codigo_pre,id_tem,user_id,titulo_pre,descripcion_pre,fecha_pre,hora_pre,estado_pre)
  values ('P02B',2,2,'Mostrar JSON','Como puedo mostrar un JSON en HMTL.','2018-05-07','10:08:20','habilitado');
  insert into pregunta (codigo_pre,id_tem,user_id,titulo_pre,descripcion_pre,fecha_pre,hora_pre,estado_pre)
  values ('P03C',3,2,'Pulsar Teclado','Tengo un problema a la hora de llamar el evento key.','2018-06-07','10:08:20','habilitado');
  insert into pregunta (codigo_pre,id_tem,user_id,titulo_pre,descripcion_pre,fecha_pre,hora_pre,estado_pre)
  values ('P04D',4,3,'Enviar Archivo img','como puedo enviar un file por la ruta GET.','2018-07-07','10:08:20','habilitado');
  insert into pregunta (codigo_pre,id_tem,user_id,titulo_pre,descripcion_pre,fecha_pre,hora_pre,estado_pre)
  values ('P05E',5,4,'Conectar a MYSQL','Como me puedo conectar a mysql.','2018-08-07','10:08:20','habilitado');
  insert into pregunta (codigo_pre,id_tem,user_id,titulo_pre,descripcion_pre,fecha_pre,hora_pre,estado_pre)
  values ('P06F',6,4,'Relacionar Tabla','No puedo acceder de una tabla a otra, tengo problemas.','2018-04-07','10:08:20','habilitado');
--      RESPUESTAS
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,fecha_resp,hora_resp,estado_resp,valoracion_resp)
  values ('RP01A','P01A',4,'quisiera saber como puedo crear un arrgeglo.','2018-04-07','10:08:20','habilitado',20);

  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,fecha_resp,hora_resp,estado_resp,valoracion_resp)
  values ('RP02B','P02B',3,'Como puedo mostrar un JSON en HMTL.','2018-04-07','10:08:20','habilitado',50);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,fecha_resp,hora_resp,estado_resp,valoracion_resp)
  values ('RP02G','P02B',4,'Como puedo mostrar un JSON en HMTL.','2018-04-07','10:08:20','habilitado',30);

  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,fecha_resp,hora_resp,estado_resp,valoracion_resp)
  values ('RP03C','P03C',3,'Tengo un problema a la hora de llamar el evento key.','2018-04-07','10:08:20','habilitado',10);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,fecha_resp,hora_resp,estado_resp,valoracion_resp)
  values ('RP04D','P04D',1,'como puedo enviar un file por la ruta GET.','2018-04-07','10:08:20','habilitado',20);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,fecha_resp,hora_resp,estado_resp,valoracion_resp)
  values ('RP05E','P05E',2,'Como me puedo conectar a mysql.','2018-04-07','10:08:20','habilitado',40);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,fecha_resp,hora_resp,estado_resp,valoracion_resp)
  values ('RP06F','P06F',2,'No puedo acceder de una tabla a otra, tengo problemas.','2018-04-07','10:08:20','habilitado',100);
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
