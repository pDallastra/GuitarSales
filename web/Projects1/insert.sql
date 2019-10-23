INSERT INTO GUITAR(name, price) VALUES('StratoCaster', 399);
INSERT INTO GUITAR(name, price) VALUES('TeleCaster', 349);
INSERT INTO GUITAR(name, price) VALUES('Jaguar', 299);

INSERT INTO BODY(color) VALUES ('White');
INSERT INTO BODY(color) VALUES ('Black');
INSERT INTO BODY(color) VALUES ('Green');

INSERT INTO PRODUCT_ORDER(guitar_id, color_id) VALUES (2,1);
INSERT INTO PRODUCT_ORDER(guitar_id, color_id) VALUES (3,1);
INSERT INTO PRODUCT_ORDER(guitar_id, color_id) VALUES (2,2);
INSERT INTO PRODUCT_ORDER(guitar_id, color_id) VALUES (1,2);
INSERT INTO PRODUCT_ORDER(guitar_id, color_id) VALUES (2,3);