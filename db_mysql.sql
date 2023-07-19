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
	budget_annuel_acte DECIMAL DEFAULT 0,
	code_acte VARCHAR(3) NOT NULL,
	est_actif INT DEFAULT 1
);

CREATE TABLE type_depense(
	id_type_depense INT PRIMARY KEY AUTO_INCREMENT,
	libelle_depense VARCHAR(80) NOT NULL,
	budget_annuel_depense DECIMAL DEFAULT 0,
	code_depense VARCHAR(3) NOT NULL,
	est_actif INT DEFAULT 1
);

CREATE TABLE acte_patient(
	id_acte_patient INT PRIMARY KEY AUTO_INCREMENT,
	id_patient INT NOT NULL,
	id_type_acte INT NOT NULL,
	montant_acte DECIMAL DEFAULT 0,
	date_acte DATE DEFAULT CURRENT_DATE(),
	FOREIGN KEY (id_patient) REFERENCES patient(id_patient),
	FOREIGN KEY (id_type_acte) REFERENCES type_acte(id_type_acte)
)ENGINE=InnoDB;

CREATE TABLE depense(
	id_depense INT PRIMARY KEY AUTO_INCREMENT,
	id_type_depense INT NOT NULL,
	montant_depense DECIMAL DEFAULT 0,
	date_depense DATE DEFAULT CURRENT_DATE(),
	FOREIGN KEY (id_type_depense) REFERENCES type_depense(id_type_depense)
)ENGINE=InnoDB;