--
-- Database creation
--

DROP DATABASE IF EXISTS employee_management_v2;
CREATE DATABASE employee_management_v2;
USE employee_management_v2;

--
-- Tables creation
--

CREATE TABLE gender(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(15) NOT NULL
);


CREATE TABLE employees(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(25) NOT NULL,
lastName VARCHAR(25),
email VARCHAR(50) NOT NULL,
gender_id INT,
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


INSERT INTO employees(name, lastName, email, gender_id, city, streetAddress, state, age, postalCode, phoneNumber)
VALUES
('Gannie', 'Matthews', 'gmatthews0@deliciousdays.com', 1, 'Xujia', '30070 Logan Trail', 'PD', 39, 45624, '733-588-7358'),
('Norman', 'Hayhoe', 'nhayhoe1@deliciousdays.com', 2, 'Mercaderes', '2 Blaine Road', 'GF', 99, 45652, '886-124-3336'),
('Gretal', 'Ricciardiello', 'gricciardiello2@oakley.com', 3, 'Căuşeni', '3 American Junction', 'SD', 3, 45653, '275-982-8020'),
('Darsie', 'Medforth', 'dmedforth3@paypal.com', 4, 'Armenia', '94 Sutherland Drive', 'ED', 34, 25657, '793-327-0708'),
('Roderigo', 'Hayselden', 'rhayselden4@myspace.com', 4, 'Ed', '138 Killdeer Junction', 'PV', 89, 67865, '640-856-7436'),
('Kimberly', 'Pesselt', 'kpesselt5@indiegogo.com', 3, 'Novozavidovskiy', '1359 Atwood Drive', 'GF', 53, 86525, '806-777-1495'),
('Rosana', 'Smidmore', 'rsmidmore6@taobao.com', 2, 'Episkopí', '7 Sutherland Circle', 'CA', 26, 75657, '402-506-6372'),
('Lexis', 'Kolakowski', 'lkolakowski7@google.com.hk', 1, 'Ciguna', '4 Golden Leaf Center', 'NY', 30, 94654, '510-370-8018'),
('Franny', 'Darinton', 'fdarinton8@jiathis.com', 1, 'Luleå', '4330 Spohn Lane', 'DF', 35, 45395, '158-777-8125'),
('Marietta', 'Lewerenz', 'mlewerenz9@networkadvertising.org', 2, 'Golek', '591 Warrior Terrace', 'GF', 57, 56785, '640-357-3877'),
('Pansie', 'Robinette', 'probinettea@ucoz.ru', 3, 'Xingtai', '7298 Oneill Park', 'GF', 64, 65676, '958-819-4517'),
('Rebekah', 'Douche', 'rdoucheb@geocities.jp', 3, 'Thanh Ba', '3 Fallview Plaza', 'HT', 55, 23132, '549-931-6701'),
('Carr', 'Andrez', 'candrezc@cbsnews.com', 4, 'Duifang', '92533 Bunker Hill Trail', 'CV', 90, 23456, '187-369-5190'),
('Jessie', 'Bool', 'jboold@hibu.com', 2, 'Kilmacanoge', '36781 Mallard Hill', 'HJ', 6, 36796, '633-971-9960'),
('Berk', 'Vieyra', 'bvieyrae@hhs.gov', 2, 'Leeds', '2105 Macpherson Court', 'SD', 50, 94312, '763-326-8251'),
('Doris', 'Sepey', 'dsepeyf@ihg.com', 4, 'Nglorogan', '4 Farmco Pass', 'AS', 3, 65798, '173-598-0609'),
('Noland', 'Amps', 'nampsg@hatena.ne.jp', 3, 'Xiwu', '51 Dapin Lane', 'SD', 29, 23221, '182-275-1361'),
('Othilia', 'Montacute', 'omontacuteh@gnu.org', 1, 'Seto', '860 Dapin Court', 'SD', 71, 21323, '198-173-2821'),
('Ansel', 'Blankley', 'ablankleyi@topsy.com', 3, 'Petawawa', '3 Rutledge Crossing', 'HY', 3, 63634, '617-300-0873'),
('Ulises', 'Tripett', 'utripettj@ehow.com', 2, 'Paraiso', '5 Nancy Drive', 'HG', 47, 64323, '938-209-6216');

INSERT INTO users (name, email, password)
VALUES ("admin", "admin@assemblerschool.com", "$2y$10$8Jq.8i9/FUIJOUCmA8AUx.Rxrhwcq3YbwfEBmP8Tg9YtsTTn.kHAK");