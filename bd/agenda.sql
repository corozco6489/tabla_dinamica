

create database sensores;
use sensores;

create table datos(
			id int auto_increment,
			temperatura varchar(50),
			voltaje varchar(50),
			humedad varchar(50),
			primary key(id)
					);