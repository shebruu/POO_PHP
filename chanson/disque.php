<?php
require 'chanson.php';
/**
 * représente un disque compacte composite 
 *  pt contenir une ou plusieurs chansons 
 * @var string $titre titre du disque
 * @var string $artiste l' artiste du disque 
 * @var int $annee 
 * @var array $chansons liste des chansons du disque
 * @var int $dureeTotale durée totale de toutes les chansons contenu dans le disque
 */
class Disque
{

    private string $titre;
    private string $artiste;
    private int $annee;
    private array $chansons = [];
    private int $dureeTotale = 0;


    public function __construct($titre, $artiste, $annee)
    {
        $this->titre = $titre;
        $this->artiste = $artiste;
        $this->annee = $annee;
    }

    /**
     * ajoute une chanson dans la liste si pas de doublons
     * @param Chanson $chanson une chanson de type chanson a ajouter dans la liste du disque
     * @return true si la chanson  a été ajouté
     */
    public function ajouterChanson(Chanson $chanson)
    {
        foreach ($this->chansons as $i) {
            if ($i->getChanson() == $chanson->getChanson()) {
                return false;
            }
        }
        $this->chansons[] = $chanson;
        $this->ajouterDuree($chanson->getDuree());
        return true;
    }
    /**
     * retire une chanson de la liste de tableau
     * @param Chanson $chanson chanson a retirer
     * 
     */
    public function retirerChanson(Chanson $chanson)
    {
        for ($i = 0; $i < count($this->chansons); $i++) {
            if ($this->chansons[$i] === $chanson) {
                array_splice($this->chansons, $i, 1);
                break;
            }
        }
    }
    private function ajouterDuree($duree)
    {
        $this->dureeTotale += $duree;
    }

    public function duree_totale_disque()
    {
        $minutes = $this->dureeTotale / 60;
        $seconds = $this->dureeTotale % 60;

        return $minutes . "' " . $seconds . "''";
    }

    /**
     * affiche le titre, l artiste, la duree totale  du disque  et les titres de chaque chanson qu' elle contient
     */
    public function __toString()
    {
        $sortie = $this->titre . ' - ' . $this->artiste;
        $sortie .= " (" . $this->duree_totale_disque() . ")";
        $sortie .= "\nChansons:\n";

        foreach ($this->chansons as $chanson) {
            $sortie .= "- " . $chanson->getCha . "\n";
        }

        return $sortie;
    }
}
