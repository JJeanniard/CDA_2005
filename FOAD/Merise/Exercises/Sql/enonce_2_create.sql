drop database if exists enonce_2;
create database enonce_2;
use enonce_2;

create table etudiants (
	id_etudiant int auto_increment,
    nom varchar(30),
    prenom varchar(30),
    date_entree date,
    primary key (id_etudiant)
);

create table matieres (
	id_matiere int auto_increment,
    lib_matiere varchar(30) unique,
    coefficient int(2),
    primary key (id_matiere)
);

create table controles (
	id_etudiant int,
    id_matiere int,
    note smallint unsigned,
    primary key (id_etudiant, id_matiere),
    foreign key (id_etudiant) references etudiants (id_etudiant),
    foreign key (id_matiere) references matieres (id_matiere)
);