<?php

function bidon(string $value) :void
{

    $json = file_get_contents($value);

    $userData = json_decode($json, true);
    
    $_SESSION["favorites"] = $userData;
}