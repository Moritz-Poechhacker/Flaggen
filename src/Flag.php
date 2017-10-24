<?php
namespace Moritz\Flaggen;
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 26.09.2017
 * Time: 09:25
 */
/**
 * Class Flag
 * @package Moritz\Flaggen
 * Ueberklasse aller Flaggen
 */
class Flag{
    var $Bezeichnung;
    var $Farbe;

    /**
     * Flag constructor.
     * @param string $Bezeichnung Name der Flagge
     * @param string $Farbe Farbe der Flagge
     */
    public function __construct(string $Bezeichnung, string $Farbe){
        $this->Bezeichnung = $Bezeichnung;
        $this->Farbe = $Farbe;


    }

    /**
     * @return string Gibt die Bezeichnung aus
     */
    public function getName(): string{
        return $this->Bezeichnung;
    }

    /**
     * @return string Gibt die Farbe aus
     */
    public function getFarbe(): string{
        return $this->Farbe;
    }


    /**
     * @return string Gibt Bezeichnung und Farbe aus
     */
    public function __toString() : string{
        return "Flagge mit Bezeichnung: ".$this->Bezeichnung." | Farbe: ".$this->Farbe;
    }
}
