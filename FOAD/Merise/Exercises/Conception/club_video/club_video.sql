DROP DATABASE IF EXISTS club_video;
CREATE DATABASE IF NOT EXISTS club_video;

CREATE TABLE Types_movies (
	type_id INT AUTO_INCREMENT PRIMARY KEY,
    type_name VARCHAR(50) NOT NULL,
    type_public VARCHAR(50)
);

CREATE TABLE Actors (
	actor_name VARCHAR(50) NOT NULL,
    actor_firstname VARCHAR(50) NOT NULL,
    actor_birth DATE NOT NULL,
    actor_sex VARCHAR(20),
    PRIMARY KEY (actor_name, actor_firstname, actor_birth)
);

CREATE TABLE Movies (
	movie_title VARCHAR(50),
    movie_director VARCHAR(100),
    movie_duration SMALLINT(5) NOT NULL,
    PRIMARY KEY (movie_title, movie_director)
);

CREATE TABLE Tapes (

);

CREATE TABLE Address (

);

CREATE TABLE Clients (
	client_id int auto_increment,
    client_name varchar(50) not null,
    client_firstname varchar(50) not null,
    
);

CREATE TABLE Shops (

);

CREATE TABLE Visit (

);

CREATE TABLE Contain (

);

CREATE TABLE Play (

);

CREATE TABLE Borrow (

);