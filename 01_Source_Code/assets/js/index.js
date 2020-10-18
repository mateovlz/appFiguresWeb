var constanteValidacion = 0;

function valBidimensional() {
    var base_mayor = document.getElementById("base_mayor");
    var base_menor = document.getElementById("base_menor");
    var altura_tra = document.getElementById("altura_tra");
    var lado_derecho_tra = document.getElementById("lado_derecho_tra");
    var lado_izquierdo_tra = document.getElementById("lado_izquierdo_tra");
    var btnCalcularBidi = document.getElementById("btnGuardarBidi");

    var numeroValida = 0;
    numeroValida = numeroValida + getvalidaEntero(base_mayor);
    numeroValida = numeroValida + getvalidaEntero(base_menor);
    numeroValida = numeroValida + getvalidaEntero(altura_tra);
    numeroValida = numeroValida + getvalidaEntero(base_menor);
    numeroValida = numeroValida + getvalidaEntero(lado_derecho_tra);
    numeroValida = numeroValida + getvalidaEntero(lado_izquierdo_tra);

    numeroValida = numeroValida + getvalidaNegativo(base_mayor);
    numeroValida = numeroValida + getvalidaNegativo(base_menor);
    numeroValida = numeroValida + getvalidaNegativo(altura_tra);
    numeroValida = numeroValida + getvalidaNegativo(base_menor);
    numeroValida = numeroValida + getvalidaNegativo(lado_derecho_tra);
    numeroValida = numeroValida + getvalidaNegativo(lado_izquierdo_tra);


    if (numeroValida > 0) {
        btnCalcularBidi = btnCalcularBidi.setAttribute("style", "pointer-events: none;");
    } else {
        btnCalcularBidi = btnCalcularBidi.setAttribute("style", "pointer-events: all;");
    }
}

function valBidimensionaldos() {

    var lado_derecho_tri = document.getElementById("lado_derecho_tri");
    var lado_izquierdo_tri = document.getElementById("lado_izquierdo_tri");
    var base_tri = document.getElementById("base_tri");
    var altura_tri = document.getElementById("altura_tri");
    var btnCalcularBidi2 = document.getElementById("btnGuardarBidi2");

    var numeroValida = 0;

    numeroValida = numeroValida + getvalidaEntero(lado_derecho_tri);
    numeroValida = numeroValida + getvalidaEntero(lado_izquierdo_tri);
    numeroValida = numeroValida + getvalidaEntero(base_tri);
    numeroValida = numeroValida + getvalidaEntero(altura_tri);

    numeroValida = numeroValida + getvalidaNegativo(lado_derecho_tri);
    numeroValida = numeroValida + getvalidaNegativo(lado_izquierdo_tri);
    numeroValida = numeroValida + getvalidaNegativo(base_tri);
    numeroValida = numeroValida + getvalidaNegativo(altura_tri);


    if (numeroValida > 0) {
        btnCalcularBidi2 = btnCalcularBidi2.setAttribute("style", "pointer-events: none;");
    } else {
        btnCalcularBidi2 = btnCalcularBidi2.setAttribute("style", "pointer-events: all;");
    }
}

function valTridimensional() {
    var arista_icosaedro = document.getElementById("arista_icosaedro");
    var arista_decaedro = document.getElementById("arista_decaedro");

    var btnCalularTridi = document.getElementById("btnCalcularTridi");

    var numeroValida = 0;
    numeroValida = numeroValida + getvalidaEntero(arista_icosaedro);
    numeroValida = numeroValida + getvalidaEntero(arista_decaedro);

    numeroValida = numeroValida + getvalidaNegativo(arista_icosaedro);
    numeroValida = numeroValida + getvalidaNegativo(arista_decaedro);

    if (numeroValida > 0) {
        btnCalularTridi = btnCalularTridi.setAttribute("style", "pointer-events: none;");
    } else {
        btnCalularTridi = btnCalularTridi.setAttribute("style", "pointer-events: all;");
    }
}

