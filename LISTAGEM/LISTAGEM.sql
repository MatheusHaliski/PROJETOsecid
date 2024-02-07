/* Logico_BD_Regionais: */
CREATE DATABASE Regionais;
DROP DATABASE Regionais;
USE Regionais;
DELETE FROM Regionais;
CREATE TABLE Regionais(
ID_Regional INT PRIMARY KEY,
Municipio VARCHAR(100),
Nome_Regional VARCHAR(100)
);
SELECT * FROM Regionais;
CREATE TABLE Gerentes (
    ID_Gerente INT AUTO_INCREMENT PRIMARY KEY,
    Nome_Gerente VARCHAR(100),
    FK_ID_Regional INT
);

CREATE TABLE Servidores (
    ID_Servidor INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(95),
    Data_Nascimento DATE,
    fk_Regional_ID_Regional INT,
    fk_Departamento_ID_Departamento INT,
    CONSTRAINT FK_REG1 FOREIGN KEY (fk_Regional_ID_Regional) REFERENCES Regionais(ID_Regional),
    CONSTRAINT FK_DEP1 FOREIGN KEY (fk_Departamento_ID_Departamento) REFERENCES Departamento(ID_Departamento)
);
SELECT * FROM Servidores;
CREATE TABLE Departamento (
    ID_Departamento INT AUTO_INCREMENT PRIMARY KEY,
    Nome_Departamento VARCHAR(95)
);

ALTER TABLE Gerentes ADD CONSTRAINT FK_GER1
FOREIGN KEY (FK_ID_Regional)
REFERENCES Regionais(ID_Regional);
SELECT * FROM Regionais;
INSERT INTO Regionais VALUES
(1,	'ALTAMIRA PARANA',	'CAMPO MOURÃO'),
(3,	'BARBOSA FERRAZ',	'CAMPO MOURÃO'),
(4,	'BOA ESPERANCA',	'CAMPO MOURÃO'),
(5,	'CAMPINA DA LAGOA',	'CAMPO MOURÃO'),
(6,	'CAMPO MOURAO',	'CAMPO MOURÃO'),
(7,	'CORUMBATAI DO SUL',	'CAMPO MOURÃO'),
(8,	'ENGENHEIRO BELTRAO',	'CAMPO MOURÃO'),
(9,	'FAROL',	'CAMPO MOURÃO'),
(10,	'FENIX',	'CAMPO MOURÃO'),
(11	,'GOIOERE',	'CAMPO MOURÃO'),
(12,	'IRETAMA',	'CAMPO MOURÃO'),
(13	,'JANIOPOLIS',	'CAMPO MOURÃO'),
(14,	'JURANDA',	'CAMPO MOURÃO'),
(15,	'LUIZIANA',	'CAMPO MOURÃO'),
(16,	'MAMBORE',	'CAMPO MOURÃO');

DELETE FROM Regionais;


INSERT INTO Regionais VALUES
(	1	,	"	ALTAMIRA DO PARANA	"	,	"	CAMPO MOURÃO 	"	),
(	2	,	"	ARARUNA	"	,	"	CAMPO MOURÃO	"	),
(	3	,	"	BARBOSA FERRAZ	"	,	"	CAMPO MOURÃO	"	),
(	4	,	"	BOA ESPERANCA	"	,	"	CAMPO MOURÃO	"	),
(	5	,	"	CAMPINA DA LAGOA	"	,	"	CAMPO MOURÃO	"	),
(	6	,	"	CAMPO MOURAO	"	,	"	CAMPO MOURÃO	"	),
(	7	,	"	CORUMBATAI DO SUL	"	,	"	CAMPO MOURÃO	"	),
(	8	,	"	ENGENHEIRO BELTRAO	"	,	"	CAMPO MOURÃO	"	),
(	9	,	"	FAROL	"	,	"	CAMPO MOURÃO	"	),
(	10	,	"	FENIX	"	,	"	CAMPO MOURÃO	"	),
(	11	,	"	GOIOERE	"	,	"	CAMPO MOURÃO	"	),
(	12	,	"	IRETAMA	"	,	"	CAMPO MOURÃO	"	),
(	13	,	"	JANIOPOLIS	"	,	"	CAMPO MOURÃO	"	),
(	14	,	"	JURANDA	"	,	"	CAMPO MOURÃO	"	),
(	15	,	"	LUIZIANA	"	,	"	CAMPO MOURÃO	"	),
(	16	,	"	MAMBORE	"	,	"	CAMPO MOURÃO	"	);

DROP TABLE Servidores1;
CREATE TABLE ServidoresCascavel (
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
DELETE FROM ServidoresCascavel;
SELECT * FROM ServidoresCascavel;
SELECT * FROM ServidoresCampoMourao;
DELETE FROM ServidoresCampoMourao;
CREATE TABLE ServidoresCampoMourao (
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
SELECT * FROM ServidoresCuritiba;
DELETE FROM ServidoresCuritiba;
CREATE TABLE ServidoresCuritiba(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
CREATE TABLE ServidoresGuarapuava(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
SELECT * FROM ServidoresGuarapuava;
DELETE FROM ServidoresGuarapuava;
CREATE TABLE ServidoresLondrina(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
DELETE FROM ServidoresLondrina;
SELECT * FROM ServidoresLondrina;
CREATE TABLE ServidoresMaringa(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
SELECT * FROM ServidoresMaringa;
DELETE FROM ServidoresMaringa;
CREATE TABLE ServidoresPatoBranco(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
SELECT * FROM ServidoresPatoBranco;
DELETE FROM ServidoresPatoBranco;
CREATE TABLE ServidoresPontaGrossa(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
SELECT * FROM ServidoresPontaGrossa;
SELECT * FROM ServidoresSantoAntoniodaPlatina;
DELETE FROM ServidoresPontaGrossa;
CREATE TABLE ServidoresSantoAntoniodaPlatina(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
DELETE FROM ServidoresUmuarama;
SELECT * FROM ServidoresUmuarama;
CREATE TABLE ServidoresUmuarama(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
CREATE TABLE ServidoresUniaodaVitoria(
ID_Servidor INT PRIMARY KEY,
Nome VARCHAR(100),
Funcao VARCHAR(100),
Ramal VARCHAR(100),
Celular VARCHAR(100),
Email VARCHAR(100)
);
SELECT * FROM ServidoresUniaodaVitoria;
DELETE FROM ServidoresUniaodaVitoria;

CREATE TABLE data
(
ID INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
age  date,
departament VARCHAR(100)
);
INSERT data(name,age,departament) VALUES
('Diego','1998-02-13','RH'),
('Ana','2002-02-20','Financeiro');
DELETE FROM data;

SELECT * FROM data;
SELECT ID AS 'ID',name AS 'Funcionario',DATE_FORMAT(age,'%d-%m-%Y') AS 'data_formatada' ,departament AS 'dep' 
FROM data;
SELECT COUNT(ID_Servidor) AS Total FROM ServidoresCuritiba;
SELECT * FROM ServidoresCascavel;
SELECT COUNT(*) AS Total,ID_Servidor AS ID,Nome,Funcao,Ramal,Celular,Email FROM ServidoresCascavel WHERE Funcao LIKE 'E%';
SELECT ID_Servidor AS ID,Nome,Funcao,Ramal,Celular,Email FROM ServidoresCascavel WHERE Funcao LIKE 'E%' AND Nome LIKE 'M%';