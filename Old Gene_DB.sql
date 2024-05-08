-- Use my database
USE aoludipe;

DROP TABLE IF EXISTS GeneProteinLink;
DROP TABLE IF EXISTS NucleotideData;
DROP TABLE IF EXISTS Protein;
DROP TABLE IF EXISTS Gene;

CREATE TABLE Gene (
    Gene_ID INT PRIMARY KEY AUTO_INCREMENT,
    Gene_Name VARCHAR(255),
    Gene_Description TEXT
);

CREATE TABLE Protein (
    Protein_ID INT PRIMARY KEY AUTO_INCREMENT,
    Protein_Name VARCHAR(255),
    Protein_Description TEXT
);

CREATE TABLE NucleotideData (
    Nucleotide_ID INT PRIMARY KEY AUTO_INCREMENT,
    Sequence TEXT,
    Gene_ID INT,
    FOREIGN KEY (Gene_ID) REFERENCES Gene(Gene_ID)
);

CREATE TABLE GeneProteinLink (
    Link_ID INT PRIMARY KEY AUTO_INCREMENT,
    Gene_ID INT,
    Protein_ID INT,
    FOREIGN KEY (Gene_ID) REFERENCES Gene(Gene_ID),
    FOREIGN KEY (Protein_ID) REFERENCES Protein(Protein_ID)
);
