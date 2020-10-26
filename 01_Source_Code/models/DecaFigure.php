<?php

class DecaFigure {

    private $Arista;
    private $Area;
    private $Perimeter;

    function __construct($Arista){
        $this->Area = $this->calculateArea($Arista);
        $this->Perimeter = $this->calculatePerimeter($Arista);
    }

    function calculateArea($Arista){
        $result = 3 * (sqrt(25 + 10 * sqrt(5))) * pow($Arista, 2);
        return $result;
    }
    function calculatePerimeter($Arista){
        $result = (1 / 4) * (15 + 7 * sqrt(5)) * pow($Arista, 3);
        return $result;
    }
    function getArea(){
        return $this->Area;
    }
    function getPerimeter(){
        return $this->Perimeter;
    }

}

?>