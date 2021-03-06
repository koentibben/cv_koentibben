DROP DATABASE IF EXISTS `cv_koentibben`;

CREATE DATABASE `cv_koentibben`;

USE `cv_koentibben`;

CREATE TABLE `skills` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(100) NOT NULL,
    skill VARCHAR(100) NOT NULL,
    percentage INT NOT NULL
);

INSERT INTO `skills` (`type`, `skill`, `percentage`) VALUES
('Programming language', 'PHP', 25),
('Programming language', 'Java', 30),
('Programming language', 'JavaScript', 15),
('Programming language', 'HTML', 30),
('Programming language', 'CSS', 20),
('Testing framework', 'Selenium', 30),
('Testing framework', 'Behat', 30),
('Testing framework', 'Cypress', 20),
('Other', 'Git', 40),
('Other', 'Docker', 25),
('Other', 'Atlassian', 60);

CREATE TABLE `courses` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL
);

INSERT INTO `courses` (`course_name`) VALUES
('ISTQB Certified Tester, Foundation Level'),
('Java Programming Masterclass, Udemy'),
('2020 Python Bootcamp: From Zero to Hero in Python, Udemy'),
('Object Oriented programming with Java, Polteq'),
('Information Security Foundation, LOI');
