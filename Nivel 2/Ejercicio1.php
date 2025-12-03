<?php

function costCall ($duration) {
    if ($duration <= 3) {   
        $cost = 0.10;   
    } else {    
      $cost = 0.10 + (($duration - 3) * 0.05);  
    }

    return $cost;

}

?>