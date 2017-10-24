<?php
namespace Moritz\Flaggen;
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 17.10.2017
 * Time: 09:20
 */

/**
 * Class circFlag
 */
class circFlag extends Flag implements FlagInterface{
    private $radius;

    /**
     * circFlag constructor.
     * @param string $Bezeichnung Name der Flagge
     * @param string $Farbe Farbe der Flagge
     * @param $Radius
     */
    public function __construct($Bezeichnung, $Farbe, $Radius){
        parent::__construct($Bezeichnung, $Farbe);
        $this->radius = $Radius;
    }

    /**
     * @return float Berechnet den Flaecheninhalt von CircFlag
     */
    public function getArea(): float{
        return round(pow($this->radius, 2) * pi(), 2);
    }

    /**
     * @return string Gibt CircFlag aus
     */
    public function __toString(): string{
        return parent::__toString()." | Form: Kreis | Flaecheninhalt: ".$this->getArea();
    }


}