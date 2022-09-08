--Trevor Berggren
--Z1906236
--csci466

DROP TABLE IF EXISTS Visit;
DROP TABLE IF EXISTS Dog;


CREATE TABLE Dog (
    DogID MEDIUMINT NOT NULL AUTO_INCREMENT, 
    Breed CHAR(30), 
    Name CHAR(15),
    Weight INT,

    PRIMARY KEY (DogID)
);

INSERT INTO Dog
    (Breed)
    VALUES
        ('German Shepard'), ('Lab'), ('Husky'), ('Golden retriever'), ('Pug'), ('Pit bull');

INSERT INTO Dog
    (Name)
    VALUES
        ('Lulo'),( 'Ralph'), ('Chucky'), ('Teddy'), ('Lime'), ('Capone');

INSERT INTO Dog
    (Weight)
    VALUES
        ('40'), ('50'), ('70'),('65'), ('25'), ('45');

DESCRIBE Dog;
SELECT * FROM Dog;

CREATE TABLE Visit (
    VisitID MEDIUMINT NOT NULL AUTO_INCREMENT, 
    DogID MEDIUMINT,
    Date DATE, 
    HowLong INT,

    PRIMARY KEY (VisitID),
    FOREIGN KEY (DogID) REFERENCES Dog(DogID)
);

INSERT INTO Visit
    (DogID)
    VALUES
        ('1'), ('2'), ('3'), ('4'), ('5'), ('6'), ('7'), ('8'),('9'), ('10');

INSERT INTO Visit
    (DATE)
    VALUES
        ('2021-10-27'), ('2021-10-29'), ('2021-10-31'), ('2021-11-05'), ('2021-11-10'), ('2021-11-12'),
         ('2021-11-13'), ('2021-11-15'),('2021-11-17'),( '2021-11-19');

INSERT INTO Visit
    (HowLong)
    VALUES
        ('1'), ('2'), ('3'), ('2'), ('1'), ('3'), ('1'), ('2'), ('2'),('4');

DESCRIBE Visit;
SELECT * FROM Visit;

ALTER TABLE Visit ADD Bill DECIMAL(5,2);

UPDATE Visit
    SET Bill = 50.50
    WHERE HowLong = 1;

UPDATE Visit
    SET Bill = 101
    WHERE HowLong = 2;

SELECT * FROM Visit;