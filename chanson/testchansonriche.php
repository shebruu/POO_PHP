<?php
require 'chansonriche.php';

$chansonRiche = new ChansonRiche("titre", 206, 'auteur Antonoff', 'artiste');
echo $chansonRiche . '<br>';

$chansonn = new Chanson("blue", 206);
echo $chansonn->toString();
