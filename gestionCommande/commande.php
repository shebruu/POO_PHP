<?php
include 'lignedecommande.php';
/**
 * représenté un panier de commande 
 * elle contient une ou plusieurs ligne de commande (composition)
 */
class Commande
{
    private DateTime $date;
    private string $numero;
    private  float $prix;

    private  $aquit = false;

    private   $lignes = [];

    public function __construct($numero)
    {
        $this->numero = $numero;
    }



    public function ajouterligne(Lignedecommande $ligne)
    {
        $this->lignes[] = $ligne;
    }
    /**
     * indique si la commande est payé
     */
    /*
    public funtion acquitter(){

       return $this->aquit;
    }
*/
}
