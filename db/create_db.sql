DROP DATABASE IF EXISTS employee_management_v2;
CREATE DATABASE employee_management_v2;

USE employee_management_v2;

CREATE TABLE gender(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(15) NOT NULL
);


CREATE TABLE employees(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25) NOT NULL,
lastName VARCHAR(25) NOT NULL,
email VARCHAR(50) NOT NULL,
gender_id INT NOT NULL,
city VARCHAR(20),
streetAddress VARCHAR(30),
state VARCHAR(20),
age INT NOT NULL,
postalCode INT,
phoneNumber VARCHAR(15),
FOREIGN KEY (gender_id)  REFERENCES gender (id)
);

INSERT INTO gender(name)
VALUES
("Man"),
("Woman"),
("Non Binary"),
("Other");


CREATE TABLE users (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
email VARCHAR(100) UNIQUE NOT NULL
);
