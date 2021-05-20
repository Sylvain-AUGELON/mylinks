<?php

include '../src/Service/getSignUpForm.php';
include '../src/Service/isSubmitted.php';
include '../src/Service/isValid.php';
include '../src/Service/redirect.php';
include '../src/Service/login.php';
include '../src/Service/bidon.php';
include '../src/Service/loadUserData.php';

function signin()
{

    $title = "SignIn";
    $form = getSignUpForm();
    if (isSubmitted($form) && isValid($form)) {

        $hash = md5($form["email"]["value"]);
        $filename = './../vars/' . $hash . '.json';

        if (is_file($filename) && loadUserData($filename,$form["password"]["value"])) {
            login();

            $_SESSION["userDataFile"] = './../vars/'.$hash."data.json";
            bidon($_SESSION["userDataFile"]);
            $_SESSION['id'] = true;
            redirect("home");
            exit;

        } elseif (is_file($filename) && !loadUserData($filename,$form["password"]["value"],true)) {
            $form["email"]["error"] = "identifiants invalides";
        } else {
            $form["email"]["error"] = "Utilisateur inconnu, veuillez vous enregistrer";
        }
    }

    include '../templates/signin.html.php';

}
