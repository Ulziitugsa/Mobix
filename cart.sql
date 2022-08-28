use `mobix`;
CREATE TABLE cart (
	customerID int(6) NOT NULL,
	productID int(6) NOT NULL,
    qty int(2) NOT NULL,
	status varchar(10) NOT NULL,
    FOREIGN KEY (CustomerID) REFERENCES customers(CustomerID),
    FOREIGN KEY (ProductID) REFERENCES products(ProductID)
	)
	ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4