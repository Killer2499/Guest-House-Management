CREATE DATABASE guesthouse;

CREATE TABLE admindata(
	name 	varchar(255),
	email	varchar(255),
	phone 	bigint(11),
	type 	varchar(255),
	booking_date timestamp,
	approved tinyint,
	room 	varchar(255)

);

CREATE TABLE faculty(
	name 	varchar(255),
	email	varchar(255),
	phone	bigint(20),
	reference	varchar(255)
	
);

CREATE TABLE other(
	name 	varchar(255),
	email	varchar(255),
	phone	bigint(20),
	purpose varchar(255),
	affiliatedto	varchar(255)

);

CREATE TABLE studentrelated(
	name 	varchar(255),
	email	varchar(255),
	phone	bigint(20),
	studentname	varchar(255),
	registration	bigint(20),
	studentyear	int(11),
	relation	varchar(255)
);

