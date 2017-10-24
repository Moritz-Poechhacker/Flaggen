<?php
namespace Moritz\Flaggen;
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 17.10.2017
 * Time: 09:20
 */

/**
 * Class triFlag
 */
class triFlag extends Flag implements FlagInterface{

    private $seite;
    private $height;

    /**
     * triFlag constructor.
     * @param string $Bezeichnung Name der Flagge
     * @param string $Farbe Farbe der Flagge
     * @param int $Seite Eine Seitenlaenge der Flagge
     * @param int $Height Hoehe der Flagge
     */
    public function __construct(string $Bezeichnung, string $Farbe, int $Seite, int $Height){
        parent::__construct($Bezeichnung, $Farbe);
        $this->seite = $Seite;
        $this->height = $Height;
    }

    /**
     * @return float Berechnet den Flaecheninhalt von TriFlag
     */
    public function getArea(): float{
        return 0.5 * $this->seite * $this->height;
    }

    /**
     * @return string Gibt TriFlag aus
     */
    public function __toString(): string{
        return parent::__toString() . " | Form: Dreieck | Flaecheninhalt: " . $this->getArea();
    }

}