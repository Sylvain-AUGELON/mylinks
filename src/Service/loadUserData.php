<?php

function loadUserData (string $value, string $formPwd) :bool
{

    $json = file_get_contents($value);
    $userData = json_decode($json, true);


    if (password_verify($formPwd, $userData["password"])) {
        return true;
    }




    //var_dump($userData);

    return false;
}