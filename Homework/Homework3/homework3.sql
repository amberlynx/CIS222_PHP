/**
 *                           Homework Assignment 3: homework3.sql
 *       Link: --
 *       Email: alsakkinen@hawkmail.hfcc.edu
 *       Written by Amber Sakkinen
 *       Last edited: 10.1.19
 *       Grade:   10/10
**/


USE alsakkinen;

CREATE TABLE hw3_teams(id int NOT NULL, name varchar(50) NOT NULL, recordedDate date);
CREATE TABLE hw3_members(id int NOT NULL, name varchar(50) NOT NULL, recordedDate date);

INSERT INTO hw3_teams(id, name, recordedDate) VALUES (234, 'Joe', '2019-09-24');
INSERT INTO hw3_teams(id, name, recordedDate) VALUES (666, 'Lilith', '1969-03-05');
INSERT INTO hw3_teams(id, name, recordedDate) VALUES (54, 'Sanders', '2015-03-06');
INSERT INTO hw3_teams(id, name, recordedDate) VALUES (95, 'Sanders', '1649-04-07');
INSERT INTO hw3_teams(id, name, recordedDate) VALUES (89, 'Jill Sanders', '2019-09-26');
INSERT INTO hw3_members(id, name, recordedDate) VALUES (111, 'Sarah', '2017-05-24');
INSERT INTO hw3_members(id, name, recordedDate) VALUES (125, 'Jerry', '2019-09-26');
INSERT INTO hw3_members(id, name, recordedDate) VALUES (45, 'Terry', '2019-09-26');
INSERT INTO hw3_members(id, name, recordedDate) VALUES (68, 'Mary Sue', '2017-05-23');

UPDATE hw3_members SET name = 'Sarah Jones' WHERE id = 111;

DELETE FROM hw3_teams WHERE id = 666;

SELECT * FROM hw3_teams WHERE name = 'Sanders' ORDER BY id;
SELECT * FROM hw3_members WHERE recordedDate = '2019-09-26' ORDER BY id;