# FinalBasesDeDatos
Proyecto final Base de Datos


-----Tablas-------


CREATE TABLE observador (numero_de_id NUMBER(10) PRIMARY KEY CHECK( numero_de_id>0 ), nombre VARCHAR(30) NOT NULL, fecha_nacimiento DATE NOT NULL, email VARCHAR(20) NOT NULL UNIQUE, contraseña VARCHAR(20) NOT NULL, tipo VARCHAR(10) CHECK( tipo IN ('observador', 'comprador', 'vendedor')) NOT NULL );

CREATE TABLE vendedor (numero_de_identificacion NUMBER(10) PRIMARY KEY CHECK( numero_de_identificacion>0 ) REFERENCES observador, codigo_vendedor VARCHAR(11) NOT NULL UNIQUE);

CREATE TABLE comprador (numero_de_identificacion NUMBER(10) PRIMARY KEY CHECK( numero_de_identificacion>0 ) REFERENCES observador , codigo_comprador VARCHAR(11) NOT NULL UNIQUE);

CREATE TABLE moderador (codigo_moderador VARCHAR(15) PRIMARY KEY, nombre VARCHAR(30) NOT NULL);

CREATE TABLE articulo (codigo_articulo VARCHAR(10) PRIMARY KEY, nombre VARCHAR(30) NOT NULL, descripcion VARCHAR(150) NOT NULL, estado VARCHAR(15) CHECK( estado IN ('vendido', 'sin subastar', 'en subasta') NOT NULL, codigo_propietario VARCHAR(11) NOT NULL);  
#clave foranea a subasta?#

CREATE TABLE puja (id_puja VARCHAR(15) PRIMARY KEY, valor NUMBER(10) NOT NULL CHECK( valor>0 ), codigo_pujador VARCHAR(15) NOT NULL, codigo_subasta VARCHAR(15) NOT NULL REFERENCES subasta);

CREATE TABLE subasta (codigo_subasta VARCHAR(15) PRIMARY KEY, valor_inicial NUMBER(10) NOT NULL, puja_mas_alta VARCHAR(15) REFERENCES puja, estado VARCHAR(10) CHECK( estado IN ('abierta', 'cerrada')) NOT NULL, fecha_de_inicio DATE NOT NULL, codigo_moderador VARCHAR(15) NOT NULL REFERENCES moderador, vendedor VARCHAR(15) NOT NULL REFERENCES vendedor);

CREATE TABLE visita (id_visita VARCHAR(15) PRIMARY KEY, id_observador VARCHAR(15) NOT NULL REFERENCES observador, codigo_subasta VARCHAR(15) NOT NULL REFERENCES subasta, fecha DATE NOT NULL);

CREATE TABLE reputacion (codigo_vendedor VARCHAR(15) REFERENCES vendedor, puntuacion NUMBER(2,1) NOT NULL, calificada_por VARCHAR(15) NOT NULL, tipo_calificador VARCHAR(15) NOT NULL CHECK(tipo_calificador IN ('vendedor', 'comprador')));

CREATE TABLE comentario_articulo (numero_comentario VARCHAR(15) PRIMARY KEY, descripcion VARCHAR(150) NOT NULL, fecha DATE NOT NULL, hecho_por NUMBER(10) NOT NULL REFERENCES observador, articulo_comentado VARCHAR(10) NOT NULL REFERENCES articulo);

CREATE TABLE comentario_reputacion (numero_comentario VARCHAR(15) PRIMARY KEY, descripcion VARCHAR(150) NOT NULL, fecha DATE NOT NULL);
#poner comentario_reputacion?# 
