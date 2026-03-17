CREATE DATABASE campus;
USE campus;

CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
password VARCHAR(100),
marks FLOAT,
resume VARCHAR(255)
);

CREATE TABLE companies (
id INT AUTO_INCREMENT PRIMARY KEY,
company_name VARCHAR(100),
email VARCHAR(100),
password VARCHAR(100),
vacancy VARCHAR(255)
);

CREATE TABLE admin (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(50)
);

INSERT INTO admin (username,password)
VALUES ('admin','admin123');