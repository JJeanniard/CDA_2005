drop database enonce_3;

create database enonce_3 char set utf8;
use enonce_3;

create table etudiants (
	id_etudiant int auto_increment not null primary key,
    nom varchar(30) not null,
    prenom varchar(30) not null,
    date_entree timestamp not null default current_timestamp /* date & heure actuel, si aucune est definie */
);

create table matieres (
	id_matiere int auto_increment,
    lib_matiere varchar(30) unique not null,
    coefficient int(2) not null check (coefficcient<10),
    primary key (id_matiere)
);

create table controles (
	id_etudiant int auto_increment,
    id_matiere int not null,
    date_controle date not null,
    note smallint unsigned not null check(note<20),
    primary key (id_etudiant, id_matiere, date_controle),
    foreign key (id_etudiant) references etudiants (id_etudiant),
    foreign key (id_matiere) references matieres (id_matiere)
);