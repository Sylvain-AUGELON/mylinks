<?php

function bidon(string $value) :void
{

    $json = file_get_contents($value);

    $userData = json_decode($json, true);

    echo "<pre>";
    var_dump($userData);
    exit;
    $fuck = "";
    if ( $fuck === $userData) {
        return ;

    }    $_SESSION["favorites"] = $userData ;
}