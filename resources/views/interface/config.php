<?php
//On demarre les sessions
session_start();

/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement
******************************************************/

//On se connecte a  base de donnee
mysql_connect('185.98.131.90', 'carre932488', 'zajyu7b1yb');
mysql_select_db('carre932488');

//mysql_connect('ftp.Carrefourbanque.com', 'dinam666173', 't7NCB7YD');
//mysql_select_db('dinam666173');

//Email du webmaster
//$mail_webmaster = 'example@example.com';

//Adresse du dossier de  top site
//$url_carre932488 = 'http://www.example.com';

/******************************************************
----------------Configuration Optionelle---------------
******************************************************/

//Nom du fichier de laccueil
$url_home = 'index.php';

//Nom du design
$design = 'default';
?>