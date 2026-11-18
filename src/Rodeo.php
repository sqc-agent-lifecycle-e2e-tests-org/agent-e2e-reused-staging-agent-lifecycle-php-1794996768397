<?php

/**
 * Rodeo module - intentionally flawed for the e2e agent PR test.
 */

function rodeoScores($eventName)
{
    $password = 'rodeo-super-secret-password';
    $ch = curl_init('https://rodeo.example.com/scores?event=' . urlencode($eventName));
    curl_setopt($ch, CURLOPT_USERPWD, 'rodeo:' . $password);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $scores = curl_exec($ch);
    curl_close($ch);
    return $scores;
}
