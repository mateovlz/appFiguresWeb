<?php
 require(".././controllers/Historicos.php");

class HandlerView {
    private $resulATrap;
    private $resulPTrap;
    private $resulATria;
    private $resulPTria;
    private $resulAIcos;
    private $resulVICos;
    private $resulADeca;
    private $resulVDeca;
    private $resulForm;
    private $resulParsedForm;
    private $Template;
    private $hisTrapecio;

    function __construct($resulATrap,$resulPTrap,$resulATria,$resulPTria,$resulAIcos,$resulVICos,$resulADeca,
                         $resulVDeca,$resulForm,$resulParsedForm,$hisTrapecio,$hisTriangulo,$hisTridimen,$hisEcuacion){
        $this->Template = $this->replaceValues($resulATrap,$resulPTrap,$resulATria,$resulPTria,$resulAIcos,$resulVICos,$resulADeca,
                                               $resulVDeca,$resulForm,$resulParsedForm,$hisTrapecio,$hisTriangulo,$hisTridimen,$hisEcuacion);
    }

    function replaceValues($resulATrap,$resulPTrap,$resulATria,$resulPTria,$resulAIcos,$resulVICos,$resulADeca,
                          $resulVDeca,$resulForm,$resulParsedForm,$hisTrapecio,$hisTriangulo,$hisTridimen,$hisEcuacion){
        $Historicos =  new Historicos();                      
        $hiscadeTrap =  $Historicos->getHistTrapecio($hisTrapecio);  
        $hiscadeTria =  $Historicos->getHistTriangulo($hisTriangulo);  
        $hiscadeTrid =  $Historicos->getHistTridimen($hisTridimen);  
        $hiscadeEcua =  $Historicos->getHistEcuacion($hisEcuacion);                  
        $plantilla = file_get_contents('../views/indexEmpty.html');
        $plantilla = str_replace('{resul_a_trap}',$resulATrap,$plantilla);
        $plantilla = str_replace('{resul_p_trap}',$resulPTrap,$plantilla);
        $plantilla = str_replace('{resul_a_tria}',$resulATria,$plantilla);
        $plantilla = str_replace('{resul_p_tria}',$resulPTria,$plantilla);
        $plantilla = str_replace('{resul_a_icosa}',$resulAIcos,$plantilla);
        $plantilla = str_replace('{resul_v_icosa}',$resulVICos,$plantilla);
        $plantilla = str_replace('{resul_a_decae}',$resulADeca,$plantilla);
        $plantilla = str_replace('{resul_v_decae}',$resulVDeca,$plantilla);
        $plantilla = str_replace('{resul_form}',$resulForm,$plantilla);
        $plantilla = str_replace('{resul_parse_form}',$resulParsedForm,$plantilla);
        $plantilla = str_replace('{tabla_Trapecio}',$hiscadeTrap,$plantilla);
        $plantilla = str_replace('{tabla_Triangulo}',$hiscadeTria,$plantilla);
        $plantilla = str_replace('{tabla_Tridimimensionales}',$hiscadeTrid,$plantilla);
        $plantilla = str_replace('{tabla_Ecuacion}',$hiscadeEcua,$plantilla);
        

        return $plantilla;
    }
    function getTemplate(){
        return $this->Template;
    }
}


?>