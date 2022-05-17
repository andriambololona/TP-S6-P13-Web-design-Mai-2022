create database changementclimatique;
use changementclimatique;

create table admin(
    id int primary key not null AUTO_INCREMENT,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    birth DATE,
    pass varchar(50) not null,
    image varchar(50) not null,
    biographie varchar(100) not null,
    adresse varchar(50) not null
)ENGINE=InnoDb;

insert into  admin(pass,image,nom,prenom,birth,biographie,adresse) values (sha1('admin1'),'#','andry','andria','1996-11-06','environnementaliste','rue 416 Paris');
insert into  admin(pass,image,nom,prenom,birth,biographie,adresse) values(sha1('sadmin2'),'#','andry','andria','1996-11-06','environnementaliste','rue 168 Paris');
insert into  admin(pass,image,nom,prenom,birth,biographie,adresse) values(sha1('admin3'),'#','andry','andria','1996-11-06','environnementaliste','rue 322 Paris');
insert into  admin(pass,image,nom,prenom,birth,biographie,adresse) values(sha1('admin4'),'#','andry','andria','1996-11-06','environnementaliste','rue 500 Paris');


create table contenu_cause(
    id int not null primary key AUTO_INCREMENT,
    id_cause int not null,
    titre text,
    description text not null,
    dates Date,
    photos text not null,
    Foreign key(id_cause) references cause(id)
)ENGINE=InnoDb;

create table contenu_solution(
    id int not null primary key AUTO_INCREMENT,
    id_solution int not null,
    titre text,
    description text not null,
    dates Date,
    photos text not null,
    Foreign key(id_solution) references solution(id)
)ENGINE=InnoDb;

create table cause(
    id int not null primary key AUTO_INCREMENT,
    nom varchar(50),
    images varchar(50)
)ENGINE=InnoDb;

insert into cause(nom,images) values('deforestation','cop/cause/1.jpg');
insert into cause(nom,images) values('pollution','cop/cause/3.jpg');
insert into cause(nom,images) values('effet de serre','cop/cause/2.jpg');

create table solution(
    id int not null primary key AUTO_INCREMENT,
    nom varchar(50)
)ENGINE=InnoDb;
insert into solution(nom) values('reboisement');



insert into contenu_cause(titre,description,id_cause,dates,photos) VALUES('la pollution','la pollution de l''atmostphere cree le changement climatique',2,'2019-05-07','cop/cause/3.jpg');
insert into contenu_cause(titre,description,id_cause,dates,photos) VALUES('L''effet de serre','l''efet de serre cree le changement climatique',3,'2019-05-07','cop/cause/2.jpg');
insert into contenu_cause(titre,description,id_cause,dates,photos) VALUES('La deforestation','La deforestion cree le changement climatique',1,'2019-05-07','cop/cause/1.jpg');



