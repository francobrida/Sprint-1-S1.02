<?php
cuenta (20, 2);

function cuenta ($number, $steps){
    $number = ($number == null) ? 10 : $number;

    for ($i = 0; $i < $number; $i += $steps) {
        echo $i . "<br>";
    }

}

?>