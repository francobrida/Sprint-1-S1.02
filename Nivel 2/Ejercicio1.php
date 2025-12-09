<?php

function calculateCost(float $duration) : float {
    if ($duration <= 3) {   
        $cost = 0.10;   
    } else {    
      $cost = 0.10 + (($duration - 3) * 0.05);  
    }

    return $cost;

}

$myCost = calculateCost(5);
echo $myCost;

?>