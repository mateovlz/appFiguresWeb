<?php

class TrianFigure {

    private $Base;
    private $Height;
    private $Righ_Side;
    private $Left_Side;
    private $Area;
    private $Perimeter;

    function __construct($Base,$Height,$Righ_Side,$Left_Side){
        $this->Area = $this->calculateArea($Base,$Height);
        $this->Perimeter = $this->calculatePerimeter($Base,$Righ_Side,$Left_Side);
    }

    function calculateArea($Base,$Height){
        $result = ($Base * $Height) / 2;
        return $result;
    }
    function calculatePerimeter($Base,$Righ_Side,$Left_Side){
        $result = $Righ_Side + $Left_Side + $Base;
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