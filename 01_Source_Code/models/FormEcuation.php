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
        $this->Valida = $this->validaEcuacion($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e);
        echo $this->Valida;
        //$this->Valida = 0; // Temporal mientras se agregan las validaciones 
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

    function validaEcuacion($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e){

        //$ecuaIzquierda = ((((($Vlr_a + $Vlr_b) / ($Vlr_a + $Vlr_e))) - (acos(($Vlr_b - $Vlr_c) / 10))) / (10 * (asin(($Vlr_d * 1) / 10))));
                    
        //$asinIzq = asin((($Vlr_d * 1) / 10));
        
        $asinIzq = (($Vlr_d * 1) / 10);
        if ($asinIzq > 1  or $asinIzq < -1){
            $this->MessagError = "El valor del arcoseno del lado izquierdo no se encuentra en el rango del arcoseno es entre -1 y 1";
            $this->Valida = 1 + $this->Valida;
        }
                        
        //   $acosIzq = acos((($Vlr_b -  $Vlr_c) / 10));
        $acosIzq = (($Vlr_b -  $Vlr_c) / 10);
        if ($acosIzq > 1 and -1 < $acosIzq  ){
          $this->MessagError ="El valor del arcocoseno del lado izquierdo  no se encuentra en el rango del arcocoseno es entre -1 y 1";
          $this->Valida = 1 + $this->Valida;
        }
    
        // $divisionarribaizq1 = (($Vlr_a + $Vlr_b ) / ($Vlr_a + $Vlr_e ));
        $divisionarribaizq1 = ($Vlr_a + $Vlr_e );
        if ($divisionarribaizq1 <= 0){
          $this->MessagError ="El valor de la division arriba 1 izquierda es iugal o menor a cero lo cual es imposible de resolver";
          $this->Valida = 1 + $this->Valida;
        }
        /*
        $divisionarribaizq2 = (($Vlr_b - $Vlr_c) / 10);
        if ($divisionarribaizq2 ){
        $divisionarribaizq2 = (($Vlr_b - $Vlr_c) / 10);
        
        $this->MessagError ="El valor de la division arriba 2 izquierda es iugal o menor a cero lo cual es imposible de resolver";
        $this->Valida = 1 + $this->Valida;
        }
        try {
        $divisionabajoizq = (($Vlr_d * 1) / 10);
        } catch (Exception $e) {
        $this->MessagError ="El valor de la division abajo  izquierda es iugal o menor a cero lo cual es imposible de resolver";
        $this->Valida = 1 + $this->Valida;
        }*/
                    
        //$ecuaDerecha = ((((asin($Vlr_a / ( $Vlr_c* 9))) * sqrt(($Vlr_c + $Vlr_d)))) / (acos((sqrt(15 - $Vlr_e) / 5))));
         
        // $asinDer = asin($Vlr_a / ($Vlr_c * 9));
        $asinDer = ($Vlr_a / ($Vlr_c * 9) );
        
        if ($asinDer > 1  or $asinDer < -1){
        $this->MessagError = "El valor del arcoseno del lado derecho no se encuentra en el rango del arcoseno que es es entre -1 y 1";
        $this->Valida = 1 + $this->Valida;
        }

        //$raizDerechaArriba = sqrt(($Vlr_c + $Vlr_d));
        $raizDerechaArriba = ($Vlr_c + $Vlr_d);
        if ($raizDerechaArriba < 0){
            $this->MessagError = "El valor de la raiz arriba derecha es menor a 0. Debe ser mayor";
            $this->Valida = 1 + $this->Valida;
        }
        //$raizDerAbajo = sqrt(15 - ($Vlr_e));
        $raizDerAbajo = (15 - ($Vlr_e));
        if ($raizDerAbajo < 0) {
            $this->MessagError = "El valor de la raiz abajo derecha es menor a 0. Debe ser mayor";
            $this->Valida = 1 + $this->Valida;
        }
        //$acosDer = acos((sqrt(15 - $Vlr_e) / 5));
        $acosDer = (15 - $Vlr_e);
        if ($acosDer < 0) {
           $this->MessagError = "El valor del arcocoseno del lado derecho no se encuentra en el rango del arcocoseno que es es entre -1 y 1";
           $this->Valida = 1 + $this->Valida;
        }
        /*
        try {
        $divArribaDer = ($Vlr_c * 9);
        } catch (Exception $e) {
        $this->MessagError = "El valor de la division arriba derecha es igual o menor a cero lo cual es imposible de resolver.";
        $this->Valida = 1 + $this->Valida;
        }*/
        //$divAbajoDer = (acos((sqrt(15 - $Vlr_e) / 5)));
        $divAbajoDer = (15 - $Vlr_e);
        if ($divAbajoDer < 0){
           $this->MessagError = "El valor de la division abajo derecha es igual o menor a cero lo cual es imposible de resolver.";
           $this->Valida = 1 + $this->Valida;
        }
        

        //$this->Valida = 0;
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
    function setValida($Valida){
        $this->Valida = $Valida;
    }

}

?>