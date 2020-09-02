drop database if exists enonce_5;
create database enonce_5 charset utf8 collate utf8_general_ci;
use enonce_5;

create table rayons (
	nom_rayon varchar(50) not null,
    primary key (nom_rayon)
);

create table magasins (
	code_magasin int not null,
    nom_magasin varchar(30) not null,
    primary key (code_magasin)
);

create table articles (
	code_article int not null primary key,
    nom_article varchar (30),
    type_article char(1) not null check(type_article in ('P', 'L', 'D'))
);

create table ventes (
	numero_vente int auto_increment,
    quantites smallint not null,
    date_commande date not null,
    nom_rayon varchar(50) not null,
    code_magasin int not null,
    primary key (numero_vente),
    foreign key (nom_rayon) references rayons (nom_rayon),
    foreign key (code_magasin) references magasins (code_magasin)
);
