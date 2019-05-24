DROP DATABASE IF EXISTS AnimalShelters;

CREATE DATABASE AnimalShelters;

USE AnimalShelters;

CREATE TABLE Locations
(
	ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(50) NOT NULL,
	Address VARCHAR(100),
	Website VARCHAR(100),
	Phone VARCHAR(20)
);

CREATE TABLE Contacts
(
	ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(30),
	Email VARCHAR(30),
	Message VARCHAR(144)
);

INSERT INTO Locations (Name, Address, Website, Phone) VALUES
	('Friends For Life',
	 '107 E. 22nd Street Houston, TX 77008',
	 'http://www.friends4life.org',
	 'NONE');

INSERT INTO Locations (Name, Address, Website, Phone) VALUES
	('Houston SPCA',
	 '900 Portway Drive Houston, TX 77024',
	 'http://www.houstonspca.org',
	 '(713) 869-SPCA');

INSERT INTO Locations (Name, Address, Website, Phone) VALUES
	('BARC',
	 '3300 Carr Street, Houston TX 77026',
	 'http://www.houstontx.gov/barc/',
	 '713-837-0311');