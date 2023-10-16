<?php

/**
 * représente une chanson
 * @var string $chanson titre d' une chanson
 * @var int $duree durée d' une chanson en seconde
 */
class Chanson
{
    private string $chanson;
    private int $duree;




    public function __construct($chanson, $duree)
    {
        $this->chanson = $chanson;
        $this->duree = $duree;
    }

    public function setDuree($duree)
    {
        // Vérifie que la durée est supérieure ou égale à 0
        if ($duree < 0) {
            throw new Exception("La durée doit être supérieure ou égale à 0");
        }

        $this->duree = $duree;
    }


    public function getDuree()
    {
        return $this->duree;
    }

    public function setChanson($chanson)
    {

        $this->chanson = $chanson;
    }

    public function getChanson()
    {
        return $this->chanson;
    }
    /**
     * convertit une durée en minute
     * @return duree en minute avec durée en minute et nom de la chanson
     */
    public function toMinutes()
    {
        $minutes = intdiv($this->duree, 60);

        /* pr retourner un tab 
        return [
            "minutes" => $minutes,
            "nom_chanson" => $this->chanson,
        ];
        */
        return $minutes;
    }

    public function toString()
    {
        // minutes'secondes''
        $titre = $this->chanson;
        $duree_min_sec = $this->toMinutes() . "'" . $this->duree % 60;
        //(minutes'secondes'')
        $duree_formate = "(" . $duree_min_sec . ")";

        return $titre . " " . $duree_formate;
    }
}

class Main
{
    public function main()
    {
        $chanson = new Chanson("power", 206);
        // Affiche le titre de la chanson
        /* si on utiilsait un retour de tableau
        // Convertit la durée en minutes et secondes
        $duree = $chanson->toMinutes();
        echo 'durée en seconde : ' . $duree['minutes'] . '-' . $duree["nom_chanson"];
    */

        $minutes = $chanson->toMinutes();


        echo $chanson->toString() . '<br>';
    }
}



$main = new Main();
$main->main();
