DELIMITER //
CREATE PROCEDURE cursor1()
BEGIN
DECLARE finished INTEGER DEFAULT 0;
DECLARE fname1 CHAR(20) DEFAULT "";
DECLARE nameList CHAR(100) DEFAULT "";
-- 1. Declare cursor for employee
DECLARE emp_cursor CURSOR FOR SELECT categoria.nombre_categ FROM categoria;
-- 2. Declare NOT FOUND handler
DECLARE CONTINUE HANDLER FOR NOT FOUND SET finished = 1;
-- 3. Open the cursor
OPEN emp_cursor;
L: LOOP
 -- 4. Fetch next tuple
 FETCH emp_cursor INTO fname1;
 -- Handler will set finished = 1 if cursor is empty
 IF finished = 1 THEN
 LEAVE L;
 ELSE
 	-- build emp list
	 SET nameList = CONCAT(nameList, fname1, ';' );
 	ITERATE L;
 END IF;
 END LOOP ;
-- 5. Close cursor when done
CLOSE emp_cursor;
SELECT emp_cursor ;
END //
DELIMITER ;


/**
*/

DELIMITER //
CREATE PROCEDURE cursor1()
BEGIN
DECLARE finished INTEGER DEFAULT 0;
DECLARE finRep INTEGER DEFAULT 0;
DECLARE valor integer DEFAULT 0;
DECLARE id integer DEFAULT 0;
DECLARE id2 integer DEFAULT 0;
DECLARE cod_resp char(40) DEFAULT "";

DECLARE contador integer DEFAULT 0;

DECLARE idMayor integer DEFAULT 0;
DECLARE cantMayor integer DEFAULT 0;

DECLARE emp_cursor CURSOR FOR SELECT users.id FROM users;

DECLARE CONTINUE HANDLER FOR NOT FOUND SET finished = 1;

OPEN emp_cursor;

L: LOOP

 FETCH emp_cursor INTO id;

 IF finished = 1 THEN
 	LEAVE L;
 ELSE
	DECLARE rp_cursor CURSOR FOR SELECT respuesta.codigo_resp,respuesta.user_id,respuesta.valoracion_resp FROM respuesta WHERE users.id = id;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET finRep = 1;
	OPEN rp_cursor;

	R: LOOP
    	FETCH rp_cursor INTO cod_resp,id2,valor;

        IF finRep = 1 THEN
        	LEAVE L;
        ELSE
        	contador = contador + valor;
            idMayor = id2;
        END IF;

    END LOOP

    IF contador > cantMayor THEN
    	idMayor = id;
    end IF;

 	ITERATE L;
 END IF;

END LOOP ;

CLOSE emp_cursor;
CLOSE rp_cursor;

SELECT * from users where users.id = idMayor ;

END //
DELIMITER ;


/********************/

DELIMITER //
CREATE PROCEDURE cursor1()
BEGIN
DECLARE finished INTEGER DEFAULT 0;
DECLARE finRep INTEGER DEFAULT 0;
DECLARE valor integer DEFAULT 0;
DECLARE id integer DEFAULT 0;
DECLARE id2 integer DEFAULT 0;
DECLARE cod_resp char(40) DEFAULT "";

DECLARE contador integer DEFAULT 0;

DECLARE idMayor integer DEFAULT 0;
DECLARE cantMayor integer DEFAULT 0;

DECLARE emp_cursor CURSOR FOR SELECT users.id FROM users;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET finished = 1;
OPEN emp_cursor;
FETCH emp_cursor INTO id;

DECLARE rp_cursor CURSOR FOR SELECT respuesta.codigo_resp,respuesta.user_id,respuesta.valoracion_resp FROM respuesta WHERE users.id = id;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET finRep = 1;
OPEN rp_cursor;
FETCH rp_cursor INTO cod_resp,id2,valor;


L: LOOP

 IF finished = 1 THEN
 	LEAVE L;
 ELSE

	R: LOOP

        IF finRep = 1 THEN
        	LEAVE L;
        ELSE
        	contador = contador + valor;
            idMayor = id2;
        END IF;

    END LOOP

    IF contador > cantMayor THEN
    	idMayor = id;
    end IF;

 	ITERATE L;
 END IF;

