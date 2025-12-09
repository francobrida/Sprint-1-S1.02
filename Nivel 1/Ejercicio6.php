<?php

function isBitten(): bool { 
    return rand(0, 1) === 1;
    // Casting not necessary. Added comparision to make it cleaner.
}

if (isBitten()) { // Conditional added to actually use the function's result
    echo "Charlie bit you!";
} else {
    echo "Charlie didn't bite you!";
}

?>
