USE alsakkinen;

CREATE TABLE midterm_animals(animalID bigint AUTO_INCREMENT NOT NULL, animalName VARCHAR(35) NOT NULL, animalType VARCHAR(50) NOT NULL,
breed VARCHAR(50) NOT NULL, checkinDate DATETIME NOT NULL, checkoutDate DATETIME DEFAULT NULL, phone VARCHAR(16) NOT NULL,
email VARCHAR(35) DEFAULT NULL, notes VARCHAR(250) NOT NULL);

INSERT INTO midterm_animals
(animalID, animalName, animalType, breed, phone, notes)
VALUES
(1, "Hund", "Dog", "Golden", "+1(234)234-2341", "A good boy");

INSERT INTO midterm_animals
(animalID, animalName, animalType, breed, phone, notes)
VALUES
(2, "Mistress", "Cat", "Tabbi", "+1(534)233-2345", "A pretty kitty");

INSERT INTO midterm_animals
(animalID, animalName, animalType, breed, phone)
VALUES
(3, "Kyle", "Reptile", "Turtle", "+1(734)239-4893");

INSERT INTO midterm_animals
(animalID, animalName, animalType, breed, phone, email, notes)
VALUES
(4, "Marvin", "Cetacea", "Dolphin", "+1(322)123-7564", "trainer@gmail.com", "Wounded fin");