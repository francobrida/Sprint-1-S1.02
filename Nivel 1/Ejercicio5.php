<?php
// Added type hints, renamed the function, and adapted it to English.
function calculateGrade(int $score): string {

    if ($score >= 60) {
        return "First Division";
    } elseif ($score >= 45) {
        return "Second Division";
    } elseif ($score >= 33) {
        return "Third Division";
    } else {
        return "Fail";
    }

}

?>
