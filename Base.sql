Create database gestion;
CREATE ROLE plan LOGIN password 'compta';
ALTER DATABASE gestion OWNER TO plan;

Create table plancompte(
racine integer not null primary key,
nom_compte varchar(20),
comptes varchar(5) not null unique,
intitule varchar(35)
);


Create table ecriture(

Daty Date,
Ref varchar(30),
id_compte integer REFERENCES plancompte(racine),
Tiers varchar(35),
Libelle varchar(35),
Montant_Devise real,
Debit real,
Credit real
);

Create table Devise(
Id_Devise serial not null primary key,
Devise varchar(50)
);

 
 

Create table Compte(
Daty Date,
Ref varchar(30),
Id_compte integer REFERENCES plancompte(racine),
Tiers varchar(35),
Libelle varchar(35),
Id_Devise integer REFERENCES Devise(Id_Devise),
Montant_Devise real,
Debit real,
Credit real
);
Insert into ecriture(daty,ref,id_compte,tiers,libelle,montant_devise,debit,credit)Select daty,ref,id_compte,tiers,libelle,montant_devise,debit,credit from compte;

Insert into plancompte(racine,nom_compte,comptes,intitule)values(1,'Capital','10111','101-Terrain'),
										(2,'Immobilisation','20111','201-Immobile'),
										(3,'Stock','30111','301-Vary'),
										(4,'Tiers','40111','401-Fourinisseur-Dupont'),
										(5,'Tresorie','53111','531-BNI'),
										(6,'Charge','60111','Achat'),
										(7,'Produit','70111','Vente');

Create or replace view result as Select compte.Daty,compte.ref,plancompte.comptes,compte.tiers,compte.libelle,compte.Montant_Devise,compte.debit,compte.credit from compte join plancompte on compte.id_compte=plancompte.racine;
-- Create or replace view result as Select compte.Daty,compte.Ref,compte.Comptes,compte.Tiers,compte.Libelle,compte.Debit,compte.Credit,plancompte.intitule  from compte join plancompte on plancompte.racine=compte.id_compte;

Create or replace view ecri as Select ecriture.Daty,ecriture.ref,ecriture.id_compte,ecriture.tiers,ecriture.libelle,ecriture.montant_devise,ecriture.debit,ecriture.credit,plancompte.intitule from ecriture join plancompte on plancompte.racine=ecriture.id_compte;
--Create or replace view crediter as Select sum(credit) from compte;
--Create or replace view debiter as Select sum(debit) from compte ;
--Create or replace view fusion as Select debiter.sum as db,crediter.sum as cr from debiter full join crediter on debiter.sum=crediter.sum;
--Create or replace view balance as Select db-cr as balance from fusion;
Create or replace view difference as Select debit-credit as diff from compte;
Create or replace view balancer as Select sum(diff)as balance from difference;