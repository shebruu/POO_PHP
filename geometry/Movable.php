<?php

/**
 * Représente un objet qui peut être déplacé.
 *
 * Cette interface définit trois méthodes qui permettent de déplacer un objet :

 * `moveBy()` : déplace l'objet d'une certaine distance par rapport à sa position actuelle.
 * `moveTo()` : déplace l'objet à une position spécifiée.
 * `home()` : déplace l'objet à sa position d'origine, qui est (0, 0) par défaut.
 */
interface Movable
{

    const HOME_X = 0;
    const HOME_Y = 0;


    /**
     * Déplace l'objet d'une certaine distance par rapport à sa position actuelle.
     *
     * @param int $dx La distance à parcourir sur l'axe x.
     * @param int $dy La distance à parcourir sur l'axe y.
     */
    public function moveBy($dx, $dy);


    /**
     * Déplace l'objet à une position spécifiée.
     *
     * @param int $x La nouvelle coordonnée x.
     * @param int $y La nouvelle coordonnée y.
     */
    public function moveTo($x, $y);


    /**
     * Déplace l'objet à sa position d'origine, qui est (0, 0) par défaut.
     */
    public function home();
}
