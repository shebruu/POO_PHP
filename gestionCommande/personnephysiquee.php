<?php


class Personnephysique extends Client
{
    private $numerocartecredit;

    public function __construct($nom, $adresse, $numerocartecredit)
    {
        parent::__construct($nom, $adresse);
        $this->numerocartecredit = $numerocartecredit;
    }
}
