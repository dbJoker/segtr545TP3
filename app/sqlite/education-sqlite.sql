-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mar 15 Décembre 2015 à 23:51
-- Version du serveur :  5.5.44
-- Version de PHP :  5.4.43

CREATE TABLE `categories` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT
);



INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'primaire'),
(2, 'secondaire'),
(3, 'cegep'),
(4, 'universite');



CREATE TABLE `courses` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `professeur` TEXT,
  `user_id` INTEGER
);



INSERT INTO `courses` (`id`, `name`, `professeur`, `user_id`) VALUES
(1, 'math', NULL, 5),
(2, 'science', NULL, NULL),
(3, 'French', NULL, NULL),
(4, 'BruhCourse', NULL, NULL),
(5, 'Philosophie', NULL, NULL),
(14, 'Histoire', NULL, 5),
(15, 'How to teach the Univers', NULL, 5),
(16, 'Programmation Objets', NULL, 5),
(17, 'danse', 'Berangaria Aubé', 5),
(18, 'Bunji', 'Wyatt Desnoyer', 12);



CREATE TABLE `professeurs` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `created` TEXT,
  `modified` TEXT
);


INSERT INTO `professeurs` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Marcel Courtemanche', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(2, 'Aceline Faucher', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(3, 'Valiant Labonté', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(4, 'Dielle Maheu', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(5, 'Beltane Ratté', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(6, 'Sophie Martel', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(7, 'Roux Lefèbvre', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(8, 'Frédérique Proulx', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(9, 'Brice Dionne', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(10, 'Searlas Rochon', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(11, 'Tempeste Lafond', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(12, 'Orville Labrie', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(13, 'Magnolia Béland', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(14, 'Diane Leroux', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(15, 'Wyatt Desnoyer', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(16, 'Gilles Veronneau', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(17, 'Leala Devost', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(18, 'Dreux Pitre', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(19, 'Langley Gingras', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(20, 'Philippine Viens', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(21, 'Liane Jodion', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(22, 'Georgette Dionne', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(23, 'Mayhew Bonnet', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(24, 'Marcelle Monjeau', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(25, 'Emmeline Allain', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(26, 'Verrill Perrault', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(27, 'Alice Tessier', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(28, 'Grosvenor Lépicier', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(29, 'Victorine Théberge', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(30, 'Rolls Royce', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(31, 'Madelene Asselin', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(33, 'Fiacre Arpin', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(34, 'Éléonore Narcisse', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(35, 'Mathilde Berthiaume', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(36, 'Robinette Trottier', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(37, 'Mathilde Rouze', '2015-11-09 18:05:41', '2015-11-09 18:05:41'),
(39, 'Zerbino Reault', '2015-11-09 18:05:41', '2015-11-09 18:05:41');


CREATE TABLE `rooms` (
  `id` INTEGER PRIMARY KEY ASC,
  `number` INTEGER,
  `floor` INTEGER,
  `course_id` INTEGER
);



INSERT INTO `rooms` (`id`, `number`, `floor`, `course_id`) VALUES
(4, 42, 42, 15),
(5, 2356, 2, 1),
(6, 1632, 1, 2),
(7, 7634, 7, 4),
(8, 1265, 1, 3),
(9, 3425, 3, 5),
(10, 2534, 2, 14),
(11, 3321, 3, 16);



CREATE TABLE `schools` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `adress` TEXT,
  `filename` TEXT,
  `subcategory_id` INTEGER
);


INSERT INTO `schools` (`id`, `name`, `adress`, `filename`, `subcategory_id`) VALUES
(1, 'nice school', '1634 Cool Valle', NULL, NULL),
(2, 'Universal School', '4242 Quelque part dans l''univers', NULL, NULL),
(3, 'Montmorency', '475 Boulevard de l''Avenir, Laval, QC', NULL, NULL),
(5, 'Gamer school', '1234 Wall', 'uploads/11193266_880382395355241_2576140054646192747_n.jpg', NULL),
(6, 'petite enfance', '12123', 'uploads/01.jpg', 10),
(7, 'test', 'test', NULL, 15),
(8, 'tre', 'tre', NULL, 0),
(9, 'qwe', 'qwe', NULL, 1),
(10, 'testttt', 'testttt', NULL, 2),
(11, '', '', NULL, 10),
(12, 'dfsdfsd', 'sdfsdf', 'uploads/anne_hathaway_2-normal.jpg', 6);



