<?php
namespace Moritz\Flaggen;
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 17.10.2017
 * Time: 09:20
 */

/**
 * Class RectFlag
 */
class RectangleFlag extends Flag implements FlagInterface{

    private $width;
    private $height;

    /**
     * RectangleFlag constructor.
     * @param string $Bezeichnung Name der Flagge
     * @param string $Farbe Farbe der Flagge
     * @param int $Width Laenge der Flagge
     * @param int $Height Hoehe der Flagge
     */
    public function __construct(string $Bezeichnung, string $Farbe, int $Width, int $Height){
        parent::__construct($Bezeichnung, $Farbe);
        $this->width = $Width;
        $this->height = $Height;
    }

    /**
     * @return float Berechnet den Flaecheninhalt von RectFlag
     */
    public function getArea() : float{
        return $this->width * $this->height;
    }

    /**
     * @return string Gibt rectFlag aus
     */
    public function __toString(): string{
        return parent::__toString() . " | Form: Rechteck | Flaecheninhalt: " . $this->getArea();
    }

}