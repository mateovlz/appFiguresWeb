<?php

class FormEcuation {

    private $Vlr_a;
    private $Vlr_b;
    private $Vlr_c;
    private $Vlr_d;
    private $Vlr_e;
    private $Result;
    private $ParseResult;
    private $Valida;
    private $MessagError;

    function __construct($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e){
        $this->Valida = $this->validaEcuacion();
        $this->Valida = 0; // Temporal mientras se agregan las validaciones 
        if ($this->Valida <= 0 ){
            $this->Result = $this->calculateFormula($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e);
            $this->ParseResult = $this->generateFormula($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e);
        }       
    }

    function calculateFormula($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e){
        $result = (((((($Vlr_a + $Vlr_b) / ($Vlr_a + $Vlr_e))) - (acos(($Vlr_b - $Vlr_c) / 10))) / (10 * (asin(($Vlr_d * 1) / 10)))) + ((((asin($Vlr_a / ($Vlr_c * 9))) * sqrt(($Vlr_c + $Vlr_d)))) / (acos((sqrt(15 - $Vlr_e) / 5)))));
        return $result;
    }
    function generateFormula($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e){
        $result = "((((((" . $Vlr_a . " + " . $Vlr_b . ") / ( " . $Vlr_a . " + " . $Vlr_e . "))) - (acos(( " . $Vlr_b . " - " . $Vlr_c . ") / 10))) / (10 * (asin((" . $Vlr_d . " * 1) / 10)))) + ((((asin(" . $Vlr_a . " / (" . $Vlr_c . " * 9))) * sqrt((" . $Vlr_c . " + " . $Vlr_d . ")))) / (acos((sqrt(15 - " . $Vlr_e . ") / 5)))))";
        return $result;
    }

    function validaEcuacion(){
        
        try { 
          $ecuaIzquierda = ((((($Vlr_a + $Vlr_b) / ($Vlr_a + $Vlr_e))) - (acos(($Vlr_b - $Vlr_c) / 10))) / (10 * (asin(($Vlr_d * 1) / 10))));
            
        
        } catch (Exception $e) {
            //throw $th;
        }


        $this->Valida = 0;
        return $this->Valida;
    }
    function getResult(){
        return $this->Result;
    }
    function getParseResult(){
        return $this->ParseResult;
    }
    function getValida(){
        return $this->Valida;
    }
    function getMessagError(){
        return $this->MessagError;
    }

}

?>