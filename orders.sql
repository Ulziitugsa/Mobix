use `mobix`;
CREATE TABLE orders	 (
	orderID varchar(40) NOT NULL, 
	email varchar(30) NOT NULL,
    total_amount decimal(6,2) NOT NULL,
	status varchar(15) NOT NULL,
	PRIMARY KEY (orderID)
	)
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4