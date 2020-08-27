drop database enonce_4;
create database enonce_4;
use enonce_4;

create table livres (
	isbn char(17) not null,
    titre varchar(50) not null,
    primary key pk_livre (isbn)
);

create table exemplaire (
	num_exemplaire int not null,
    isbn char(17) not null,
    etat char(1) not null default 'D',
    primary key pk_exemplaire (num_exemplaire, isbn),
    foreign key ek_livre (isbn) references livres (isbn)
);