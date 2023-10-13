<?php
include 'Movable.php';
include 'Resizable.php';
/** une forme a une position (utilise une instance de point), représenté par un point (association), 
 * une forme pt etre un objet movable sans obligation (agregation)
 * un objet movable  peut e une forme (agregation) pas de relation
 * forme n' a pas besoin de movable pr exister, elle pt e immobile aussi -> agregation
 * forme contient instance de movable : composition
 * une forme hérité de point (composition et agregation de point)
 
 * représente une forme géométrique qui a une position
 * @var  Point $position pos de la forme
 */
abstract class  Forme implements Movable, Resizable
{


    protected Point $position;


    public function __construct(Point $pos)
    {

        $this->position = $pos;
    }


    abstract  public function perimetre();
    abstract public function superficie();
}
