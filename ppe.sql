drop database if exists ppe ;
create database ppe ;
use ppe;

create table Unite(
idU int(3) not null,
adresseU varchar(20) not null,
primary key(idU)

);
create table client (
  idclient int(5) not null auto_increment,
  nom varchar(20) not null,
  prenom varchar(20) not null,
  tel int(10) not null,
  mail varchar(20) not null,
  adresse varchar(50) not null,
  ville varchar(20) not null,
  postale int(5) not null,
  pseudo varchar(20)not null,
  mdp varchar(20)not null,
  primary key(idclient)
);
create table particulier (
  idclient int(5) not null auto_increment,
  nom varchar(20) not null,
  prenom varchar(20) not null,
  tel int(10) not null,
  mail varchar(20) not null,
  adresse varchar(50) not null,
  ville varchar(20) not null,
  postale int(5) not null,
  pseudo varchar(20)not null,
  mdp varchar(20)not null,
  primary key(idclient)
);
create table societe (
  idclient int(5) not null auto_increment,
  nom varchar(20),
  numsiret varchar(20),
  tel int(10),
  mailpro varchar(20),
  adresse varchar(50),
  ville varchar(20),
  postale int(5),
  pseudo varchar(20),
  mdp varchar(20),
  activite varchar(20),
  raison varchar(20),
  primary key(idclient)
);

create table devis (
  iddevis int(5) not null auto_increment,
  intitule varchar(20) not null,
  descriptif varchar(20) not null,
  Dated date,
  etat varchar(20)not null,
  idclient int(3)not null,
  primary key(iddevis),
  foreign key  (idclient) references client(idclient)
);
create table produit (
  idProduit int(3) not null auto_increment,
  nomP varchar(20) not null,
  PrixP int(5),
  dateMEV date,
  typeP varchar(20),
  couleur varchar(20),
  nbrP int(5),
  ref varchar(20),
  photo varchar(255),
  primary key(idProduit)
);
create table produit_normal (
  idProduit int(3) not null auto_increment,
  nomP varchar(20) not null,
  PrixP int(5),
  dateMEV date,
  typeP varchar(20),
  couleur varchar(20),
  nbrP int(5)not null,
  ref varchar(20),
  photo varchar(255),
  primary key(idProduit)
);
create table produit_sur_mesure (
  idProduit int(3) not null auto_increment,
  nomP varchar(20) not null,
  PrixP int(5),
  dateMEV date,
  typeP varchar(20),
  couleur varchar(20),
  nbrP int(5)not null,
  ref varchar(20),
  longueur float(5,2),
  largeur float(5,2),
  hauteur float (5,2),
  texture varchar(20),
  primary key(idProduit)
);
create table commande(
  numc int(3) not null,
  datecom date,
  datelivraison date,
  etatcom varchar(20),
  idProduit int(3),
  primary key(numc),
  foreign key (idProduit) references produit(idproduit)
);
create table intervention (
  numI int(5) not null  auto_increment,
  datei date,
  duree varchar(20),
  TH varchar(20),
  action enum ("validee", "en attente", "refusee"),
  primary key (numI)
);
create table factures(
  numF int(5) not null auto_increment,
  dattef date ,
  dater date,
  EtatF varchar(20),
  montantHT float (5,2),
  TVA float (3,2),
  TTC float (5,2),
  idclient int(5),
  numI int(5),
  Numc int(5),
  primary key(numF),
  foreign key (idclient) references client(idclient),
  foreign key (numI) references intervention(numI),
  foreign key (Numc) references commande(Numc)
);
create table technicien (
  idt int(5)not null auto_increment,
  nomT varchar(20) ,
  prenomT varchar(20),
  tel int(12),
  adresse varchar(50),
  qualification varchar(100),
  pseudo varchar(20)not null,
  mdp varchar(20)not null,
  primary key(idt)
);
create table realiser (
  idProduit int(3) not null,
  idU int(3) not null,
  primary key(idU,idProduit)
);
create table concerner (
  idProduit int(3) not null,
  iddevis int(3) not null,
  primary key(iddevis,idProduit)
);
create table commander(
  idProduit int(3) not null,
  numc int(3) not null,
  primary key(numc,idProduit)
);
create table contact (
  idcontact int(5) not null auto_increment,
  nom varchar(30) not null,
  mail varchar(255) not null,
  objet varchar(25) not null,
  message varchar(255) not null,
  primary key (idcontact)
);





