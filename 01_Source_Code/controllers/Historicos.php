<?php

class Historicos {
    private $histTrapecio;
    private $histTriangulo;
    private $histTridimen;
    private $histEcuacion;
/*
    function __construct($histTrapecio,$histTriangulo,$histTridimensionales,$histEcuacion){
        $this->Template = $this->replaceValues($histTrapecio,$histTriangulo,$histTridimensionales,$histEcuacion);
    }
*/
    function getHistTrapecio($histTrapecio){
        $Cadena = "";
        if(count($histTrapecio)!=0){
            for ($fila=0; $fila<count($histTrapecio); $fila++){
                $ID  = $histTrapecio[$fila]['CODIGO_TRAPECIO'];
                $BMY = $histTrapecio[$fila]['BASE_MAYOR'];
                $BMM = $histTrapecio[$fila]['BASE_MENOR'];
                $ALT = $histTrapecio[$fila]['ALTURA'];
                $LDE = $histTrapecio[$fila]['LADO_DERECHO'];
                $LDI = $histTrapecio[$fila]['LADO_IZQUIERDO'];
                $REA = $histTrapecio[$fila]['RESUL_AREA'];
                $REP = $histTrapecio[$fila]['RESUL_PERIMETRO'];

                $Cadena .= "<tr>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$BMY."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$BMM."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$ALT."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$LDE."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$LDI."</p>
                                    </td>
                                    <td>
                                        <a type='submit' class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi' href='../../01_source_code/controllers/menu_histo.php?histo=1&id=" . htmlentities($ID, ENT_QUOTES, "UTF-8") . "'>Usar</a>
                                    </td>
                                    <td>
                                        <a type='submit' class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi' href='../../01_source_code/controllers/menu_histo.php?histo=2&id=" . htmlentities($ID, ENT_QUOTES, "UTF-8") . "'>Borrar</a>
                                    </td>
                            </tr>";
            }
        }else{
            $Cadena .= "<tr>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <a class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi'>Usar</a>
                                    </td>
                                    <td>
                                        <a class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi'>Borrar</a>
                                    </td>
                            </tr>";
        }
        return $Cadena;
    }

    function getHistTriangulo($histTriangulo){
        $Cadena = "";
        if(count($histTriangulo)!=0){
            for ($fila=0; $fila<count($histTriangulo); $fila++){
                $ID  = $histTriangulo[$fila]['CODIGO_TRIANGULO'];
                $B = $histTriangulo[$fila]['BASE'];
                $ALT = $histTriangulo[$fila]['ALTURA'];
                $LDE = $histTriangulo[$fila]['LADO_DERECHO'];
                $LDI = $histTriangulo[$fila]['LADO_IZQUIERDO'];
                $REA = $histTriangulo[$fila]['RESUL_AREA'];
                $REP = $histTriangulo[$fila]['RESUL_PERIMETRO'];

                $Cadena .= "<tr>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$LDE."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$LDI."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$B."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$ALT."</p>
                                    </td>
                                    <td>
                                        <a type='submit' class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi' href='../../01_source_code/controllers/menu_histo.php?histo=3&id=" . htmlentities($ID, ENT_QUOTES, "UTF-8") . "'>Usar</a>
                                    </td>
                                    <td>
                                        <a type='submit' class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi' href='../../01_source_code/controllers/menu_histo.php?histo=4&id=" . htmlentities($ID, ENT_QUOTES, "UTF-8") . "'>Borrar</a>
                                    </td>
                            </tr>";
            }
        }else{
            $Cadena .= "<tr>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <a class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi'>Usar</a>
                                    </td>
                                    <td>
                                        <a  class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi'>Borrar</a>
                                    </td>
                            </tr>";
        }
        return $Cadena;
    }
    function getHistTridimen($histTridimen){
        $Cadena = "";
        if(count($histTridimen)!=0){
            for ($fila=0; $fila<count($histTridimen); $fila++){
                $ID  = $histTridimen[$fila]['CODIGO_TRIDIME'];
                $AICO = $histTridimen[$fila]['ARISTA_ICOSAEDRO'];
                $ADOD = $histTridimen[$fila]['ARISTA_DODECAEDRO'];

                $Cadena .= "<tr>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$AICO."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$ADOD."</p>
                                    </td>
                                    <td>
                                        <a type='submit' class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi' href='../../01_source_code/controllers/menu_histo.php?histo=5&id=" . htmlentities($ID, ENT_QUOTES, "UTF-8") . "'>Usar</a>
                                    </td>
                                    <td>
                                        <a type='submit' class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi' href='../../01_source_code/controllers/menu_histo.php?histo=6&id=" . htmlentities($ID, ENT_QUOTES, "UTF-8") . "'>Borrar</a>
                                    </td>
                            </tr>";
            }
        }else{
            $Cadena .= "<tr>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <a class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi'>Usar</a>
                                    </td>
                                    <td>
                                        <a  class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi'>Borrar</a>
                                    </td>
                            </tr>";
        }
        return $Cadena;
    }

    function getHistEcuacion($histEcuacion){
        $Cadena = "";
        if(count($histEcuacion)!=0){
            for ($fila=0; $fila<count($histEcuacion); $fila++){
                $ID  = $histEcuacion[$fila]['CODIGO_ECUACION'];
                $A = $histEcuacion[$fila]['VALOR_A'];
                $B = $histEcuacion[$fila]['VALOR_B'];
                $C = $histEcuacion[$fila]['VALOR_C'];
                $D = $histEcuacion[$fila]['VALOR_D'];
                $E = $histEcuacion[$fila]['VALOR_E'];

                $Cadena .= "<tr>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$A."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$B."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$C."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$D."</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>".$E."</p>
                                    </td>
                                    <td>
                                        <a type='submit' class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi' href='../../01_source_code/controllers/menu_histo.php?histo=7&id=" . htmlentities($ID, ENT_QUOTES, "UTF-8") . "'>Usar</a>
                                    </td>
                                    <td>
                                        <a type='submit' class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi' href='../../01_source_code/controllers/menu_histo.php?histo=8&id=" . htmlentities($ID, ENT_QUOTES, "UTF-8") . "'>Borrar</a>
                                    </td>
                            </tr>";
            }
        }else{
            $Cadena .= "<tr>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <p name='resul_area_trapecio' id='resul_area_trapecio' class='results-vals'>0</p>
                                    </td>
                                    <td>
                                        <a class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi'>Usar</a>
                                    </td>
                                    <td>
                                        <a  class='btn-calcular' name='btnGuardarBidi' id='btnGuardarBidi'>Borrar</a>
                                    </td>
                            </tr>";
        }
        return $Cadena;
    }
}


?>