CREATE TABLE `subcategories` (
  `id` INTEGER PRIMARY KEY ASC,
  `category_id` INTEGER,
  `name` TEXT
);



INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(1, 1, 'aucune'),
(2, 1, 'art-plastique'),
(3, 1, 'musique'),
(4, 2, 'aucune'),
(5, 2, 'sport'),
(6, 2, 'art-dramatique'),
(7, 2, 'guitare'),
(8, 2, 'peINTEGERure'),
(9, 3, 'art'),
(10, 3, 'technologie'),
(11, 3, 'cinema'),
(12, 4, 'aucune'),
(13, 4, 'informatique'),
(14, 4, 'science'),
(15, 4, 'musique');


CREATE TABLE `users` (
  `id` INTEGER PRIMARY KEY ASC,
  `username` TEXT,
  `password` TEXT,
  `role` TEXT,
  `email` TEXT,
  `created` INTEGER,
  `modified` INTEGER,
  `active` INTEGER
);



INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`, `active`) VALUES
(5, 'admin', '$2a$10$tQ5zwccPukhDaOENMxl4A.v7h7xVOsvno99AF0SmjseadBVo8cgoO', 'admin', 'admin@admin.com', '2015-09-25', '2015-09-25', 1),
(7, 'test3', '$2a$10$gzQwCpq1tfgiXzvtQS9vV.0gUIrG708q17it6CqVwqahhHWrTjAFm', 'visiteur', 'test@test.com', '2015-10-03', '2015-10-03', 0),
(12, 'prof', '$2a$10$XMLApLSOug6HCVrjGxw0juR3enRMh8ESefxKGIKDgiPZrZNtVbfMq', 'super-utilisateurs', 'prof@prof.com', '2015-10-04', '2015-10-04', 0),
(13, 'prof2', '$2a$10$zBDw7WnDEP/XBGDtT19cLeUaHqROKU.OIIhWxUtPFDI60ZvEdqWc2', 'super-utilisateurs', 'prof@prof.com', '2015-10-06', '2015-10-06', 0),
(24, 'test42', '$2a$10$TvllkZiwtNBE42c4xorXxOb5air16MfilQ/2jJJ8JjGGt8T7hed9G', 'super-utilisateurs', 'coursphptp2@gmail.com', '2015-11-12', '2015-11-12', 1),
(25, 'test424', '$2a$10$FwLkS3KjmQrErnpS54aq8uRXlUj3NRijf0qrLPtip6GW2JLiiNpxS', 'super-utilisateurs', 'coursphptp2@gmail.com', '2015-11-12', '2015-11-12', 1),
(26, 'test12', '$2a$10$RFQoHJuLMCw9021H7n/4au93AO7cLrxtaNL2WnV4P4lccUI.Qcr3q', 'visiteur', 'coursphptp2@gmail.com', '2015-11-12', '2015-11-12', 0);


CREATE TABLE `years` (
  `id` INTEGER PRIMARY KEY ASC,
  `yearname` TEXT,
  `school_id` INTEGER
);


INSERT INTO `years` (`id`, `yearname`, `school_id`) VALUES
(9, '2042', 2),
(11, 'Secondaire 1', 1),
(12, 'secondaire 3', 1),
(13, 'Cégep session 1', 3),
(14, 'Cégep session 4', 3);


CREATE TABLE `years_courses` (
  `year_id` INTEGER,
  `course_id` INTEGER,
  `id` INTEGER PRIMARY KEY ASC
);


INSERT INTO `years_courses` (`year_id`, `course_id`, `id`) VALUES
(11, 1, 52),
(11, 2, 53),
(11, 3, 54),
(12, 1, 55),
(12, 2, 56),
(12, 3, 57),
(13, 1, 58),
(13, 3, 60),
(13, 5, 61),
(14, 3, 62),
(14, 5, 63),
(9, 14, 64),
(11, 14, 65),
(12, 14, 66),
(9, 15, 67),
(9, 16, 68),
(13, 16, 69),
(14, 16, 70),
(9, 4, 71),
(9, 1, 72),
(9, 2, 73),
(9, 3, 74),
(9, 5, 75),
(13, 17, 76),
(9, 18, 77),
(13, 18, 78),
(14, 18, 79);



