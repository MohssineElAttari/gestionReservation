/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  02/05/2021 13:47:59                      */
/*==============================================================*/


drop table if exists Bien;

drop table if exists Enfant;

drop table if exists Pension;

drop table if exists Reservation;

drop table if exists Role;

drop table if exists Tarification;

drop table if exists Utilisateur;

/*==============================================================*/
/* Table : Bien                                                 */
/*==============================================================*/
create table Bien
(
   id_bien              int not null,
   nom                  varchar(254),
   vue                  varchar(254),
   primary key (id_bien)
);

/*==============================================================*/
/* Table : Enfant                                               */
/*==============================================================*/
create table Enfant
(
   id_utilisateur       int not null,
   id_enfant            int not null,
   nom                  varchar(254),
   age                  varchar(254),
   primary key (id_utilisateur, id_enfant)
);

/*==============================================================*/
/* Table : Pension                                              */
/*==============================================================*/
create table Pension
(
   id_pension           int not null,
   nom                  varchar(254),
   primary key (id_pension)
);

/*==============================================================*/
/* Table : Reservation                                          */
/*==============================================================*/
create table Reservation
(
   id_utilisateur       int not null,
   id_bien              int not null,
   id_pension           int,
   date_entrer          datetime,
   date_sortie          datetime,
   primary key (id_utilisateur, id_bien)
);

/*==============================================================*/
/* Table : Role                                                 */
/*==============================================================*/
create table Role
(
   id_role              int not null,
   libelle              varchar(254),
   primary key (id_role)
);

/*==============================================================*/
/* Table : Tarification                                         */
/*==============================================================*/
create table Tarification
(
   id_tarification      int not null,
   id_bien              int not null,
   prix                 numeric(8,0),
   primary key (id_tarification),
   key AK_Identifiant_1 (id_tarification)
);

/*==============================================================*/
/* Table : Utilisateur                                          */
/*==============================================================*/
create table Utilisateur
(
   id_utilisateur       int not null,
   id_role              int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   email                varchar(254),
   password             varchar(254),
   primary key (id_utilisateur)
);

alter table Enfant add constraint FK_Association_3 foreign key (id_utilisateur)
      references Utilisateur (id_utilisateur) on delete restrict on update restrict;

alter table Reservation add constraint FK_Association_2 foreign key (id_bien)
      references Bien (id_bien) on delete restrict on update restrict;

alter table Reservation add constraint FK_Association_2 foreign key (id_utilisateur)
      references Utilisateur (id_utilisateur) on delete restrict on update restrict;

alter table Reservation add constraint FK_Association_5 foreign key (id_pension)
      references Pension (id_pension) on delete restrict on update restrict;

alter table Tarification add constraint FK_Association_4 foreign key (id_bien)
      references Bien (id_bien) on delete restrict on update restrict;

alter table Utilisateur add constraint FK_Association_1 foreign key (id_role)
      references Role (id_role) on delete restrict on update restrict;

