CREATE DATABASE fuel_station;

USE fuel_station;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
phone VARCHAR(20),
password VARCHAR(100)
);

CREATE TABLE fuel(
id INT AUTO_INCREMENT PRIMARY KEY,
fuel_type VARCHAR(50),
stock INT,
price DECIMAL(10,2)
);

CREATE TABLE employees(
id INT AUTO_INCREMENT PRIMARY KEY,
employee_id VARCHAR(20),
name VARCHAR(100),
position VARCHAR(50),
salary DECIMAL(10,2)
);

CREATE TABLE billing(
id INT AUTO_INCREMENT PRIMARY KEY,
customer_name VARCHAR(100),
fuel_type VARCHAR(50),
quantity DECIMAL(10,2),
amount DECIMAL(10,2)
);
