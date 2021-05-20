<?php

function saveUser (
    string $email,
    string $password,
    string $filename,
    string $id): bool
{
    $user = [
        "id" => null,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT),
    ];
    $userData = [];


    if (file_put_contents($filename, json_encode($user)) && file_put_contents('./../vars/'.$id.'data.json', json_encode($userData)) ) {
        return true;
    }
    return false;
}