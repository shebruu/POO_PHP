<?php

/**
 * Représente un point dans l'espace (une position).
 *
 * Cette classe représente un point dans l'espace, avec deux coordonnées x et y.
 *
 * @property int $x Abscisse x du point.
 * @property int $y Abscisse y du point.
 */
class Point
{
    protected int $x;
    protected int $y;


    /**
     * Définit les coordonnées x et y du point.
     *
     * @param int $x Abscisse x du point.
     * @param int $y Abscisse y du point.
     */
    public function __construct(int $x = 0, int $y = 0)
    {
        // $this->x pour faire référence a la propriété et assigner $x au parametre
        $this->x = $x;
        $this->y = $y;
    }


    /**
     * Retourne l'abscisse x du point.
     *
     * @return int L'abscisse x du point.
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Retourne l'abscisse y du point.
     *
     * @return int L'abscisse y du point.
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Définit l'abscisse x du point.
     *
     * @param int $x La nouvelle abscisse x du point.
     */
    public function setX(int $x)
    {
        $this->x = $x;
    }

    /**
     * Définit l'abscisse y du point.
     *
     * @param int $y La nouvelle abscisse y du point.
     */
    public function setY(int $y)
    {
        $this->y = $y;
    }

    /**
     * Retourne une représentation du point sous forme de chaîne de caractères.
     *
     * @return string La représentation du point sous forme de chaîne de caractères.
     */

    public function __toString()
    {
        return "(x: {$this->x}, y :{$this->y})";
    }
}
