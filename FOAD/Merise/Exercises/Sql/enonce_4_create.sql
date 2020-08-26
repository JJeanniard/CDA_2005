create database enonce_4;
use enonce_4;

create table livres (
	isbn int not null,
    titre varchar(50) not null,
    primary key pk_livre (isbn)
);

create table exemplaire (
	num_exemplaire int not null,
    isbn int not null,
    etat char(1) not null default 'D' check (etat in ('D', 'E', 'P')),
    primary key pk_exemplaire (num_exemplaire, isbn),
    foreign key ek_livre (isbn) references livres (isbn)
);