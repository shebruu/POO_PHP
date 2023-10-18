<?php
include 'chanson.php';

/**
 * @var string $auteur celui qui a "crit la chanson
 * @var string $artiste chanteur-chanteuse
 */
class ChansonRiche extends Chanson
{
    private string $auteur;
    private string $artiste;

    /**
     * cree une chanson riche avec des données dérivé de chanson
     * 
     */
    public function __construct(string $chanson, int $duree, string $auteur, string $artiste)
    {
        parent::__construct($chanson, $duree);
        $this->auteur = $auteur;
        $this->artiste = $artiste;
    }
    public function __toString()
    {
        $titre = parent::getChanson();
        $duree_min_sec = parent::toMinutes() . "'" . parent::getDuree() % 60;
        //(minutes'secondes'')
        $duree_formate = "(" . $duree_min_sec . ")";

        if ($this->auteur !== $this->artiste) {

            return $this->artiste . " - " . $titre . " - " . $duree_min_sec . " - (Auteur : " . $this->auteur . ")";
        } else {
            return $this->artiste . " - " . $titre . " - " . $duree_min_sec;
        }
    }
}
