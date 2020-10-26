<?php

class IcosFigure {

    private $Arista;
    private $Area;
    private $Volume;

    function __construct($Arista){
        $this->Area = $this->calculateArea($Arista);
        $this->Volume = $this->calculateVolume($Arista);
    }

    function calculateArea($Arista){
        //$result = (3) * ( sqrt( 25 + (10 * sqrt(5)))) * pow($Arista, 2);
        $result = 5 * sqrt(3) * pow($Arista, 2);
        return $result;
    }
    function calculateVolume($Arista){
        $result = (5 / 12) * (3 + sqrt(5)) * pow($Arista, 3);
        return $result;
    }
    function getArea(){
        return $this->Area;
    }
    function getVolume(){
        return $this->Volume;
    }

}

?>