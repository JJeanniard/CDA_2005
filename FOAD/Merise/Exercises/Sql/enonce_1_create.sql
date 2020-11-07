drop database if exists enonce_1;

create database enonce_1 char set utf8 collate utf8_general_ci;
use enonce_1;

create table personnes (
	id_personne int auto_increment PRIMARY KEY,
    nom varchar(30) not null,
    prenom varchar(30) not null,
    num_rue varchar(6) not null,
    rue varchar(10) not null,
    cp_ville int(5) not null,
    constraint ck_code_postal check (cp_ville<96000) 
) char set utf8 collate	utf8_general_ci;

create table vehicules (
	immatricule varchar(10) not null,
    marque varchar(30) not null,
    kilometrage int unsigned not null,
    id_personne int not null,
	primary key (immatricule),
    foreign key (id_personne) references personnes (id_personne)
) char set utf8 collate	utf8_general_ci;