<?php

include '../src/Service/saveUser.php';
include '../src/Service/getSignUpForm.php';
include '../src/Service/isSubmitted.php';
include '../src/Service/isValid.php';
include '../src/Service/redirect.php';

function signup()
{
    $title = "SignUP";
    $form = getSignUpForm(true);
    if (isSubmitted($form) && isValid($form,true)) {
        $hash = md5($form["email"]["value"]);
        $filename = './../vars/' . $hash . '.json';
        if (!is_file($filename)) {
            saveUser(
                $form["email"]["value"],
                $form["password"]["value"],
                $filename,
                $hash,
            );
            redirect("signin");
            exit; 
        }
        $form["email"]["error"] = "Email already exists";
    }
    include '../templates/signup.html.php';

}

?>
