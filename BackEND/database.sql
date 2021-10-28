/*Create table tour*/
CREATE TABLE Tourfietsen (
	id  int(12) not null PRIMARY KEY AUTO_INCREMENT,
    amount int(12),
    date datetime not null
);

/* Create table normale fietsen*/
CREATE TABLE normalefietsen (
	id int(12) not null PRIMARY KEY AUTO_INCREMENT
    amount int(12),
    date datetime not null
);