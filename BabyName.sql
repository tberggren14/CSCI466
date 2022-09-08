--Trevor Berggren
--Z1906236
--csci466

USE BabyName;   -- using BabyName database

SHOW TABLES;    -- shows all tables

SELECT DISTINCT name, year      --slecting name and year from babyname
    FROM BabyName
    WHERE year = 2001           -- where year is 2001
    LIMIT 50;

SHOW CREATE TABLE BabyName;     -- shoes all tables and its vairbles

 SELECT DISTINCT name, year     -- slecting name and year from babyname
    FROM BabyName
    WHERE name = 'Trevor'       -- where name is Trevor
    ORDER BY year ASC LIMIT 50;
    
SELECT DISTINCT place           -- shows all the names of place
    FROM BabyName
    LIMIT 50;

(SELECT MAX(COUNT) AS most_popular_1982,name    -- sets the most popular
    FROM BabyName
    WHERE year = 1982 and                       -- where year is 1982 and female
    gender = 'F'
    GROUP BY name
    ORDER BY most_popular_1982 DESC LIMIT 1)        
UNION                                              -- connects the 2 queries
    (SELECT MAX(COUNT) AS most_popular_male,name    -- same as one above but for male
    FROM BabyName
    WHERE year = 1982 AND
    gender = 'M'
    GROUP BY name
    ORDER BY most_popular_male DESC LIMIT 1);


SELECT name,COUNT(*),year                       -- dispays names like trevor
    FROM BabyName
    WHERE name LIKE 'Trev%'
    GROUP BY name
    ORDER BY name ASC,                          -- orders in ASC
    COUNT(*),                               
    year LIMIT 50;

SELECT COUNT(*) AS Total_rows                   -- total rows in database
    FROM BabyName;

(SELECT COUNT(*) AS Number_of_names_1963        -- total amount of names for males in 1963
    FROM BabyName
    WHERE year = 1963 AND
    gender = 'M') 
UNION                                           -- connects the 2 
    (SELECT COUNT(*) AS Female_Names
    FROM BabyName
    WHERE year = 1963 AND                       -- same as above but for females
    gender = 'F'
    ORDER BY COUNT(*),COUNT(*) LIMIT 2);




SELECT COUNT(*) AS Number_of_names_1978
   FROM BabyName
    WHERE year = 1978
    ORDER BY Number_of_names_1978;






    