<?php

function calcularGrado($nota) {

    if ($nota >= 60) {
        return "Primera División";
    } else if ($nota >= 45) {
        return "Segunda División";
    } else if ($nota >= 33) {
        return "Tercera División";
    } else {
        return "Reprobado";
    }

}

?>
