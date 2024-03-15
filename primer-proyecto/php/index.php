<?php

    # Ejercicio 1 - Crear una variable que guarde un número y verificar (if) si es negativo, positivo o cero

    $numero = (int)8;
    if ($numero < 0) {
        echo "<p style='color: green'><b>El número ingresado es negativo</b></p>";
    } else if ($numero > 1) {
        echo "<p style='color: blue'><b>El número ingresado es positivo</b></p>";
    } else if ($numero === 0) {
        echo "<p style='color: purple'><b>El número ingresado es cero</b></p>";
    } else {
        echo "<p style='color: red'><b>Has ingresado una opción no válida</b></p>";
    }

    # Ejercicio 2 - Guardar en una variable los meses y hacer un switch, mostrar en que época del año está
    $mes = (string)"Enero";
    switch ($mes) {
        
        case 'Noviembre':
        case 'Diciembre':
        case 'Enero':
        case 'Febrero':
        case 'Marzo':
        case 'Abril':
            echo "<p style='color: green'><b>Escribiste el mes $mes, el cuál pertenece al Verano en El Salvador</b></p>";
            break;

        case 'Mayo':
        case 'Junio':
        case 'Julio':
        case 'Agosto':
        case 'Septiembre':
        case 'Octubre':
            echo "<p style='color: gray'><b>Escribiste el mes $mes, el cuál pertenece al Invierno en El Salvador</b></p>";
            break;
        
        default:
            echo "<p style='color: red'><b>Has escrito una opción no válida</b></p>";
            break;
    }

    # Ejercicio 3 - Subir todo a git

?>