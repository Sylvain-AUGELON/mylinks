<?php

function getSignUpForm ($confirm = false): array
{
    $form = [
        "email" => [
            "value" => filter_input(INPUT_POST, "email"),
            "error" => null,
        ],
        "password" => [
            "value" => filter_input(INPUT_POST, "password"),
            "error" => null,
        ],
    ];
    if ($confirm):
        $form["confirm"] = [
            "value" => filter_input(INPUT_POST, "confirm"),
            "error" => null,
        ];
    return $form;
    endif;
    return $form;

}