function valEcuacion() {
    var vlr_a = document.getElementById("vlr_a");
    var vlr_b = document.getElementById("vlr_b");
    var vlr_c = document.getElementById("vlr_c");
    var vlr_d = document.getElementById("vlr_d");
    var vlr_e = document.getElementById("vlr_e");

    var btnCalularTridi = document.getElementById("btnCalculateForm");

    var numeroValida = 0;
    numeroValida = numeroValida + getvalidaEntero(vlr_a);
    numeroValida = numeroValida + getvalidaEntero(vlr_b);
    numeroValida = numeroValida + getvalidaEntero(vlr_c);
    numeroValida = numeroValida + getvalidaEntero(vlr_d);
    numeroValida = numeroValida + getvalidaEntero(vlr_e);

    numeroValida = numeroValida + getvalidaNegativo(vlr_a);
    numeroValida = numeroValida + getvalidaNegativo(vlr_b);
    numeroValida = numeroValida + getvalidaNegativo(vlr_c);
    numeroValida = numeroValida + getvalidaNegativo(vlr_d);
    numeroValida = numeroValida + getvalidaNegativo(vlr_e);


    if (numeroValida > 0) {
        btnCalularTridi = btnCalularTridi.setAttribute("style", "pointer-events: none;");
    } else {
        btnCalularTridi = btnCalularTridi.setAttribute("style", "pointer-events: all;");
    }
}

function getvalidaEntero(Element) {
    if (isNaN(Element.value)) {
        //console.log('Es Texto wey');
        Element = Element.setAttribute("style", "background: #F64444;");
        //alert("El Valor Ingresado de Debe ser un Numero.");
        //ElementButton = ElementButton.setAttribute("style", "pointer-events: none;");
    } else {
        //console.log('Es numero wey')
        Element = Element.setAttribute("style", "background: #FFFFFF;");
        //ElementButton = ElementButton.setAttribute("style", "pointer-events: all;");
    }
}

function getvalidaNegativo(Element) {
    var numeroValida = 0;
    if (parseFloat(Element.value) < 0) {
        numeroValida = 1;
        Element = Element.setAttribute("style", "background: #F64444;");
    }
    return numeroValida;
}

function getvalidaEntero(Element) {
    var numeroValida = 0;
    if (isNaN(Element.value)) {
        numeroValida = 1;
        Element = Element.setAttribute("style", "background: #F64444;");
    } else {
        Element = Element.setAttribute("style", "background: #FFFFFF;");
    }
    return numeroValida;
}

