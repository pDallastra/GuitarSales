CREATE DATABASE guitarSales;

CREATE TABLE PRODUCT(
    product_id          SERIAL          NOT NULL PRIMARY KEY 
,   product_name        varchar(50)     NOT NULL  

-- ,   bodyColor_color          varchar(50)     NOT NULL
-- ,   shieldColor_color        varchar(50)     NOT NULL
-- ,   pickUpColor_color        varchar(50)     NOT NULL   

);

-- CREATE TABLE BODY_COLOR(
--     bodyColor_id            SERIAL          NOT NULL PRIMARY KEY
-- ,   body_color              varchar(50)     NOT NULL

-- );

-- CREATE TABLE SHIELD_COLOR(
--     shieldColor_id          SERIAL          NOT NULL PRIMARY KEY
-- ,   shield_color            varchar(50)     NOT NULL

-- );

-- CREATE TABLE PICKUP_COLOR(
--     pickUpColor_id          SERIAL          NOT NULL PRIMARY KEY
-- ,   shield_color            varchar(50)     NOT NULL

-- );

-- CREATE TABLE CUSTOMER(
--     customer_id             SERIAL          NOT NULL PRIMARY KEY
-- ,   customer_name           varchar(50)     NOT NULL

-- );

-- CREATE TABLE ORDER(
--     order_id                SERIAL          NOT NULL PRIMARY KEY
-- ,   order_date              date            NOT NULL

-- ,   customer_id       	    INT		        NOT NULL
-- );