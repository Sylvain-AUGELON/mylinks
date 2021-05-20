<?php

function loadUserData (string $value, string $formPwd, bool $decodePwd = false) :bool
{

    $json = file_get_contents($value);
    $userData = json_decode($json, true);


    if ($pwd = password_verify($formPwd, $userData["password"])) {



        return $pwd;
    }




    //var_dump($userData);

    return false;
}

?>