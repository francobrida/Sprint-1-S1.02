<?php

function validateScores(float $score1, float $score2, float $score3) : string{

    if ($score1 < 0 || $score1 > 9999 || $score2 < 0 || $score2 > 9999 || $score3 < 0 || $score3 > 9999) {
      return "Error: Scores must be between 0 and 9999.";
    } else {
      return "Scores are valid.";
    }
}

function sumScores (float $score1, float $score2, float $score3) : float{
    $sum = $score1 + $score2 + $score3;
    return $sum;
}

function calculateAverageScore (float $score1, float $score2, float $score3) : float{
    return sumScores($score1, $score2, $score3) / 3;
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