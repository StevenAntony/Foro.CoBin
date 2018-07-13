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