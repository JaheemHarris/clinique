CREATE DATABASE clinique;

USE clinique;

CREATE TABLE patient(
	id_patient INT PRIMARY KEY AUTO_INCREMENT,
	nom VARCHAR(120) NOT NULL,
	genre CHAR(1),
	date_naissance DATE NOT NULL,
	remboursement BOOLEAN DEFAULT TRUE,
	est_actif INT DEFAULT 0
);


CREATE TABLE type_acte(
	id_type_acte INT PRIMARY KEY AUTO_INCREMENT,
	libelle_acte VARCHAR(80) NOT NULL,
	est_actif INT DEFAULT 1
);

CREATE TABLE type_depense(
	id_type_depense INT PRIMARY KEY AUTO_INCREMENT,
	libelle_depense VARCHAR(80) NOT NULL,
	est_actif INT DEFAULT 1
);