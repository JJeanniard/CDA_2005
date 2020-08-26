drop database enonce_3;

create database enonce_3 char set utf8;
use enonce_3;

create table etudiants (
	id_etudiant int auto_increment,
    nom varchar(30) not null,
    prenom varchar(30) not null,
    date_entree timestamp not null default current_timestamp,
    primary key (id_etudiant)
);

create table matieres (
	id_matiere int auto_increment,
    lib_matiere varchar(30) unique not null,
    coefficient int(2) not null check (coefficient<10),
    primary key (id_matiere)
);

create table controles (
	id_etudiant int,
    id_matiere int,
    date_controle date,
    note smallint unsigned not null check (note<20),
    primary key (id_etudiant, id_matiere, date_controle),
    foreign key (id_etudiant) references etudiants (id_etudiant),
    foreign key (id_matiere) references matieres (id_matiere)
);