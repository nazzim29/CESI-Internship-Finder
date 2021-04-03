#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Entreprise
#------------------------------------------------------------

CREATE TABLE Entreprise(
        Id_entreprise    Int  Auto_increment  NOT NULL ,
        Secteur_activite Varchar (50) NOT NULL ,
        Localite         Varchar (50) NOT NULL ,
        Raison_social    Varchar (50) NOT NULL ,
        Email            Varchar (10) NOT NULL,
        Nb_visite        Int NOT NULL
    ,CONSTRAINT Entreprise_Idx UNIQUE (Raison_social,Email)
    ,CONSTRAINT Entreprise_PK PRIMARY KEY (Id_entreprise)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Centre
#------------------------------------------------------------

CREATE TABLE Centre(
        Id_centre Int  Auto_increment  NOT NULL ,
        Nom       Varchar (10) NOT NULL
    ,CONSTRAINT Centre_Idx UNIQUE (Nom)
    ,CONSTRAINT Centre_PK PRIMARY KEY (Id_centre)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Permission
#------------------------------------------------------------

CREATE TABLE Permission(
        Id_permission Int  Auto_increment  NOT NULL ,
        Nom           Varchar (50) NOT NULL ,
        Description   Varchar (50) NOT NULL
    ,CONSTRAINT Permission_Idx UNIQUE (Nom,Description)
    ,CONSTRAINT Permission_PK PRIMARY KEY (Id_permission)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Offre
#------------------------------------------------------------

CREATE TABLE Offre(
        Id_offre                     Int  Auto_increment  NOT NULL ,
        Titre                        Varchar (50) NOT NULL ,
        Description                  Varchar (255) NOT NULL ,
        competences                  Varchar (255) NOT NULL,
        Duree_stage                  Int NOT NULL ,
        Base_remuneration            DECIMAL (15,3)  NOT NULL ,
        Nb_places                    Int NOT NULL ,
        Nb_visite                    Int NOT NULL ,
        Date_publication             Datetime NOT NULL ,
        Id_utilisateur               Int NOT NULL ,
        Id_entreprise                Int NOT NULL
    ,CONSTRAINT Offre_Idx UNIQUE (Titre)
    ,CONSTRAINT Offre_PK PRIMARY KEY (Id_offre)
)ENGINE=InnoDB;



#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        Id_utilisateur       Int  Auto_increment  NOT NULL ,
        Nom                  Varchar (50) NOT NULL ,
        Prenom               Varchar (50) NOT NULL ,
        Password             Varchar (50) NOT NULL ,
        Type                 Varchar (50) NOT NULL ,
        Promotion            Varchar (50) NOT NULL ,
        Date_creation        Datetime NOT NULL ,
        Nb_visite            Int NOT NULL ,
        Email                Varchar (50) NOT NULL ,
        Id_centre            Int ,
        Id_Createur          Int NOT NULL
    ,CONSTRAINT Utilisateur_Idx UNIQUE (Nom,Prenom,Email)
    ,CONSTRAINT Utilisateur_PK PRIMARY KEY (Id_utilisateur)
)ENGINE=InnoDB;



#------------------------------------------------------------
# Table: Note
#------------------------------------------------------------

CREATE TABLE Note(
        Id_entreprise  Int NOT NULL ,
        Id_utilisateur Int NOT NULL ,
        Note           Int NOT NULL ,
        Commentaire    Varchar (50) NOT NULL
    ,CONSTRAINT Note_PK PRIMARY KEY (Id_entreprise,Id_utilisateur)
)ENGINE=InnoDB;




#------------------------------------------------------------
# Table: Postule
#------------------------------------------------------------

CREATE TABLE Postule(
        Id_utilisateur   Int NOT NULL ,
        Id_offre         Int NOT NULL ,
        Date_postulation Datetime NOT NULL ,
        Fiche_validation Varchar (50) ,
        Convention_stage Varchar (50) ,
        Etat             Varchar (50)
    ,CONSTRAINT Postule_PK PRIMARY KEY (Id_utilisateur,Id_offre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Avoir
#------------------------------------------------------------

CREATE TABLE Avoir(
        Id_permission  Int NOT NULL ,
        Id_utilisateur Int NOT NULL
    ,CONSTRAINT Avoir_PK PRIMARY KEY (Id_permission,Id_utilisateur)
)ENGINE=InnoDB;



#------------------------------------------------------------
# Table: Souhaite
#------------------------------------------------------------

CREATE TABLE Souhaite(
        Id_offre       Int NOT NULL ,
        Id_utilisateur Int NOT NULL
    ,CONSTRAINT Souhaite_PK PRIMARY KEY (Id_offre,Id_utilisateur)
)ENGINE=InnoDB;

alter table souhaite add CONSTRAINT Souhaite_Offre_FK FOREIGN KEY (Id_offre) REFERENCES Offre(Id_offre);
alter table souhaite add CONSTRAINT Souhaite_Utilisateur0_FK FOREIGN KEY (Id_utilisateur) REFERENCES Utilisateur(Id_utilisateur);
alter table note add CONSTRAINT Note_Entreprise_FK FOREIGN KEY (Id_entreprise) REFERENCES Entreprise(Id_entreprise);
alter table note add CONSTRAINT Note_Utilisateur0_FK FOREIGN KEY (Id_utilisateur) REFERENCES Utilisateur(Id_utilisateur);
alter table avoir add CONSTRAINT Avoir_Permission_FK FOREIGN KEY (Id_permission) REFERENCES Permission(Id_permission);
alter table avoir add CONSTRAINT Avoir_Utilisateur0_FK FOREIGN KEY (Id_utilisateur) REFERENCES Utilisateur(Id_utilisateur);
alter table postule add CONSTRAINT Postule_Utilisateur_FK FOREIGN KEY (Id_utilisateur) REFERENCES Utilisateur(Id_utilisateur);
alter table postule add  CONSTRAINT Postule_Offre0_FK FOREIGN KEY (Id_offre) REFERENCES Offre(Id_offre);
alter table utilisateur add CONSTRAINT Createur_FK FOREIGN KEY (Id_Createur) REFERENCES Utilisateur(Id_utilisateur);
alter table utilisateur add CONSTRAINT Utilisateur_Centre_FK FOREIGN KEY (Id_centre) REFERENCES Centre(Id_centre);
alter table offre add CONSTRAINT Offre_Utilisateur_FK FOREIGN KEY (Id_utilisateur) REFERENCES Utilisateur(Id_utilisateur);
alter table offre add CONSTRAINT Offre_Entreprise0_FK FOREIGN KEY (Id_entreprise) REFERENCES Entreprise(Id_entreprise);