function limpiaIngresos(numFuncion) {
    if (numFuncion == 1) {

        var base_mayor = document.getElementById("base_mayor");
        var base_menor = document.getElementById("base_menor");
        var altura_tra = document.getElementById("altura_tra");
        var lado_derecho_tra = document.getElementById("lado_derecho_tra");
        var lado_izquierdo_tra = document.getElementById("lado_izquierdo_tra");



        var resul_area_trapecio = document.getElementById("resul_area_trapecio");

        var resul_perimetro_trapecio = document.getElementById("resul_perimetro_trapecio");

        fieldsClear(base_mayor);
        fieldsClear(base_menor);
        fieldsClear(altura_tra);
        fieldsClear(lado_derecho_tra);
        fieldsClear(lado_izquierdo_tra);



        resultValues(resul_area_trapecio);

        resultValues(resul_perimetro_trapecio);

        var BtnGuardar = document.getElementById("btnCalcularTridi");
        BtnGuardar = BtnGuardar.setAttribute("style", "pointer-events: all;");
    }
    if (numFuncion == 2) {


        var lado_derecho_tri = document.getElementById("lado_derecho_tri");
        var lado_izquierdo_tri = document.getElementById("lado_izquierdo_tri");
        var base_tri = document.getElementById("base_tri");
        var altura_tri = document.getElementById("altura_tri");

        var resul_area_triangulo = document.getElementById("resul_area_triangulo");
        var resul_perimetro_triangulo = document.getElementById("resul_perimetro_triangulo");



        fieldsClear(lado_derecho_tri);
        fieldsClear(lado_izquierdo_tri);
        fieldsClear(base_tri);
        fieldsClear(altura_tri);

        resultValues(resul_area_triangulo);

        resultValues(resul_perimetro_triangulo);
        var BtnGuardar = document.getElementById("btnCalcularTridi");
        BtnGuardar = BtnGuardar.setAttribute("style", "pointer-events: all;");
    }
    if (numFuncion == 3) {

        var arista_icosaedro = document.getElementById("arista_icosaedro");
        var arista_decaedro = document.getElementById("arista_decaedro");

        var resul_area_isocaedro = document.getElementById("resul_area_isocaedro");
        var resul_area_decaedro = document.getElementById("resul_area_decaedro");
        var resul_volumen_isocaedro = document.getElementById("resul_volumen_isocaedro");
        var resul_volumen_decaedro = document.getElementById("resul_volumen_decaedro");

        fieldsClear(arista_icosaedro);
        fieldsClear(arista_decaedro);

        resultValues(resul_volumen_isocaedro);
        resultValues(resul_volumen_decaedro);
        resultValues(resul_area_isocaedro);
        resultValues(resul_area_decaedro);
        var BtnGuardar = document.getElementById("btnCalcularTridi");
        BtnGuardar = BtnGuardar.setAttribute("style", "pointer-events: all;");
    }
    if (numFuncion == 4) {

        var vlr_a = document.getElementById("vlr_a");
        var vlr_b = document.getElementById("vlr_b");
        var vlr_c = document.getElementById("vlr_c");
        var vlr_d = document.getElementById("vlr_d");
        var vlr_e = document.getElementById("vlr_e");


        fieldsClear(vlr_a);
        fieldsClear(vlr_b);
        fieldsClear(vlr_c);
        fieldsClear(vlr_d);
        fieldsClear(vlr_e);

        resultValues(vlr_y);


        setResultValues(resul_Export, "Exportar Ecuacion")


        var BtnGuardar = document.getElementById("btnCalcularTridi");
        BtnGuardar = BtnGuardar.setAttribute("style", "pointer-events: all;");
    }
}

// Esta funcion le asgina el valor de 0000 al elemento que se ingresa.
function resultValues(Element) {
    Element = Element.innerHTML = "0000"
}

// Esta funcion se encarga de asignar valor vacio y color blanco a elemento que se ingrese
function fieldsClear(Element) {
    Elemenntwin = Element;
    Element = Element.setAttribute("style", "background: #FFFFFF;");
    Elemenntwin = Elemenntwin.value = "";
}

// Esta funcion le asigna el valor al elemento de html
function setResultValues(Element, Value) {
    Element = Element.innerHTML = Value;
}

// Esta funcion se encarga de remplazar los valores que son nulos por el valor que se le ingresan
function nvl(Value, valuePredet) {
    if (Value == "") {
        returnValue = parseFloat(valuePredet);
    } else {
        returnValue = parseFloat(Value);
    }
    return returnValue;
}

// Reliza el calculo de las figuras bidimensionales
function calculateBidimensionaltra() {

    var base_mayor = document.getElementById("base_mayor");
    var base_menor = document.getElementById("base_menor");
    var altura_tra = document.getElementById("altura_tra");
    var lado_derecho_tra = document.getElementById("lado_derecho_tra");
    var lado_izquierdo_tra = document.getElementById("lado_izquierdo_tra");

    var resul_area_trapecio = document.getElementById("resul_area_trapecio");
    var resul_perimetro_trapecio = document.getElementById("resul_perimetro_trapecio");

    var perimeterTra = parseFloat(nvl(base_mayor.value, 0)) + parseFloat(nvl(base_menor.value, 0)) + parseFloat(nvl(lado_derecho_tra.value, 0)) + parseFloat(nvl(lado_izquierdo_tra.value, 0));
    var resultado = perimeterTra;
    setResultValues(resul_perimetro_trapecio, resultado);

    var areaTra = ((parseFloat(nvl(base_mayor.value, 0)) + parseFloat(nvl(base_menor.value, 0))) * parseFloat(nvl(altura_tra.value, 0))) / 2;
    var resul_areatra = areaTra;
    setResultValues(resul_area_trapecio, resul_areatra);

}

