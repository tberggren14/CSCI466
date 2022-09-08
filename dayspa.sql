CREATE TABLE Employees (
employeeID INT NOT NULL, 
FullName CHAR(30) NOT NULL, 
email CHAR(30) NOT NULL, 
PhoneNumber CHAR(10) NOT NULL, 
StreetAddress CHAR(40) NOT NULL, 
specialty CHAR(10) NOT NULL, 
JobTitle CHAR(15) NOT NULL, 
Pay DECIMAL(2,2) NOT NULL, 

PRIMARY KEY (employeeID)
);

CREATE TABLE Service (
serviceID INT, 
type CHAR(30) NOT NULL, 
price DECIMAL(2,2), 

PRIMARY KEY (serviceID)
);

CREATE TABLE Client (
clientID INT, 
FullName CHAR(30) NOT NULL, 
email CHAR(30) NOT NULL, 
PhoneNumber CHAR(10), 
StreetAddress CHAR(40), 

PRIMARY KEY (clientID)
);

CREATE TABLE Type_Service (
serviceID INT, 
manicure INT,
massage INT, 
wax INT, 
hair INT, 

PRIMARY KEY (serviceID),
FOREIGN KEY (serviceID) REFERENCES Service(serviceID)
);

CREATE TABLE ScheduleApp (
date Date, 
clientID INT, 
employeeID INT, 
serviceID INT,  

PRIMARY KEY (date),
FOREIGN KEY (clientID) REFERENCES Client(clientID),
FOREIGN KEY (employeeID) REFERENCES Employees(employeeID),
FOREIGN KEY (serviceID) REFERENCES Service(serviceID)
);


