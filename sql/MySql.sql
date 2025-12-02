CREATE TABLE habitats (
    IdHab INT AUTO_INCREMENT PRIMARY KEY,
    NomHab VARCHAR(100) NOT NULL,
    Description_Hab TEXT
);

CREATE TABLE animal (
    IDAnim INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(100) NOT NULL,
    Type_alimentaire VARCHAR(20) NOT NULL,
    Image VARCHAR(255),
    Habitat_ID INT,
    FOREIGN KEY (Habitat_ID) REFERENCES habitats (IdHab)
);

INSERT INTO
    habitats (NomHab, Description_Hab)
VALUES (
        "Savane",
        "Grande zone chaude avec beaucoup d’herbe et quelques arbres."
    ),
    (
        "Jungle",
        "Forêt très dense, humide et pleine de végétation."
    ),
    (
        "Désert",
        "Endroit très sec avec peu de plantes et de fortes chaleurs."
    ),
    (
        "Océan",
        "Grande zone d’eau salée où vivent beaucoup d’animaux marins."
    );

INSERT INTO
    animal (
        Nom,
        Type_alimentaire,
        Image,
        Habitat_ID
    )
VALUES (
        'Lion',
        'Carnivore',
        '/img/Lion.png',
        1
    ),
    (
        'éléphant',
        'Herbivore',
        '/img/éléphant.png',
        1
    ),
    (
        'Tiger',
        'Carnivore',
        '/img/Tiger.png',
        2
    ),
    (
        'Singe',
        'Carnivore',
        '/img/Singe.png',
        2
    ),
    (
        'Chameau',
        'Herbivore',
        '/img/Chameau.png',
        3
    ),
    (
        'Tiger',
        'Carnivore',
        '/img/Fennec.png',
        3
    ),
    (
        'Dauphin',
        'Carnivore',
        '/img/Dauphin.png',
        4
    ),
    (
        'Requin',
        'Carnivore',
        '/img/Requin.png',
        4
    );

UPDATE animal SET NomH = 'Lion Africain' WHERE IDAnim = 1;

UPDATE habitats SET NomHab = "Savana" WHERE IdHab = 1;

DELETE FROM animal WHERE IDAnim = "";

select * from animal;

select * from habitats;

SELECT Nom, Image, NomHab
FROM habitats
    LEFT JOIN animal ON animal.Habitat_ID = habitats.IdHab
WHERE
    habitats.IdHab = 4;

ALTER TABLE animal RENAME COLUMN IDAnir TO IDAnim;