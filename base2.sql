Create database pcg;
CREATE ROLE compta LOGIN password 'gestion';
ALTER DATABASE pcg OWNER TO compta;


Create table plancompte(
numero integer not null primary key,
intitule varchar(35)
);


Create table Mouvement(
Id_Mouvement serial not null primary key,



);


Create table Ecriture(

Id_compte integer REFERENCES plancompte(numero),
Daty date not null,
Ref varchar(35) not null,
Compte varchar(13) not null,
Tiers varchar(35),
Libelle varchar(35),
Debit double,
Credit double
);