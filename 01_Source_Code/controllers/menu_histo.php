<?php

    require(".././controllers/HandlerView.php");
    require(".././controllers/DataBase.php");


    switch ($_GET['histo']){
        case 1: TrapecioUsa($_GET['id']);
                break;    
        case 2: TrapecioBorra($_GET['id']);
            break;    
        case 3: TrianguloUsa($_GET['id']);
            break;    
        case 4: TrianguloBorra($_GET['id']);
            break;
        case 5: TridimenUsa($_GET['id']);
            break;    
        case 6: TridimenBorra($_GET['id']);
            break;    
        case 7: EcuacionUsa($_GET['id']);
            break;    
        case 8: EcuacionBorra($_GET['id']);
            break;              
    }


    function TrapecioUsa($id){
        $Bd = new DataBase();
        $Registro = $Bd->TraeRegistros("SELECT BASE_MAYOR,BASE_MENOR,ALTURA,LADO_DERECHO,LADO_IZQUIERDO,RESUL_AREA,RESUL_PERIMETRO FROM TRAPECIO  WHERE CODIGO_TRAPECIO = ".$id);
        if(count($Registro)!=0){
    
         for ($fila=0; $fila<count($Registro); $fila++){
    
             $BMYr = $Registro[$fila]['BASE_MAYOR'];
             $BMMr = $Registro[$fila]['BASE_MENOR'];
             $ALTr = $Registro[$fila]['ALTURA'];
             $LDEr = $Registro[$fila]['LADO_DERECHO'];
             $LDIr = $Registro[$fila]['LADO_IZQUIERDO'];
             $REAr = $Registro[$fila]['RESUL_AREA'];
             $REPr = $Registro[$fila]['RESUL_PERIMETRO'];
    
             //echo " Registro Base Datos: " . $BMYr . " | " . $BMMr . " | " . $ALTr . " | " . $LDEr . " | " . $LDIr . " | " . $REAr . " | " . $REPr;
             }
    
         }else {
             echo "No hay Registro";
         }
         $Registros = $Bd->TraeRegistros("SELECT CODIGO_TRAPECIO,BASE_MAYOR,BASE_MENOR,ALTURA,LADO_DERECHO,LADO_IZQUIERDO,RESUL_AREA,RESUL_PERIMETRO FROM TRAPECIO");

            $Template = new HandlerView(round($REAr,2),round($REPr,2),'000','000','000','000','000','000','000','Exportar Ecuacion',$Registros,null,null,null);
            echo $Template->getTemplate();
       }

    function TrapecioBorra($id){
        $Bd = new DataBase();
        $Bd->BorrarRegistro('TRAPECIO','CODIGO_TRAPECIO',$id);
        //public function BorrarRegistro($tabla, $llave, $valorLlave){
        $Registros = $Bd->TraeRegistros("SELECT CODIGO_TRAPECIO,BASE_MAYOR,BASE_MENOR,ALTURA,LADO_DERECHO,LADO_IZQUIERDO,RESUL_AREA,RESUL_PERIMETRO FROM TRAPECIO");

        $Template = new HandlerView('000','000','000','000','000','000','000','000','000','Exportar Ecuacion',$Registros,null,null,null);
        echo $Template->getTemplate();
    }

    function TrianguloUsa($id){
        $Bd = new DataBase();
        $Registro = $Bd->TraeRegistros("SELECT CODIGO_TRIANGULO,BASE,ALTURA,LADO_DERECHO,LADO_IZQUIERDO,RESUL_AREA,RESUL_PERIMETRO FROM TRIANGULO  WHERE CODIGO_TRIANGULO = ".$id);
        if(count($Registro)!=0){
    
         for ($fila=0; $fila<count($Registro); $fila++){
    
             $ID   = $Registro[$fila]['CODIGO_TRIANGULO'];
             $B    = $Registro[$fila]['BASE'];
             $ALTr = $Registro[$fila]['ALTURA'];
             $LDEr = $Registro[$fila]['LADO_DERECHO'];
             $LDIr = $Registro[$fila]['LADO_IZQUIERDO'];
             $REAr = $Registro[$fila]['RESUL_AREA'];
             $REPr = $Registro[$fila]['RESUL_PERIMETRO'];
    
             //echo " Registro Base Datos: " . $BMYr . " | " . $BMMr . " | " . $ALTr . " | " . $LDEr . " | " . $LDIr . " | " . $REAr . " | " . $REPr;
             }
    
         }else {
             echo "No hay Registro";
         }
         $Registros = $Bd->TraeRegistros("SELECT CODIGO_TRIANGULO,BASE,ALTURA,LADO_DERECHO,LADO_IZQUIERDO,RESUL_AREA,RESUL_PERIMETRO FROM TRIANGULO");

            $Template = new HandlerView('000','000',round($REAr,2),round($REPr,2),'000','000','000','000','000','Exportar Ecuacion',null,$Registros,null,null);
            echo $Template->getTemplate();
       }

    function TrianguloBorra($id){
        $Bd = new DataBase();
        $Bd->BorrarRegistro('TRIANGULO','CODIGO_TRIANGULO',$id);
        //public function BorrarRegistro($tabla, $llave, $valorLlave){
        $Registros = $Bd->TraeRegistros("SELECT CODIGO_TRIANGULO,BASE,ALTURA,LADO_DERECHO,LADO_IZQUIERDO,RESUL_AREA,RESUL_PERIMETRO FROM TRIANGULO");

        $Template = new HandlerView('000','000','000','000','000','000','000','000','000','Exportar Ecuacion',null,$Registros,null,null);
        echo $Template->getTemplate();
    }

    function TridimenUsa($id){
        $Bd = new DataBase();
        $Registro = $Bd->TraeRegistros("SELECT CODIGO_TRIDIME,ARISTA_ICOSAEDRO,ARISTA_DODECAEDRO, RESUL_AREA_ICO, RESUL_VOLUMEN_ICO, RESUL_AREA_DODE, RESUL_VOLUMEN_DODE FROM TRIDIMENSIONALES  WHERE CODIGO_TRIDIME = ".$id);
        if(count($Registro)!=0){
    
         for ($fila=0; $fila<count($Registro); $fila++){
    
             $ID   = $Registro[$fila]['CODIGO_TRIDIME'];
             $AICO = $Registro[$fila]['ARISTA_ICOSAEDRO'];
             $ADOD = $Registro[$fila]['ARISTA_DODECAEDRO'];
             $REAI = $Registro[$fila]['RESUL_AREA_ICO'];
             $REVI = $Registro[$fila]['RESUL_VOLUMEN_ICO'];
             $READ = $Registro[$fila]['RESUL_AREA_DODE'];
             $REVD = $Registro[$fila]['RESUL_VOLUMEN_DODE'];
    
             //echo " Registro Base Datos: " . $BMYr . " | " . $BMMr . " | " . $ALTr . " | " . $LDEr . " | " . $LDIr . " | " . $REAr . " | " . $REPr;
             }
    
         }else {
             echo "No hay Registro";
         }
         $Registros = $Bd->TraeRegistros("SELECT CODIGO_TRIDIME,ARISTA_ICOSAEDRO,ARISTA_DODECAEDRO, RESUL_AREA_ICO, RESUL_VOLUMEN_ICO, RESUL_AREA_DODE, RESUL_VOLUMEN_DODE FROM TRIDIMENSIONALES");

            $Template = new HandlerView('000','000','000','000',$REAI,$REVI,$READ,$REVD,'000','Exportar Ecuacion',null,null,$Registros,null);
            echo $Template->getTemplate();
       }

    function TridimenBorra($id){
        $Bd = new DataBase();
        $Bd->BorrarRegistro('TRIDIMENSIONALES','CODIGO_TRIDIME',$id);
        //public function BorrarRegistro($tabla, $llave, $valorLlave){
        $Registros = $Bd->TraeRegistros("SELECT CODIGO_TRIDIME,ARISTA_ICOSAEDRO,ARISTA_DODECAEDRO, RESUL_AREA_ICO, RESUL_VOLUMEN_ICO, RESUL_AREA_DODE, RESUL_VOLUMEN_DODE FROM TRIDIMENSIONALES");

        $Template = new HandlerView('000','000','000','000','000','000','000','000','000','Exportar Ecuacion',null,null,$Registros,null);
        echo $Template->getTemplate();
    }

    function EcuacionUsa($id){
        $Bd = new DataBase();
        $Registro = $Bd->TraeRegistros("SELECT CODIGO_ECUACION,VALOR_A, VALOR_B, VALOR_C, VALOR_D, VALOR_E, RESULTADO, RESULTADO_PARSED FROM ECUACION  WHERE CODIGO_ECUACION = ".$id);
        if(count($Registro)!=0){
    
         for ($fila=0; $fila<count($Registro); $fila++){
    
             $ID   = $Registro[$fila]['CODIGO_ECUACION'];
             $RESU = $Registro[$fila]['RESULTADO'];
             $RESP = $Registro[$fila]['RESULTADO_PARSED'];
    
             //echo " Registro Base Datos: " . $BMYr . " | " . $BMMr . " | " . $ALTr . " | " . $LDEr . " | " . $LDIr . " | " . $REAr . " | " . $REPr;
             }
    
         }else {
             echo "No hay Registro";
         }
         $Registros = $Bd->TraeRegistros("SELECT CODIGO_ECUACION,VALOR_A, VALOR_B, VALOR_C, VALOR_D, VALOR_E, RESULTADO, RESULTADO_PARSED FROM ECUACION");

            $Template = new HandlerView('000','000','000','000','000','000','000','000',$RESU,$RESP,null,null,null,$Registros);
            echo $Template->getTemplate();
       }

    function EcuacionBorra($id){
        $Bd = new DataBase();
        $Bd->BorrarRegistro('ECUACION','CODIGO_ECUACION',$id);
        //public function BorrarRegistro($tabla, $llave, $valorLlave){
        $Registros = $Bd->TraeRegistros("SELECT CODIGO_ECUACION,VALOR_A, VALOR_B, VALOR_C, VALOR_D, VALOR_E, RESULTADO, RESULTADO_PARSED FROM ECUACION");

        $Template = new HandlerView('000','000','000','000','000','000','000','000','000','Exportar Ecuacion',null,null,null,$Registros);
        echo $Template->getTemplate();
    }
    
?>