insert into client
  values(
  null,
  'rezzoug',
  'yanis',
  '0661648090',
  'yrezzzoug@gmail.com',
  'avenue de verdun',
  'villeneuve',
  '92390',
  'killua',
  'aze'
);

  insert into client
    values
    (
      null,
      'brym',
      'hugo',
      '0622554477',
      'brymhugo@gmail.com',
      '7 allé de la colline',
      'noisy le grand',
      '93000',
      'douglas',
      'aze'
    );

    insert into client
      values
      (null,
        'boulanouar',
        'isamel',
        '0621558899',
        'ismaelbou@gmail.com',
        'cinquante hein',
        'trappes',
        '78120',
        'ismaboule',
        'aze'
      );

      insert into client
        values
        (
          null,
          'queen',
          'oliver',
          '0755112244',
          'oli@gmail.com',
          'district 12',
          'starling city',
          '88552',
          'arrow',
          'aze'
        );

        insert into client
          values
          (
            null,
            'allen',
            'barry',
            '0755255475',
            'grantg@gmail.com',
            'rue justice league',
            'star labs',
            '55441',
            'flash',
            'aze'
          );

          insert into client
            values
            (
              null,
              'queen',
              'oliver',
              '0755112244',
              'oli@gmail.com',
              'district 12',
              'starling city',
              '88552',
              'arrow',
              'aze'
            );


insert into factures
  values
  (
    null,
    '2018/02/15',
    '2018/02/17',
    'neuf',
    '325.55',
    '0.20',
    '330',
    1,
    null,
    null
  );

  insert into factures
     values
     (
       null,
       '2018/03/05',
       '2018/03/07',
       'neuf',
       '415.55',
       '0.20',
       '420',
       3,
       null,
       null
     );

    insert into factures
      values
      (
        null,
        '2018/03/06',
        '2018/03/08',
        'neuf',
        '105.55',
        '0.20',
        '110',
        2,
        null,
        null
      );

      insert into factures
        values
        (
          null,
          '2018/05/17',
          '2018/05/19',
          'neuf',
          '225.55',
          '0.20',
          '230',
          2,
          null,
          null
        );

        insert into factures
          values
          (
            null,
            '2018/05/13',
            '2018/06/15',
            'neuf',
            '275.55',
            '0.20',
            '300',
            1,
            null,
            null
          );


insert into devis
  values(
    null,
    'intervention',
    'la pose dune porte',
    '2018/11/05',
    'neuf',
    1
  );

  insert into devis
    values
    (null,
      'intervention',
      'la pose dune fenetre',
      '2018/11/06',
      'neuf',
      2
    );

    insert into devis
      values
      (
        null,
        'intervention',
        'la pose dune veranda',
        '2018/12/07',
        'neuf',
        1
      );

      insert into devis
        values
        (
          null,
          'intervention',
          'la pose dune armoir',
          '2018/12/09',
          'neuf',
          3
        );

        insert into devis
          values
          (
            null,
            'intervention',
            'la pose dune table',
            '2019/01/01',
            'neuf',
            2
          );

          insert into produit
            values
            (
              null,
              "Porte Bois marron",
              "120",
              "2019/10/01",
              "bois",
              "marron",
              "50",
              "A1",
              "p1.png"
            );

              insert into produit
                values
                (
                  null,
                  "Porte marron clair",
                  "115","2019/11/01",
                  "bois",
                  "marron chene",
                  "50",
                  "A2",
                  "p2.png"
                );

                  insert into produit
                     values
                     (
                       null,
                       "Fenetre brico",
                       "130",
                       "2019/12/15",
                       "sapin",
                       "marron",
                       "100",
                       "B1",
                       "p3.png"
                     );

                    insert into produit
                      values
                      (
                        null,
                        "Fenetre ODE",
                        "250",
                        "2020/01/05",
                        "PVC",
                        "blanc",
                        "100",
                        "B2",
                        "p4.png"
                      );
                      
