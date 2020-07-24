<?php

function randomHexColor()
{
    $values = '0123456789ABCDEF';
    $hex = '#';

    for($x = 0; $x < 6; $x++)
    {
        $z = rand(0,15);
        $hex .= $values[$z];
    }
    
    return $hex;
}

echo randomHexColor();