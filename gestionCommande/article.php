<?php
//3
/**
 * représente un article
 */
class Article
{
    public int $quantité;
    public float $prixunitaire;

    /**
     * lit  un article
     */
    public function __construct($quantité, $prixunitaire)
    {
        $this->quantité = $quantité;
        $this->prixunitaire = $prixunitaire;
    }

    /**
     * affiche les info de l' article
     */
    public function afficher()
    {
        echo "Quantité : $this->quantité" . '<br>';
        echo "Prix unitaire : $this->prixunitaire";
    }
}
/* class Main
{
    public function main()
    {
        $article = new Article(10, 20);
        $article->afficher();
    }
}

$main = new Main();
$main->main();
*/
