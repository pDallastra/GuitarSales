CREATE TABLE GUITAR(
    id          SERIAL          NOT NULL PRIMARY KEY,
    name        VARCHAR(20)     NOT NULL UNIQUE,
    price       INT             NOT NULL

);

CREATE TABLE BODY(
    id          SERIAL          NOT NULL PRIMARY KEY,
    color       VARCHAR(20)     NOT NULL UNIQUE
);

CREATE TABLE GUITAR_BODY(
    id          SERIAL          NOT NULL PRIMARY KEY,
    img         TEXT            NOT NULL,

    guitar_id   INT             NOT NULL REFERENCES guitar(id),
    color_id    INT             NOT NULL REFERENCES body(id)

);

CREATE TABLE PRODUCT_ORDER(
    id          SERIAL          NOT NULL PRIMARY KEY,

    name        TEXT            NOT NULL,
    email       TEXT            NOT NULL,
    model       VARCHAR(20)     NOT NULL,
    color       VARCHAR(20)     NOT NULL,
    price       INT             NOT NULL
);