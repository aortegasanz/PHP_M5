<?php
    $entero = 1;
    $doble = 1.1;
    $cadena = 'Alberto Ortega';
    $sino = True;

    echo "<br/> <strong>NIVEL 1</strong>";
    echo "<br/> <strong>Ejercicio 1</strong>";
    echo "<br/> Entero : ".$entero;
    echo "<br/> Doble : ".$doble;
    echo "<br/> Cadena : ".$cadena;
    echo "<br/> Booleano : ".$sino;
    echo "<br/>";

    echo "<br/> <strong>Ejercicio 2</strong>";
    $cadena_dos = 'Sanz';
    echo "<br/> Longitud Cadena 1 '".$cadena."' = ".strlen($cadena)." caracteres";
    echo "<br/> Longitud Cadena 2 '".$cadena_dos."' = ".strlen($cadena_dos)." caracteres";
    echo "<br/>";

    echo "<br/> <strong>Ejercicio 3</strong>";
    define("AOS", "Alberto Ortega Sanz");
    echo "<br/> Valor Constante AOS = ".AOS;
    echo "<br/>";

    echo "<br/> <strong>NIVEL 2</strong>";
    /* Ejercicio 1 */
    $array_a = array(2,123,4,111,99,44);
    $array_b = array(878,12,232);
    /* Ejercicio 2 */
    array_push($array_b, 33);
    /* Ejercicio 3 */
    $array_tot = array_merge($array_a, $array_b);
    echo "<br/> Tamaño array = ".count($array_tot);
    echo "<br/>";

    echo "<br/> <strong>NIVEL 3</strong>";
    echo "<br/> <strong>Ejercicio 1</strong>";
    foreach ($array_tot as $elem) {
        echo "<br/>".$elem;
    }
    echo "<br/>";

    echo "<br/> <strong>Ejercicio 2</strong>";

    $X = 1;
    $Y = 3;
    $M = 45.23;
    $N = 22.01;
    
    echo "<br/> El valor de X es : ".$X;
    echo "<br/> El valor de Y es : ".$Y;
    echo "<br/> La suma de X + Y es: ".($X + $Y);
    echo "<br/> La resta de X - Y es: ".($X - $Y);
    echo "<br/> El producto de de X * Y es: ".($X * $Y);
    echo "<br/> La divisi&oacute;n de X / Y es: ".($X / $Y);
    echo "<br/> El m&oacute;dulo de la división entre X e Y es: ".($X % $Y);

    echo "<br/>";

    echo "<br/> El valor de M es : ".$M;
    echo "<br/> El valor de N es : ".$N;
    echo "<br/> La suma de M + N es: ".($M + $N);
    echo "<br/> La resta de M - N es: ".($M - $N);
    echo "<br/> El producto de de M * N es: ".($M * $N);
    echo "<br/> La divisi&oacute;n de M / N es: ".($M / $N);
    echo "<br/> El m&oacute;dulo de la división entre M e N es: ".($M % $N);

    echo "<br/>";
    echo "<br/> El doble de X (".$X.") es : ".($X * 2);
    echo "<br/> El doble de Y (".$Y.") es :".($Y * 2);
    echo "<br/> El doble de M (".$M.") es :".($M * 2);
    echo "<br/> El doble de N (".$N.") es :".($N * 2);
    echo "<br/> La suma de X + Y + M + N  es : ".($X + $Y + $M + $N);
    echo "<br/> El producto X * Y * M * N es : ".($X * $Y * $M * $N);

    echo "<br/>";
    echo "<br/> <strong> fin </strong>";
?>