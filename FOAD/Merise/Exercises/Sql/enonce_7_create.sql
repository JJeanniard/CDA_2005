create database enonce_7;
use enonce_7;

create table buveurs (
	numero_buv int auto_increment,
    nom_buv varchar(30) not null,
    prenom_buv varchar(30) not null,
    ville_buv varchar(50) not null,
    primary key (numero_buv)
);

create table commandes (
	numero_com int auto_increment,
    date_com date not null,
    numero_buv int not null,
    primary key (numero_com),
    foreign key (numero_buv) references buveurs (numero_buv)
);

create table vignerons (
	numero_vign int auto_increment,
    nom_vign varchar(30) not null,
    prenom_vign varchar(30) not null,
    ville_vign varchar(50) not null,
    primary key (numero_vign)
);

create table vins (
	numero_vin int auto_increment,
    cru_vin varchar(30) not null,
    millisime_vin year not null,
    numero_vign int not null,
    primary key (numero_vin),
    foreign key (numero_vign) references vignerons (numero_vign)
);

create table ligne_commandes (
	numero_vin int not null,
    numero_com int not null,
    quantite smallint not null,
    primary key (numero_vin, numero_com),
    foreign key (numero_vin) references vins (numero_vin),
    foreign key (numero_com) references commandes (numero_com)
);

create table appreciations_vignerons (
	numero_vign_appreciant int not null,
    numero_vign_apprecie int not null,
    note smallint not null,
    primary key (numero_vign_appreciant, numero_vign_apprecie),
    foreign key (numero_vign_appreciant) references vignerons (numero_vign),
    foreign key (numero_vign_apprecie) references vignerons (numero_vign)
);