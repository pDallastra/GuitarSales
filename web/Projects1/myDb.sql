-- CREATE TABLE BODY_COLOR(
--      bodyColor_id            SERIAL          NOT NULL PRIMARY KEY
--  ,   body_color              varchar(50)     NOT NULL

--  );

-- CREATE TABLE SHIELD_COLOR(
--      shieldColor_id          SERIAL          NOT NULL PRIMARY KEY
--  ,   shield_color            varchar(50)     NOT NULL

--  );

 CREATE TABLE PICKUP_COLOR(
     pickUpColor_id          SERIAL          NOT NULL PRIMARY KEY
 ,   pickUp_color            varchar(50)     NOT NULL

 );

 CREATE TABLE GUITAR(
    guitar_id          SERIAL          NOT NULL PRIMARY KEY 
    
,   guitar_name        varchar(50)     NOT NULL
,   guitar_price       INT             NOT NULL


);

-- CREATE TABLE CUSTOMER(
--     customer_id             SERIAL          NOT NULL PRIMARY KEY
-- ,   customer_name           varchar(50)     NOT NULL

-- );

-- CREATE TABLE ORDER(
--     order_id                SERIAL          NOT NULL PRIMARY KEY
-- ,   order_date              date            NOT NULL

-- ,   customer_id       	    INT		        NOT NULL
-- );