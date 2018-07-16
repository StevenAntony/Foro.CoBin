select * from tema;
desc categoria;

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

desc `tema`;

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

desc `users`

  insert into users (name,email,password)
  values ('Steven Antony','castillo_flores1997@outlook.com','12345678');
  insert into users (name,email,password)
  values ('Daleska Casales','Daleska@outlook.com','12345678');
  insert into users (name,email,password)
  values ('Aron Ismael','aronIsmarl@outlook.com','12345678');
  insert into users (name,email,password)
  values ('Mariana Rosario','mariana.Rosario@outlook.com','12345678');
  select * from `users`

desc `detalleuser`

  insert into detalleuser (user_id,estado,avatar_dus,ubicacion_dus,puntaje_dus,nivel)
  values (2,'activo','avatar.jpg','Lambayeque-Peru',10.00,1);
  insert into detalleuser (user_id,estado,avatar_dus,ubicacion_dus,puntaje_dus,nivel)
  values (3,'activo','avatar.jpg','Madrid-España',15.50,1);
  insert into detalleuser (user_id,estado,avatar_dus,ubicacion_dus,puntaje_dus,nivel)
  values (4,'activo','avatar.jpg','Lima-Peru',5.10,1);
  insert into detalleuser (user_id,estado,avatar_dus,ubicacion_dus,puntaje_dus,nivel)
  values (5,'activo','avatar.jpg','Lambayeque-Peru',5.42,1);

DESC `pregunta`

  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P01A','LJAR003',5,'Crear un Arreglo','quisiera saber como puedo crear un arrgeglo.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P02B','LJJS004',3,'Mostrar JSON','Como puedo mostrar un JSON en HMTL.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P03C','LJEV005',3,'Pulsar Teclado','Tengo un problema a la hora de llamar el evento key.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P04D','LPGE006',2,'Enviar Archivo img','como puedo enviar un file por la ruta GET.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P05E','LPCO007',4,'Conectar a MYSQL','Como me puedo conectar a mysql.','activo');
  insert into pregunta (codigo_pre,codigo_tem,user_id,titulo_pre,descripcion_pre,estado_pre)
  values ('P06F','BSCR010',4,'Relacionar Tabla','No puedo acceder de una tabla a otra, tengo problemas.','activo');

DESC `respuesta`

  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP01A','P01A',4,'quisiera saber como puedo crear un arrgeglo.','habilitado',4);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP02B','P02B',3,'Como puedo mostrar un JSON en HMTL.','habilitado',4.3);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP02G','P02B',4,'Como puedo mostrar un JSON en HMTL.','habilitado',3.2);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP03C','P03C',3,'Tengo un problema a la hora de llamar el evento key.','habilitado',2.1);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP04D','P04D',5,'como puedo enviar un file por la ruta GET.','habilitado',5);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP05E','P05E',2,'Como me puedo conectar a mysql.','habilitado',40);
  insert into respuesta (codigo_resp,codigo_pre,user_id,descripcion_resp,estado_resp,valoracion_resp)
  values ('RP06F','P06F',2,'No puedo acceder de una tabla a otra, tengo problemas.','habilitado',4.6);

  select * from `respuesta`

------------------------------------------
select * from users
select * from pregunta
select top 2 * from detalleuser du inner join users u on du.user_id = u.id

select * from tema inner join categoria  on tema.codigo_cat = categoria.codigo_cat WHERE tema.estado_tem = 'nuevo'

select count(*) from pregunta p inner join tema t on p.codigo_tem = t.codigo_tem where t.codigo_tem = 'LJAR003'