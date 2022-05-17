
create table Produit(
	idProduit varchar(3) primary key,
	designation varchar(50),
	prixUnitaire decimal,
	quantite int
);
insert into Produit values
	("001","Akanjo",120,30),
	("002","Kilalao",200,20),
	("003","Voanjo",90,10),
	("004","Sakafo",200,7),
	("005","Pepite",140,4),

create table Caisse(
	idCaisse varchar(3) primary key,
);
create table Achat(
	idCaisse varchar(3), 
	idProduit varchar(3),
	quantite int,
	foreign key (idCaisse) references Caisse(idCaisse),
	foreign key (idProduit) references Produit(idProduit)
);
insert into caisse values(caisse,idproduit,quantite)

select Produit.designation as nomProduit, 
	   Produit.prixUnitaire as prixUnitaire,
	   Achat.quantite as quantite,
	   (Produit.prixUnitaire*Achat.quantite) as montant
from Achat Join Produit on Achat.idProduit = Produit.idProduit where Achat.idCaisse = '1';