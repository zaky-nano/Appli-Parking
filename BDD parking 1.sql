CREATE TABLE Membres (
	id_membre int(3),
	nom_membre varchar(30),
	prenom_membre varchar(30),
	email_membre varchar(30),
	mdp varchar(30),
	CONSTRAINT PK_membre primary key id_membre
);


CREATE TABLE utilisateurs (
	id_membre int(3),
	nom_membre varchar(30),
	prenom_membre varchar(30),
	email_membre varchar(30),
	mdp varchar(30),
	statut_membre varchar(15),
	date_inscription date,
	CONSTRAINT PK_utilisateur primary key id_membre
	CONSTRAINT FK_utilisateur foreign key id_membre references (membre)id_membre
);

CREATE TABLE admin (
	id_membre int(3),
	nom_membre varchar(30),
	prenom_membre varchar(30),
	email_membre varchar(30),
	mdp varchar(30),
	CONSTRAINT PK_utilisateur primary key id_membre
	CONSTRAINT FK_utilisateur foreign key id_membre references (membre)id_membre
);

CREATE TABLE place_parking (
	num_place int(3),
	date_debut date,
	duree_place date,
	disponible boolean,
	CONSTRAINT PK_place_parking primary key num_place
);

CREATE TABLE duree_occupee (
	num_place int(3),
	date_debut date, 
	duree_place date, 
	CONSTRAINT PK_duree_occupee primary key num_place,
	CONSTRAINT FK_place_parking foreign key num_place references (place_parking)
);

CREATE TABLE liste_attente (
	Rang int(3),
	id_membre int(3),
	CONSTRAINT PK_place_parking primary key num_place,
	CONSTRAINT FK_place_parking foreign key id_membre references (membre)id_membre
);




