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

    public function __construct(string $numero)
    {
        $this->numero = $numero;
        $this->date = new DateTime();
    }


    public function getdate()
    {
        return $this->date;
    }

    /**
     * ajoute une ligne de commande au panier
     * @param $ligne  la ligne a ajouter dans la liste 
     * 
     */
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
    public function afficher()
    {
        echo "numéro commande : $this->numero <br>";
        echo "Date de commande : " . $this->date->format('Y-m-d H:i:s') . "<br>";
        foreach ($this->lignes as $lg) {
            $lg->afficher();
        }
    }
}
class Main
{
    public function main()
    {
        $commande1 = new Commande('E455');
        $l1 = new Lignedecommande(1, 34.66);


        $commande1->ajouterligne($l1);


        $l2 = new Lignedecommande(2, 3.66);
        $commande1->ajouterligne($l2) .
            $commande1->afficher();
    }
}



$main = new Main();
$main->main();
