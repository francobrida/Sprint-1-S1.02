<?php

countByStep(20, 2);     
countByStep();        

// Corrected the numbers by default. Added type hints, renamed the function, 
// and adapted everything to English.
function countByStep(int $number = 10, int $steps = 1): void {
    for ($i = 0; $i < $number; $i += $steps) {
        echo $i . "<br>";
    }
}

?>