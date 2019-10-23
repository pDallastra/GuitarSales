CREATE TABLE GUITAR(
    id          SERIAL          NOT NULL PRIMARY KEY,
    name        VARCHAR(20)     NOT NULL UNIQUE,
    price       INT             NOT NULL

);

CREATE TABLE BODY(
    id          SERIAL          NOT NULL PRIMARY KEY,
    color       VARCHAR(20)     NOT NULL UNIQUE
);

CREATE TABLE PRODUCT_ORDER(
    id          SERIAL          NOT NULL PRIMARY KEY,
    img         text            NOT NULL,
    
    guitar_id   INT             NOT NULL REFERENCES guitar(id),
    color_id    INT             NOT NULL REFERENCES body(id)

);