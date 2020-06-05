DROP TABLE IF EXITS board;

CREATE TABLE db.board(
	numboard int,
	title varchar(20) not null,
	author varchar(20) not null,
	content varchar(300) not null,
	time varchar(30) not null,
	pw char(4) not null,
	PRIMARY KEY (numboard)
);
