<?php
    require(".././models/TrapFigure.php");
    require(".././models/TrianFigure.php");
    require(".././models/IcosFigure.php");
    require(".././models/DecaFigure.php");
    require(".././models/FormEcuation.php");
    require(".././controllers/HandlerView.php");

    switch ($_POST['accion']){
        case 1: BidiFigureTrap($_POST['base_mayor'],
                               $_POST['base_menor'],
                               $_POST['altura_tra'],
                               $_POST['lado_derecho_tra'],
                               $_POST['lado_izquierdo_tra']);
                break;

        case 2: BidiFigureTrian($_POST['lado_derecho_tri'],
                                $_POST['lado_izquierdo_tri'],
                                $_POST['base_tri'],
                                $_POST['altura_tri']);
                break;
        
        case 3: TridiFigure($_POST['arista_icosaedro'],
                            $_POST['arista_decaedro']);
                break;

       case 4: FormulaCalculate($_POST['vlr_a'],
                                $_POST['vlr_b'],
                                $_POST['vlr_c'],
                                $_POST['vlr_d'],
                                $_POST['vlr_e']
                                );
                break;                      
    }

   function BidiFigureTrap($BaseMayor,$BaseMenor,$Altura,$LadoDerecho,$LadoIzquierdo){
       $Valida = ValidaAlfanumerico($BaseMayor,$BaseMenor,$Altura,$LadoDerecho,$LadoIzquierdo);
       if ($Valida <= 0){
        $Figure = new TrapFigure(nvl($BaseMayor,0),nvl($BaseMenor,0),nvl($Altura,0),nvl($LadoDerecho,0),nvl($LadoIzquierdo,0));
        $Area = $Figure->getArea();
        $Perimeter = $Figure->getPerimeter();
        $Template = new HandlerView(round($Area,2),round($Perimeter,2),'000','000','000','000','000','000','000','Exportar Ecuacion');
        echo $Template->getTemplate();
       }else{
        AlertaError("No se admiten LETRAS, Ingresar Solamente Valores NUMERICOS");
       }
   }

   function BidiFigureTrian($LadoDerecho,$LadoIzquierdo,$Base,$Altura){
       $Value = 1;
       $Valida = ValidaAlfanumerico($LadoDerecho,$LadoIzquierdo,$Base,$Altura,$Value);
       if ($Valida <= 0){
         $Figure = new TrianFigure(nvl($Base,0),nvl($Altura,0),nvl($LadoDerecho,0),nvl($LadoIzquierdo,0));
         $Area = $Figure->getArea();
         $Perimeter = $Figure->getPerimeter();
         $Template = new HandlerView('000','000',round($Area,2),round($Perimeter,2),'000','000','000','000','000','Exportar Ecuacion');
         echo $Template->getTemplate();
       }else{
        AlertaError("No se admiten LETRAS, Ingresar Solamente Valores NUMERICOS");
       }
   }
   
   function TridiFigure($AristaI, $AristaD){
        $Value = 1;
        $Valida = ValidaAlfanumerico($AristaI,$AristaD,$Value,$Value,$Value);
        if ($Valida <= 0){
            $Icosaedro = new IcosFigure(nvl($AristaI,0));
            $AIcosa = $Icosaedro->getArea();
            $VIcosa = $Icosaedro->getVolume();

            $Decaedro = new DecaFigure(nvl($AristaD,0));
            $ADeca = $Decaedro->getArea();
            $VDeca =  $Decaedro->getPerimeter();

            $Template = new HandlerView('000','000','000','000',round($AIcosa,2),round($VIcosa,2),round($ADeca,2),round($VDeca,2),'000','Exportar Ecuacion');
            echo $Template->getTemplate();
        }else{
            AlertaError("No se admiten LETRAS, Ingresar Solamente Valores NUMERICOS");
        }
   }

   function FormulaCalculate($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e){
        $Valida = ValidaAlfanumerico($Vlr_a,$Vlr_b,$Vlr_c,$Vlr_d,$Vlr_e);
        if ($Valida <= 0){
            $Figure = new FormEcuation(nvl($Vlr_a,0),nvl($Vlr_b,0),nvl($Vlr_c,0),nvl($Vlr_d,0),nvl($Vlr_e,0));
            if ($Figure->getValida() <= 0){
                $Result = $Figure->getResult();
                $ResultParsed = $Figure->getParseResult();

                $Template = new HandlerView('000','000','000','000','000','000','000','000',round($Result,5),$ResultParsed);
                echo $Template->getTemplate();
                echo $Figure->getMessagError();
            }else{
                AlertaError($Figure->getMessagError());
            }
        }else{
            AlertaError("No se admiten LETRAS, Ingresar Solamente Valores NUMERICOS");
        }
   }

   function AlertaError($Info){
    $TemplateGenerica = new HandlerView('000','000','000','000','000','000','000','000','000','Exportar Ecuacion');
    $Alerta = "<script> alert(' ". $Info ."');window.location.href='/01_source_code/index.php';
    </script>"; 
    echo $TemplateGenerica->getTemplate();
    echo $Alerta;
   }

   function nvl($Var,$Value){
    if ($Var == null){
        $Valor = $Value;
       }
    else{
        $Valor = $Var;
    }
    return $Valor;
   }

   function ValidaAlfanumerico($Va1,$Va2,$Va3,$Va4,$Va5){
    $Validador = 0;
    $Auxiliar = "1";
     if (is_numeric(nvl($Va1,0))){
         $Auxiliar = "1";
     }else{
         $Validador = 1 + $Validador; 
     }

     if(is_numeric(nvl($Va2,0))){
         $Auxiliar = "1";
     }else{
         $Validador = 1 + $Validador;
     }

     if(is_numeric(nvl($Va3,0))){
         $Auxiliar = "1";
     }else{
         $Validador = 1 + $Validador;
     }

     if(is_numeric(nvl($Va4,0))){
         $Auxiliar = "1";
     }else{
         $Validador = 1 + $Validador;
     }

     if(is_numeric(nvl($Va5,0))){
         $Auxiliar = "1";
     }else{
         $Validador = 1 + $Validador;
     }
     
     return $Validador;
}
?>