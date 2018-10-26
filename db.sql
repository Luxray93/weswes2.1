Create database wes_uppgift;
Use wes_uppgift;

create table register(id int(8) primary key auto_increment, firstname varchar(32), lastname varchar(32), age int(8), gender enum("male","female") username varchar(32) unique, email varchar(32) unique, password varchar(32));