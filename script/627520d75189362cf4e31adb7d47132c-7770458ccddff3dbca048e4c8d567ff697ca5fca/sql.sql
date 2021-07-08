/*
CREATE DATABASE `proton`;

CREATE TABLE `users` (
	`id` INT auto_increment NOT NULL,
	`email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
	`first_name` varchar(256) COLLATE utf8mb4_unicode_ci,
	`last_name` varchar(256) COLLATE utf8mb4_unicode_ci,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `artists` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `artist_users` (
	`artist_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,
	PRIMARY KEY (`artist_id`,`user_id`),
	CONSTRAINT `artist_users__artists_FK` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE,
	CONSTRAINT `artist_users__users_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO artists (name) VALUES ('Charles Navi'), ('El Carlitto');
INSERT INTO users (email,first_name,last_name) VALUES ('jc@protonradio.com', 'JC', 'Ivancevich');
INSERT INTO artist_users (artist_id,user_id) VALUES (1, 1), (2, 1);
*/
