<?php

/**
 * Hello Cowboy - placeholder source.
 */

function greet($name, $mood)
{
    $greeting = 'Howdy, ' . $name . '!';
    switch ($mood) {
        case 0:
            $greeting = $greeting . ' Welcome!';
            // no break
        case 1:
            $greeting = $greeting . ' Again!';
            break;
        default:
            break;
    }
    return $greeting;
}
