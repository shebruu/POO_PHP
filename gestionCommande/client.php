<?php
//2

/**
 * représente un client
 */
abstract class Client
{
    private string $nom;
    private string $adresse;

    /**
     * crée un nv client
     */
    public function __construct($nom, $adresse)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
    }
    public function afficher()
    {
        echo "nom : $this->nom <br>";
        echo "adresse : $this->adresse";
    }
}
