drop database if exists enonce_4;
create database enonce_4 CHAR SET utf8 COLLATE utf8_general_ci;
use enonce_4;

create table livres (
	isbn char(17) PRIMARY KEY,
    titre varchar(50) not null
);

create table exemplaire (
	num_exemplaire int not null,
    isbn char(17) not null,
    etat char(1) not null default 'D' check(etat in ('D', 'E', 'P')),
    primary key (num_exemplaire, isbn),
    constraint ks_isbn foreign key (isbn) references livres (isbn)
);