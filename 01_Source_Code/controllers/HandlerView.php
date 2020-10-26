<?php

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

    function __construct($resulATrap,$resulPTrap,$resulATria,$resulPTria,$resulAIcos,$resulVICos,$resulADeca,
                         $resulVDeca,$resulForm,$resulParsedForm){
        $this->Template = $this->replaceValues($resulATrap,$resulPTrap,$resulATria,$resulPTria,$resulAIcos,$resulVICos,$resulADeca,
                                               $resulVDeca,$resulForm,$resulParsedForm);
    }

    function replaceValues($resulATrap,$resulPTrap,$resulATria,$resulPTria,$resulAIcos,$resulVICos,$resulADeca,
                          $resulVDeca,$resulForm,$resulParsedForm){
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

        return $plantilla;
    }
    function getTemplate(){
        return $this->Template;
    }
}


?>