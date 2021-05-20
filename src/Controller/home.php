<?php
include '../src/Service/isLoggued.php';
include '../src/Service/redirect.php';

function home()
{
    $title = "My Link";

    if (isLoggued()) {
  //      echo "isathomeloggued:<br>";
  //      var_dump($_SESSION);
  //      echo "<br>".session_id();

        $favorite = filter_input(INPUT_POST, "favorites");
        $favoriteError = null;

        if ( null !== $favorite && !filter_var($favorite, FILTER_VALIDATE_URL)) {
            $favoriteError = "enter a valid url";
        } elseif ( null !== $favorite ) {
            //success
            if ( !array_key_exists("favorites", $_SESSION  ) ) {
                $_SESSION["favorites"] = [
                    'text' => "",
                    'href' => "$favorite",
                    'contentType' => "",
                    'favicon' => "",
                    'preview' => "",
                    'commentlist' => "",
                ];
            } else {
            $_SESSION["favorites"][] = [
                'text' => "",
                'href' => "$favorite",
                'contentType' => "",
                'favicon' => "",
                'preview' => "",
                'commentlist' => "",
            ];
            }



            file_put_contents( $_SESSION["userDataFile"], json_encode($_SESSION["favorites"]) );
        // file_put ....
        //header("location; /");
        //exit;
        } else {

        redirect("signin");
        }
        include '../templates/home.html.php';
    }
}
?>

