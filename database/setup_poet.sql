# setup_poet_tables.sql

DROP DATABASE poet;

CREATE DATABASE poet;

USE poet;

#Create the table that will hold all individual words in the database
CREATE TABLE words (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		word varchar(200) not null,
		lang_id char(5),
		PRIMARY KEY(id),
		FULLTEXT(word)
	);

CREATE TABLE matrices (
		id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
		name varchar(50),
		PRIMARY KEY(id)
	);

CREATE TABLE matrix_values (
		matrix_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
		row_word_id INT UNSIGNED,
		column_word_id INT UNSIGNED,
		value INT UNSIGNED,
		PRIMARY KEY(matrix_id) 
	);

GRANT ALL ON poet.* TO 'hjort'@'localhost';