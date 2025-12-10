<?php

// shortened version and with variables instead of magic numbers

function calculateCost(float $duration, int $minutes = 3) : float {

$minimumCost = 0.10;
$extraCost = 0.05;

  return ($duration <= $minutes)? $minimumCost : $minimumCost + (($duration - $minutes) * $extraCost);

}

$myCost = calculateCost(5);
echo $myCost;


/*

OLD VERSION

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
*/
?>
