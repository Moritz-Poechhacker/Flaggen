<?php

namespace Moritz\Flaggen;
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 17.10.2017
 * Time: 09:35
 */

interface FlagInterface{
    public function getArea() : float;
    public function __toString() : string;
}