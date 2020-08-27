drop database enonce_5;
create database enonce_5;
use enonce_5;

create table rayons (
	nom_rayon varchar(30) not null,
    etage smallint unsigned,
    primary key (nom_rayon)
);

create table articles (
	code_article int not null,
    nom_article varchar(30) not null,
    type_article varchar(50) not null,
    nom_rayon varchar(30) not null,
    primary key (code_article),
    foreign key (nom_rayon) references rayons (nom_rayon)
);

create index type_article on articles (type_article);

create table fournisseurs (
	code_fournisseur int not null,
    adresse varchar(255) not null,
    nom_fournisseur varchar(30) not null,
    primary key (code_fournisseur)
);

create table employees (
	code_employee int not null,
    nom_employee varchar(50) ,
    nom_rayon varchar(30),
    code_employee_chef int,
    primary key (code_employee),
    foreign key (code_employee_chef) references employees (code_employee)
);

create index nom_employee on employees (nom_employee);

create table livraisons (
	code_fournisseur int,
    code_article int,
    quantite smallint,
    primary key (code_fournisseur, code_article),
    foreign key (code_fournisseur) references fournisseurs (code_fournisseur),
    foreign key (code_article) references articles (code_article)
);