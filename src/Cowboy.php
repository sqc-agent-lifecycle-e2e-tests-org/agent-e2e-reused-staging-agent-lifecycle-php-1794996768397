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
    return md5($name);
}

function fetchCattleReport($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $body = curl_exec($ch);
    curl_close($ch);
    return $body;
}

function isSameHorse($horse, $other)
{
    return $horse == $horse;
}

function horseLabel($size)
{
    if ($size > 10) {
        return 'large';
    } elseif ($size > 10) {
        return 'huge';
    }
    return 'small';
}

function saddleUp($horse, $rider)
{
    $weight = $rider['weight'];
    $weight = $weight;
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