function calculateBidimensionaltri() {

    var lado_derecho_tri = document.getElementById("lado_derecho_tri");
    var lado_izquierdo_tri = document.getElementById("lado_izquierdo_tri");
    var base_tri = document.getElementById("base_tri");
    var altura_tri = document.getElementById("altura_tri");

    var resul_area_triangulo = document.getElementById("resul_area_triangulo");

    var resul_perimetro_triangulo = document.getElementById("resul_perimetro_triangulo");

    var perimeterTri = parseFloat(nvl(lado_derecho_tri.value, 0)) + parseFloat(nvl(lado_izquierdo_tri.value, 0)) + parseFloat(nvl(base_tri.value, 0));
    var resul_pertri = perimeterTri;
    setResultValues(resul_perimetro_triangulo, resul_pertri);


    var areaTri = (parseFloat(nvl(base_tri.value, 0)) * parseFloat(nvl(altura_tri.value, 0))) / 2;
    var resul_areaTri = areaTri;
    setResultValues(resul_area_triangulo, resul_areaTri);
}

// Reliza el calculo de las figuras Tridimensionales
function calculateTridimensional() {
    var arista_icosaedro = document.getElementById("arista_icosaedro");
    var arista_decaedro = document.getElementById("arista_decaedro");

    var numeroValida = 0;
    numeroValida = numeroValida + getvalidaEntero(arista_icosaedro);
    numeroValida = numeroValida + getvalidaEntero(arista_decaedro);
    console.log(numeroValida);

    var color = arista_decaedro.style.background;
    console.log(color);

    var resul_area_isocaedro = document.getElementById("resul_area_isocaedro");
    var resul_area_decaedro = document.getElementById("resul_area_decaedro");
    var resul_volumen_isocaedro = document.getElementById("resul_volumen_isocaedro");
    var resul_volumen_decaedro = document.getElementById("resul_volumen_decaedro");

    var areaIsocaedro = 5 * Math.sqrt(3) * Math.pow(parseFloat(nvl(arista_icosaedro.value, 0)), 2);
    var resultado = areaIsocaedro.toFixed(2);
    setResultValues(resul_area_isocaedro, resultado);

    var areaDecaedro = 3 * (Math.sqrt(25 + 10 * Math.sqrt(5))) * Math.pow(parseFloat(nvl(arista_decaedro.value, 0)), 2);
    var resultado = areaDecaedro.toFixed(2);
    setResultValues(resul_area_decaedro, resultado);

    var volumenIcosaedro = (5 / 12) * (3 + Math.sqrt(5)) * Math.pow(parseFloat(nvl(arista_icosaedro.value, 0)), 3);
    var resultado = volumenIcosaedro.toFixed(2);
    setResultValues(resul_volumen_isocaedro, resultado);

    var volumenDecaedro = (1 / 4) * (15 + 7 * Math.sqrt(5)) * Math.pow(parseFloat(nvl(arista_decaedro.value, 0)), 3);
    var resultado = volumenDecaedro.toFixed(2);
    setResultValues(resul_volumen_decaedro, resultado);
    // y= ( (((a*b*d)*8)/(cos(sqrt(a*b-e)))) / (sqrt(a*b-e)- sen( ((c-d)/(e+a))+1)) ) / ( (sen(((sqrt(a+b*d))/(d-a+e) )))/cos(( (10)/(10* d + (a*b)))) )
}

