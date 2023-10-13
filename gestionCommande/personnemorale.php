<?php

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

    public function editerFactureMensuelle(int $facture)
    {
    }
}
