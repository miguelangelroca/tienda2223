DROP TABLE IF EXISTS articulos CASCADE;

CREATE TABLE articulos (
    id              bigserial       PRIMARY KEY,
    CODIGO          varchar(13)     NOT NULL UNIQUE,
    descripcion     varchar(255)    NOT NULL,
    precio          numeric(7, 2)   NOT NULL
);

-- Carga inicial de datos:

INSERT INTO articulos (codigo, descripcion, precio)
    VALUES ('2563147894523', 'Yogur piña', 200.50),
           ('8965328174529', 'Tigretón', 50.10),
           ('7528419634951', 'Disco duro SSD 500Gb', 150.30);