END LOOP ;

CLOSE emp_cursor;
CLOSE rp_cursor;

SELECT * from users where users.id = idMayor ;

END //
DELIMITER ;


-----------------------------
DELIMITER //
CREATE PROCEDURE proc_prueba(IN A INT)
BEGIN
  SELECT * FROM users WHERE id=A;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE proc_cantidadRPTA(IN codigoAux CHAR(10))
BEGIN
	DECLARE existe INTEGER;
    SET existe = (SELECT COUNT(*) FROM pregunta WHERE codigo_pre = codigoAux);
	IF existe > 0 THEN
		SELECT p.codigo_pre , count(r.codigo_resp) as cantidad_resp from pregunta p inner join respuesta r on 							p.codigo_pre = r.codigo_pre where p.codigo_pre = codigoAux;
	END IF;
END //
DELIMITER ;


CALL proc_cantidadRPTA ('TPREBS15}6')

/*
	-- @AUTH - @TITLE - @PROCEDURE
	--============================
*/
--
--	#DETALLES DE LA CATEGORIAS - EL ESTADO SE ESTA ANALIZANDO
--

DELIMITER //
CREATE PROCEDURE proc_detalleCategoria(IN codigoAux CHAR(10),IN estadoAux VARCHAR(10))
BEGIN
	DECLARE existe INTEGER;
    DECLARE porcPreg DOUBLE;
    SET existe = (SELECT COUNT(*) FROM categoria WHERE codigo_cat = codigoAux);
    SET porcPreg = (((SELECT COUNT(*) FROM pregunta p INNER JOIN tema t ON p.codigo_tem = t.codigo_tem WHERE t.codigo_cat = codigoAux) * 100) / (SELECT COUNT(*) FROM pregunta));
    	IF estadoAux = 'nuevo' THEN
	        SELECT t.nombre_tem,t.codigo_tem,t.estado_tem,t.created_at,COUNT(p.codigo_pre) AS cantidadPregunta,COUNT(r.codigo_resp) AS cantidadRespuesta FROM tema t LEFT JOIN 						pregunta p ON p.codigo_tem = t.codigo_tem LEFT JOIN respuesta r ON p.codigo_pre=r.codigo_pre WHERE t.estado_tem = estadoAux AND t.codigo_tem = (SELECT 							taux.codigo_tem FROM tema taux WHERE t.codigo_tem = taux.codigo_tem) GROUP BY t.nombre_tem;
        ELSE
        	IF existe > 0 THEN
    	    	SELECT t.nombre_tem,t.codigo_tem,t.estado_tem,t.created_at,COUNT(p.codigo_pre) AS cantidadPregunta,COUNT(r.codigo_resp) AS cantidadRespuesta,porcPreg as porcentaje FROM tema t LEFT JOIN 							pregunta p ON p.codigo_tem = t.codigo_tem LEFT JOIN respuesta r ON p.codigo_pre=r.codigo_pre WHERE t.codigo_cat = codigoAux AND t.codigo_tem = (SELECT 				             taux.codigo_tem FROM tema taux WHERE t.codigo_tem = taux.codigo_tem) GROUP BY t.nombre_tem;
        	END IF;
        END IF;
END //
DELIMITER ;

--
--	#
--
DELIMITER //
CREATE PROCEDURE proc_detalleTema(IN codigoAux CHAR(10))
BEGIN
	DECLARE existe INTEGER;
    SET existe = (SELECT COUNT(*) FROM tema WHERE codigo_tem = codigoAux);
    IF existe > 0 THEN
    	SELECT t.nombre_tem,t.codigo_tem,t.estado_tem,t.created_at,COUNT(p.codigo_pre) AS cantidadPregunta,COUNT(r.codigo_resp) AS cantidadRespuesta,porcPreg as porcentaje 				FROM tema t LEFT JOIN pregunta p ON p.codigo_tem = t.codigo_tem LEFT JOIN respuesta r ON p.codigo_pre=r.codigo_pre WHERE t.codigo_cat = codigoAux AND t.codigo_tem = 				(SELECT taux.codigo_tem FROM tema taux WHERE t.codigo_tem = taux.codigo_tem);
    END IF;
END //
DELIMITER ;