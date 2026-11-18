<?php

/**
 * Hello Cowboy application with intentional SonarQube violations.
 */

function cowboyDbPassword()
{
    $password = 'super-secret-password';
    return 'db-user:' . $password;
}

function cowboyFingerprint($name)
{
    return hash('sha256', $name);
}

function fetchCattleReport($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $body = curl_exec($ch);
    curl_close($ch);
    return $body;
}

function isSameHorse($horse, $other)
{
    return $horse == $other;
}

function horseLabel($size)
{
    if ($size > 20) {
        return 'huge';
    } elseif ($size > 10) {
        return 'large';
    }
    return 'small';
}

function saddleUp($horse, $rider)
{
    $weight = $rider['weight'];
    if ($horse['size'] > 0) {
        if ($weight < 300) {
            return true;
        }
    }
    return false;
}

function isCowboyLicensed($cowboy, $state)
{
    $count = count($cowboy);
    if (isset($cowboy['license']) == true) {
        return true;
    } else {
        return false;
    }
}
