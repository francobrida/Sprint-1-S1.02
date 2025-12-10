<?php

// Added Arrays to the respective functions to optimize.

function validateScores(array $scores) : string {

    foreach ($scores as $score) {
        if ($score < 0 || $score > 9999) {
        return "Error: Scores must be between 0 and 9999.";
        }   
    }
    return "Scores are valid.";
}

function sumScores (array $scores) : float {
    return array_sum($scores);
}

function calculateAverageScore (array $scores) : float{
    return sumScores($scores) / count($scores);
}

function rankScores(float $score) : string {
    if ($score < 4000) {
        return "Beginner";
    } elseif ($score < 8000) {
        return "Intermediate";
    } else {
        return "Professional";
    }
}
?>