<?php
require_once 'Chanson.php';
require_once('disque.php');
$chanson1 = new Chanson('Beggin', 210);
$chanson2 = new Chanson('Upside down', 230);
$chanson3 = new Chanson('I choose', 225);


$chansonriche1 = new ChansonRiche('Superman', 222, 'Gulsen', 'Hadise');

$chansonriche2 = new ChansonRiche('Try everything', 202, 'shakira', 'shakira');


$disque1 = new Disque('Breathe', 'Ebru', 2023);

$disque1->ajouterChanson($chanson1);

$disque1->ajouterChanson($chanson2);

$disque1->ajouterChanson($chanson3);


$disque1->ajouterChanson($chansonriche1);

$disque1->ajouterChanson($chansonriche2);


$disque1->retirerChanson($chanson2);


$disque1->__toString();
