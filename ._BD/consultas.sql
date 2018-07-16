/*
=> PARA PODER SACAR A LOS TEMAS NUEVO EN EL ULTIMA SEMANA CON TODO
  Y CANTIDADES DE PREGUNTAS
*/

select * from tema inner join categoria  on tema.codigo_cat = categoria.codigo_cat WHERE tema.estado_tem = 'nuevo'

select count(*) from pregunta p inner join tema t on p.codigo_tem = t.codigo_tem where t.codigo_tem = 'LJAR003'