drop database if exists club_video;
create database if not exists club_video;
use club_video;

create table Movie_types (
	type_id int auto_increment primary key,
    type_name varchar(50) not null,
    type_public varchar(50) not null
);

create table Actors (
	actor_name varchar(50) not null,
    actor_firstname varchar(50) not null,
    actor_birth date not null,
    actor_sex varchar(20),
    primary key (actor_name, actor_firstname, actor_birth)
);

create table Movies (
	movie_title varchar(50),
    movie_director varchar(100),
    movie_duration smallint(5) not null,
    type_id int,
    primary key (movie_title, movie_director),
	foreign key (type_id) references Movie_types (type_id)
);

create table Tapes (
	tape_id int auto_increment primary key,
    tape_registration datetime not null,
    tape_stats varchar(50) not null,
    movie_title varchar(50),
    movie_director varchar(100),
    foreign key (movie_title, movie_director) references Movies (movie_title, movie_director)
);

create table Address (
	address_id int auto_increment primary key,
	address_zipcode varchar(5) not null,
    address_city varchar(50) not null,
    address_number varchar(10),
    address_street_name varchar(100) not null
 );

create table Clients (
	client_id int auto_increment primary key,
    client_name varchar(50) not null,
    client_firstname varchar(50) not null,
    client_enrollment datetime not null,
    address_id int,
    foreign key (address_id) references Address(address_id)
);

create table Shops (
	shop_name varchar(50) not null,
    address_id int not null,
    constraint FK_address_to_shop foreign key (address_id) references Address (address_id),
    primary key (shop_name, address_id)
);

create table Visit (
	client_id int,
    shop_name varchar(50),
    address_id int,
    foreign key (client_id) references Clients(client_id),
    foreign key (shop_name, address_id) references Shops(shop_name, address_id),
    primary key (client_id, shop_name, address_id)
);

create table Contain (
	tape_id int,
    shop_name varchar(50),
    address_id int,
    foreign key (tape_id) references Tapes(tape_id),
    foreign key (shop_name, address_id) references Shops(shop_name, address_id),
    primary key (tape_id, shop_name, address_id)
);

create table Play (
	actor_name varchar(50),
    actor_firstname varchar(50),
    actor_birth date,
    movie_title varchar(50),
    movie_director varchar(100),
    foreign key (actor_name, actor_firstname, actor_birth) references Actors(actor_name, actor_firstname, actor_birth),
    foreign key (movie_title, movie_director) references Movies(movie_title, movie_director),
    primary key (actor_name, actor_firstname, actor_birth, movie_title, movie_director)
);

create table Borrow (
	client_id int,
    tape_id int,
	borrow_start datetime not null,
    borrow_end datetime check (borrow_end >= borrow_start),
    foreign key (client_id) references Clients(client_id),
    foreign key (tape_id) references Tapes(tape_id),
    primary key (client_id, tape_id)
);
