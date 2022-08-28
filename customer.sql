CREATE DATABASE `mobix`;
use `mobix`;
CREATE TABLE customers (
	customerID int(6) NOT NULL AUTO_INCREMENT,
	first_name varchar(30) DEFAULT NULL,
	last_name varchar(30) DEFAULT NULL,
	email varchar(45) NOT NULL,
	phone char(12) NOT NULL,
	password varchar(20) NOT NULL,
	PRIMARY KEY (customerID)
	)
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4