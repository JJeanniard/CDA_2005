CREATE DATABASE IF NOT EXISTS vignoble;
USE vignoble;

CREATE TABLE IF NOT EXISTS `users`(
user_id SMALLINT PRIMARY KEY NOT NULL,
user_email VARCHAR(80) NOT NULL,
user_firstname VARCHAR(30) NOT NULL,
user_lastname VARCHAR(30) NOT NULL,
user_pwd VARCHAR(80) NOT NULL
) CHARSET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `cadeaux`(
cadeau_id SMALLINT PRIMARY KEY NOT NULL,
cadeau_title VARCHAR(50) NOT NULL,
cadeau_description TEXT NOT NULL,
user_id SMALLINT NOT NULL, 
CONSTRAINT CK_users FOREIGN KEY (`user_id`) REFERENCES `users`(user_id)
) CHARSET utf8 COLLATE utf8_general_ci;

