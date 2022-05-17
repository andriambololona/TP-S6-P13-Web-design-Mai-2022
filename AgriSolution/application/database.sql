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


create table type_contenu(
    id int primary key not null,
    type varchar(50)
)ENGINE=InnoDb;

insert into type_Contenu(id,type) values(1,'cause');
insert into type_Contenu(id,type) values(2,'solution');

create table contenu_cause(
    id int not null primary key AUTO_INCREMENT,
    id_type_contenu int not null,
    id_cause int not null,
    description text not null,
    dates Date,
    photos varchar(50),
    Foreign key(id_type_contenu) references type_contenu(id),
    Foreign key(id_cause) references cause(id)
)ENGINE=InnoDb;

create table contenu_solution(
    id int not null primary key AUTO_INCREMENT,
    id_type_contenu int not null,
    id_solution int not null,
    description text not null,
    dates Date,
    photos varchar(50),
    Foreign key(id_type_contenu) references type_contenu(id),
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


insert into contenu_cause(id_type_contenu,description,id_cause,dates,photos) VALUES(1,'la pollution de l''atmostphere cree le changement climatique',2,'2019-05-07','cop/cause/3.jpg');
insert into contenu_cause(id_type_contenu,description,id_cause,dates,photos) VALUES(1,'l''efet de serre cree le changement climatique',3,'2019-05-07','cop/cause/2.jpg');
insert into contenu_cause(id_type_contenu,description,id_cause,dates,photos) VALUES(1,'La deforestion cree le changement climatique',1,'2019-05-07','cop/cause/1.jpg');


insert into image_contenu_cause(id_contenu_cause,photo) values(1,'cop/cause/3.jpg');
insert into image_contenu_cause(id_contenu_cause,photo) values(2,'cop/cause/2.jpg');
insert into image_contenu_cause(id_contenu_cause,photo) values(3,'cop/cause/1.jpg');
