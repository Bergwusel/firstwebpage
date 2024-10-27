CREATE DATABASE rollenspieltag;

USE rollenspieltag;

CREATE TABLE anmeldungen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    comment TEXT
);
