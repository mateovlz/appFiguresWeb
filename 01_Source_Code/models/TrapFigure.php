<?php

class TrapFigure {

    private $Mayor_Base;
    private $Minor_Base;
    private $Height;
    private $Righ_Side;
    private $Left_Side;
    private $Area;
    private $Perimeter;

    function __construct($Mayor_Base,$Minor_Base,$Height,$Righ_Side,$Left_Side){
        $this->Area = round($this->calculateArea($Mayor_Base,$Minor_Base,$Height),2);
        $this->Perimeter = round($this->calculatePerimeter($Mayor_Base,$Minor_Base,$Righ_Side,$Left_Side),2);
    }

    function calculateArea($Mayor_Base,$Minor_Base,$Height){
        $result = (($Mayor_Base + $Minor_Base) * $Height) / 2;
        return $result;
    }
    function calculatePerimeter($Mayor_Base,$Minor_Base,$Righ_Side,$Left_Side){
        $result = $Mayor_Base + $Minor_Base + $Righ_Side + $Left_Side;
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