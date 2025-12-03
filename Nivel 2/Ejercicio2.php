<?php

function validScores ($score1, $score2, $score3) {

    if ($score1 < 0 || $score1 > 9999 || $score2 < 0 || $score2 > 9999 || $score3 < 0 || $score3 > 9999) {
      return "Error: Scores must be between 0 and 9999.";
    } else {
      return "Scores are valid.";
    }
}

function sumOfScores ($score1, $score2, $score3) {
    $sum = $score1 + $score2 + $score3;
    return $sum;
}

function averageScore ($score1, $score2, $score3) {
    $average = ($score1 + $score2 + $score3) / 3;
    return $average;
}

function rank ($score) {
    if ($score < 4000) {
        return "Principiante";
    } elseif ($score < 8000) {
        return "Intermedio";
    } else {
        return "Profesional";
    }
}
?>