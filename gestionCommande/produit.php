<?php
//1
abstract class Produit
{

    private   string $libelle;
    private   int $prix;
    private   int $qtstock;


    public function __construct(string $libelle, int $prix, int $qtstock)
    {
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->qtstock = $qtstock;
    }

    /**
     * calcul le prix total de tout les stocks d' un produit
     * @return la val total des stocks 
     */
    public function valeurstock()
    {


        return $this->prix * $this->qtstock;
    }

    /**
     * affiche les détails du produit
     */
    public function afficher()
    {

        echo "Libelle: " . $this->libelle . ' Prix : ' . $this->prix .
            ' quantité de stock : ' . $this->qtstock . ' Valeur total du stock du produit : ' . $this->valeurstock();
    }
}