function calculateFormula() {
    var numValida = 0;
    var a = parseFloat(nvl(document.getElementById("vlr_a").value, 0));
    var b = parseFloat(nvl(document.getElementById("vlr_b").value, 0));
    var c = parseFloat(nvl(document.getElementById("vlr_c").value, 0));
    var d = parseFloat(nvl(document.getElementById("vlr_d").value, 0));
    var e = parseFloat(nvl(document.getElementById("vlr_e").value, 0));


    var vlr_y = document.getElementById("vlr_y");

    var ecuaIzquierda = (((((a + b) / (a + e))) - (acos((b - c) / 10))) / (10 * (asin((d * 1) / 10))));

    if (isNaN(ecuaIzquierda)) {
        var asinIzq = asin(((d * 1) / 10));
        if (isNaN(asinIzq)) {
            alert("El valor del arcoseno del lado izquierdo no se encuentra en el rango del arcoseno es entre -1 y 1");
            numValida = numValida + 1;
        }
        var acosIzq = acos(((b - c) / 10));

        if (isNaN(acosIzq)) {
            alert("El valor del arcocoseno del lado izquierdo  no se encuentra en el rango del arcocoseno es entre -1 y 1");
            numValida = numValida + 1;
        }
        var divisionarribaizq1 = ((a + b) / (a + e))
        if (isNaN(divisionarribaizq1)) {
            alert("El valor de la division arriba 1 izquierda es iugal o menor a cero lo cual es imposible de resolver");
            numValida = numValida + 1;
        }
        var divisionarribaizq2 = ((b - c) / 10);
        if (isNaN(divisionarribaizq2)) {
            alert("El valor de la division arriba 2 izquierda es iugal o menor a cero lo cual es imposible de resolver");
            numValida = numValida + 1;
        }
        var divisionabajoizq = ((d * 1) / 10);
        if (isNaN(divisionabajoizq)) {
            alert("El valor de la division abajo  izquierda es iugal o menor a cero lo cual es imposible de resolver");
            numValida = numValida + 1;
        }



    }

    var ecuaDerecha = ((((asin(a / (c * 9))) * sqrt((c + d)))) / (acos((sqrt(15 - e) / 5))));

    if (isNaN(ecuaDerecha)) {
        var asinDer = asin(a / (c * 9));
        if (isNaN(asinDer)) {
            alert("El valor del arcoseno del lado derecho no se encuentra en el rango del arcoseno que es es entre -1 y 1");
            numValida = numValida + 1;
        }
        var raizDerechaArriba = sqrt((c + d));
        if (isNaN(raizDerechaArriba)) {
            alert("El valor de la raiz arriba derecha es menor a 0. Debe ser mayor")
            numValida = numValida + 1;
        }
        var raizDerAbajo = sqrt(15 - e);
        if (isNaN(raizDerAbajo)) {
            alert("El valor de la raiz abajo derecha es menor a 0. Debe ser mayor")
            numValida = numValida + 1;
        }
        var acosDer = acos((sqrt(15 - e) / 5));
        if (isNaN(acosDer)) {
            alert("El valor del arcocoseno del lado derecho no se encuentra en el rango del arcocoseno que es es entre -1 y 1");
            numValida = numValida + 1;
        }
        var divArribaDer = (c * 9);
        if (isNaN(divArribaDer)) {
            alert("El valor de la division arriba derecha es igual o menor a cero lo cual es imposible de resolver.");
            numValida = numValida + 1;
        }
        var divAbajoDer = (acos((sqrt(15 - e) / 5)));
        if (isNaN(divAbajoDer)) {
            alert("El valor de la division abajo derecha es igual o menor a cero lo cual es imposible de resolver.");
            numValida = numValida + 1;
        }
    }


    if (numValida == 0) {

        var valor = ((((((a + b) / (a + e))) - (acos((b - c) / 10))) / (10 * (asin((d * 1) / 10)))) + ((((asin(a / (c * 9))) * sqrt((c + d)))) / (acos((sqrt(15 - e) / 5)))));

        var ecuaExport = "((((((" + a + " + " + b + ") / ( " + a + " + " + e + "))) - (acos(( " + b + " - " + c + ") / 10))) / (10 * (asin((" + d + " * 1) / 10)))) + ((((asin(" + a + " / (" + c + " * 9))) * sqrt((" + c + " + " + d + ")))) / (acos((sqrt(15 - " + e + ") / 5)))))";

        var resul_Export = document.getElementById("resul_Export");
        setResultValues(resul_Export, ecuaExport);

        var resultado = valor.toFixed(9);
        setResultValues(vlr_y, resultado);
    }
}

function acos(Value) {
    var cal = Math.acos(Value);
    return parseFloat(cal);
}

function sqrt(Value) {
    var cal = Math.sqrt(Value);
    return parseFloat(cal);
}

function asin(Value) {
    var cal = Math.asin(Value);
    return parseFloat(cal);
}