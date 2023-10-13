<?php
include 'client.php';
class Personnemorale extends Client
{
    private string $nomContact;
    private float $limitecredit;

    public function __construct($nom, $adresse, $nomContact, $limitecredit)
    {
        parent::__construct($nom, $adresse);
        $this->nomContact = $nomContact;
        $this->limitecredit = $limitecredit;
    }
    //
    public function editerFactureMensuelle(int $montant)
    {
    }
}


class Main
{
    public function main()
    {
        $personne1 = new Personnemorale('Ebru', 'rue des menuisiers', 'SALAM', 5000);
        $personne1->afficher();
    }
}



$main = new Main();
$main->main();
