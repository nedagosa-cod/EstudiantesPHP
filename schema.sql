CREATE DATABASE IF NOT EXISTS atento;
use Atento;

CREATE TABLE alumnos (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    names varchar(255) NOT NULL,
    last_names varchar(255) NOT NULL,
    age int NOT NULL,
    email varchar(255) NOT NULL,
    phone int NOT NULL,
    course varchar(10)
);