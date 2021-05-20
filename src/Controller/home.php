<?php
include '../src/Service/isLoggued.php';
include '../src/Service/redirect.php';

function home()
{
    $title = "My Link";

    if (!isLoggued()) {
        redirect("signin");
        exit;
    }

    $favorite = filter_input(INPUT_POST, "favorites");
    $favoriteError = null;

    if (null !== $favorite && !filter_var($favorite, FILTER_VALIDATE_URL)) {
        $favoriteError = "enter a valid url";
    } elseif (null !== $favorite) {
        //success
        $_SESSION["favorites"][] = [
            'text' => "",
            'href' => $favorite,
            'contentType' => "",
            'favicon' => "",
            'preview' => "",
            'commentlist' => "",
        ];

        file_put_contents($_SESSION["userDataFile"], json_encode($_SESSION["favorites"]));
        //header("location; /");
        //exit;
    }
    include '../templates/home.html.php';

    // echo "<pre>";
    // var_dump($favorite);
    // exit;

}
