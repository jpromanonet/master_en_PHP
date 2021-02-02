<?php

// Control de flujo con condicionales

/*

--CONDICIONALES IF:--

if(condicion) {
    instrucciones
} else {
    otras instrucciones
}

Esto se llama "control de flujo" o "control flow"

 */

// OPERADORES DE COMPARACION

/*

'==' IGUAL
'===' ESTRICTAMENTE IGUAL
'!=' DIFERENTE DE...
'<>' DIFERENTE DE...
'!==' NO IDENTICO
'<' MENOR QUE
'>' MAYOR QUE
'<=' MENOR O IGUAL QUE
'>=' MAYOR O IGUAL QUE

*/

// Declaro variables
$color = "verde";
$year = 2021;
$continente = "Europa";
$dia = 3;

// Ejemplo 01

if($color == "verde"){
    echo "EL COLOR ES VERDE";
} else {
    echo "EL COLOR NO ES VERDE";
}

// Ejemplo 02

if($year === 2021){
    echo "El año es 2021!!";
} else {
    echo "El año NO es 2021";
}

// Ejemplo 03

if($continente === "Europa"){
    echo "Es Europeo";
} else {
    echo "No es Europeo";
}

// Ejemplo 04

if($dia === 1){
    echo "Es Lunes";
} else {
    if ($dia === 2) {
        echo "Es Martes";
    } else {
        if ($dia === 3) {
            echo "Es Miercoles";
        } else {
            if ($dia === 4) {
                echo "Es Jueves";
            } else {
                if ($dia === 5) {
                    echo "Es Viernes";
                } else {
                    if ($dia === 6) {
                        echo "Es Sabado";
                    } else {
                        if ($dia === 7) {
                            echo "Es Domingo";
                        }
                    }
                }
            }
        }
    }
}

?>