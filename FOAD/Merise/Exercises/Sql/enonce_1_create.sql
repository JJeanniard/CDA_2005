/*drop database enonce_1;*/

create database enonce_1;
use enonce_1;

create table personnes (
	id_personne int auto_increment not null,
    nom varchar(30) not null,
    prenom varchar(30) not null,
    num_rue varchar(6) not null,
    rue varchar(10) not null,
    cp_ville int(5) not null,
    primary key (id_personne)
);

create table vehicules (
	immatricule varchar(10) not null,
    marque varchar(30) not null,
    kilometrage int unsigned not null,
    id_personne int,
	primary key (immatricule),
    foreign key (id_personne) references personnes (id_personne)
);