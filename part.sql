DROP TABLE IF EXISTS Suppliers;
DROP TABLE IF EXISTS Parts;
DROP TABLE IF EXISTS SuppliersParts;

CREATE TABLE Suppliers (
    Sid CHAR(2) NOT NULL, 
    SNAME CHAR(20) NOT NULL, 
    STATUS INT NOT NULL,
    CITY CHAR(20) NOT NULL,

    PRIMARY KEY (Sid)
);

CREATE TABLE Parts (
    Pid CHAR(2) NOT NULL, 
    PNAME CHAR(20) NOT NULL, 
    COLOR CHAR(10) NOT NULL,
    WEIGHT INT NOT NULL,

    PRIMARY KEY (Pid)
);

CREATE TABLE SuppliersParts (
    Sid CHAR(2) NOT NULL, 
    Pid CHAR(2) NOT NULL, 
    QTY INT NOT NULL,

    FOREIGN KEY (Sid) REFERENCES Suppliers(Sid),
    FOREIGN KEY (Pid) REFERENCES Parts(Pid)
);

INSERT INTO Suppliers
    (Sid)
    VALUES
        ('S1'), ('S2'), ('S3'), ('S4'), ('S5');

INSERT INTO Suppliers
    (SNAME)
    VALUES
        ('Smith'), ('Jones'), ('Blake'), ('Clark'), ('Adams');

INSERT INTO Suppliers
    (STATUS)
    VALUES
        ('20'), ('10'), ('30'), ('20'), ('30');

INSERT INTO Suppliers
    (CITY)
    VALUES
        ('London'), ('Paris'), ('Paris'), ('London'), ('Athens');

INSERT INTO Parts
    (Pid)
    VALUES
        ('P1'), ('P2'), ('P3'), ('P4'), ('P5'), ('P6');

INSERT INTO Parts
    (PNAME)
    VALUES
        ('Nut'), ('Bolt'), ('Screw'), ('Screw'), ('Cam'), ('Cog');

INSERT INTO Parts
    (COLOR)
    VALUES
        ('Red'), ('Green'), ('Blue'), ('Red'), ('Blue'), ('Red');

INSERT INTO Parts
    (WEIGHT)
    VALUES
        ('12'), ('17'), ('17'), ('14'), ('12'), ('19');

INSERT INTO SuppliersParts
    (Sid)
    VALUES
        ('S1'), ('S1'), ('S1'), ('S1'), ('S1'), ('S1'), ('S2'), ('S2'), ('S3'), ('S4'), ('S4'), ('S4');

INSERT INTO SuppliersParts
    (Pid)
    VALUES
        ('P1'), ('P2'), ('P3'), ('P4'), ('P5'), ('P6'), ('P1'), ('P2'), ('P2'), ('P2'), ('P4'), ('P5');

INSERT INTO SuppliersParts
    (QTY)
    VALUES
        ('300'), ('200'), ('400'), ('200'), ('100'), ('100'), ('300'), ('400'), ('200'), ('200'), ('300'), ('400');
