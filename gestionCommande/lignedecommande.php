<?php
//4
/**
 * représente une ligne de commande, elle dépend de l' article
 * représente un produit commandé
 * @var int $quantité  nb de qt de l' article
 * @var float $prix prix unitaire de l' article
 */
class Lignedecommande
{
    public int $quantité;
    public float $prix;

    public function __construct($quantité, $prix)
    {
        $this->quantité = $quantité;
        $this->prix = $prix;
    }

    public function afficher()
    {
        echo "Quantité : {$this->quantité}, Prix : {$this->prix} <br>";
    }
}
