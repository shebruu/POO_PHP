<?php
include 'Forme.php';
/**
 * Représente un rectangle.
 *
 * Cette classe représente un rectangle, avec une longueur et une largeur.
 *
 * @property int $longueur La longueur du rectangle.
 * @property int $largeur La largeur du rectangle.
 * @property Point $position La position du rectangle.
 */
class Rectangle extends Forme
{

    private int $longueur;
    private int $largeur;



    /**
     * Crée un nouvel objet Rectangle.
     *
     * @param int $longueur La longueur du rectangle.
     * @param int $largeur La largeur du rectangle.
     * @param Point $position La position du rectangle.
     *
     * @return Rectangle
     */
    //ordre des parametres est important
    public function __construct(int $longueur, int $largeur, Point $position)
    {

        parent::__construct($position);

        $this->setLongueur($longueur);

        $this->setLargeur($largeur);
    }


    public function __toString()
    {
        return "L: {$this->longueur} - l: {$this->largeur} "
            . "{$this->position}"; //Solution 1
        // . parent::__toString();  Solution 2 - Réutilisation
    }

    public function getLongueur()
    {
        return $this->longueur;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }


    /**
     * Définit la longueur du rectangle.
     *
     * @param int $longueur La nouvelle longueur du rectangle.
     *
     * @throws DomainException Si la longueur est négative ou nulle.
     */
    public function setLongueur(int $longueur)
    {
        if ($longueur <= 0) {
            throw new DomainException("La longueur ne peut être ni négative ni nulle !");
        }

        $this->longueur = $longueur;
    }
    /**
     * Définit la largeur du rectangle.
     *
     * @param int $largeur La nouvelle largeur du rectangle.
     *
     * @throws DomainException Si la largeur est négative ou nulle.
     */

    public function setLargeur(int $largeur)
    {
        if ($largeur <= 0) {
            throw new DomainException("La largeur ne peut être ni négative ni nulle !");
        }

        $this->largeur = $largeur;
    }

    /**
     * Calcule le périmètre du rectangle.
     *
     * @return int Le périmètre du rectangle.
     * pas de param car utilise les propriétés (longueur et largeur) de l objet rect, plus simple, moins redondant
     */

    public function perimetre()
    {
        //somme des longueurs de ses quatre côtés est le perim du rect
        return 2 * ($this->longueur + $this->largeur);
    }

    /**
     * Calcule la superficie du rectangle.
     *
     * @return int La superficie du rectangle.
     */
    public function superficie()
    {
        // la longueur multipliée par la largeur est la superficie du rect
        return $this->longueur * $this->largeur;
    }


    /**
     * Déplace l'objet d'une certaine distance par rapport à sa position actuelle.
     *
     * @param int $dx La distance à parcourir sur l'axe x.
     * @param int $dy La distance à parcourir sur l'axe y.
     */
    public function moveBy($dx, $dy)
    {
        //obtient les coordonnées courrante et et ajoute la distance spécifié a celle ci
        //grace a setx, le résultat est défini comme une nouv coordonnée de position
        $this->position->setX($this->position->getX() + $dx);
        $this->position->setY($this->position->getY() + $dy);
    }


    /**
     * Déplace l'objet à une position spécifiée.
     *
     * @param int $x La nouvelle coordonnée x.
     * @param int $y La nouvelle coordonnée y.
     */
    public function moveTo($x, $y)
    {
        $this->position->setX($x);
        $this->position->setY($y);
    }

    public function home()
    {
        $this->position->setX(Movable::HOME_X);
        $this->position->setY(Movable::HOME_Y);
    }


    /**
     * Redimensionne l'objet par rapport à sa taille actuelle.
     *
     * @param array $data Un tableau contenant les nouvelles valeurs de la longueur et de la largeur.
     *
     * @throws InvalidArgumentException Si le tableau contient plus de 2 éléments.
     */
    public function resizeBy(array $data)
    {
        $tailleTab = sizeof($data);
        // le tab doit ne pt avoir  plus de 2 éléments
        if ($tailleTab > 2) {
            throw new InvalidArgumentException("Trop de données ! (Seulement 2 requises)");
        }

        //si tab a 2 elem, la long et larg sont mis a jour
        if ($tailleTab == 2) {
            $this->longueur += $data[0];
            $this->largeur += $data[1];
            //si tab a 1 élém, la longueur est mis a jour mais largeur reste idem
        } elseif ($tailleTab == 1) {
            $this->longueur += $data[0];
        }
    }

    /**
     * Redimensionne l'objet à une taille spécifiée.
     *
     * @param array $data Un tableau contenant les nouvelles valeurs de la longueur et de la largeur.
     *
     * @throws InvalidArgumentException Si le tableau contient plus de 2 éléments.
     */
    public function resizeTo(array $data)
    {

        $tailleTab = sizeof($data);
        // le tab doit ne pt avoir  plus de 2 éléments
        if ($tailleTab > 2) {
            throw new InvalidArgumentException("Trop de données ! (Seulement 2 requises)");
        }

        if ($tailleTab == 2) {
            $this->longueur = $data[0];
            $this->largeur = $data[1];
            //si tab a 1 élém, la longueur est mis a jour mais largeur reste idem
        } elseif ($tailleTab == 1) {
            $this->longueur = $data[0];
        }
    }
}
