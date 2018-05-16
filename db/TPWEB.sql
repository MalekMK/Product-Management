DROP DATABASE IF EXISTS TPWEB;
CREATE DATABASE TPWEB;
USE TPWEB;
CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

INSERT INTO users (username,password) VALUES ('admin','admin');

CREATE TABLE `products` (
  `reference` varchar(20) NOT NULL PRIMARY KEY,
  `name` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `feedback` (
  `id` int(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO products (reference , name , stock , price , description) VALUES 
  (1,'pc portatif asus',10,529,'Ecran 15.6" HD LED (1366 x 768 px) - Processeur: AMD E1-7010 APU Dual-Core (1,5 GHz, 2 Mo de Mémoire cache), Systéme exploitation: FreeDos - Mémoire RAM: 2 Go DDR3L - Disque Dur: 500 Go HDD - Carte graphique: AMD Radeon R2, avec USB-C, HDMI, VGA, Wifi - Couleur: silver - Garantie: 1 an'),
  (2,'Souris Gamer',3,289,'
Souris Gamer Rétro-éclairage Razer Mamba Tournament Edition - Modèle: RZ01-01370100-R3G1 - Technologie de connexion: Filaire - Interface avec ordinateur: USB - Nombre de Boutons: 9 Boutons Programmables - Type de Roulette: Multidirectionnelle - Type de souris: Laser - Résolution Optique: 16000 dpi 5G - Fonction Ultrapolling de 1 000 Hz / Temps de réponse de 1 ms - Molette cliquable - Compatible avec Razer Synapse - Câble de chargement USB en fibre tressée de 2,1 m'),
  (3,'souris sans fil',15,10,'Souris Sans Fil JEDEL - Technologie de connectivité: Sans fil - Connexion USB nano - Résolution: 1000 DPI - Distance de fonctionnement: 10m - Fréquence: 2.4 GHz - Prise en charge: Windows XP / 7/8/10 / Vista / Mac - Couleur: Noir'),
  (4,'Tapis de souris',9,10,'Tapis Souris gamer Avec Motif, Tissu avec un caoutchouc / tissu texturé, Epaisseur: 3mm, taille: 603 * 225mm, Couleur: Rouge'),
  (5,'webcam',4,80,'Webcam HD 3000, Capteur: HD 720p, format: 16:9 (1280x720 pixels), Photos: 5 MP interpolés, Technologie TrueColor, Mise au point automatique, Zoom Numérique: x4, Microphone intégré avec réducteur de bruit environnant, pour un son plus clair, Interface: USB 2.0 - Garantie 1 an'),
  (6,'Clavier',21,12,'Interface:USB1.1/2.0 - Durée de vie de frappe :> 10.000.00 frappes -Courant maximal: 5v- Systéme exploitation compatible: Windows 7, Windows 98SE, Windows Vista....');

INSERT INTO feedback (name,email,phone,message) VALUES ('Malek Mkaouar','mkaouarmalek@gmail.com','+21621254342','This is an awsome website');




  




