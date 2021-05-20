<?php

include '../src/Service/isLoggued.php';
include '../src/Service/redirect.php';

function logout(){
    if (isLoggued()) :
    session_destroy();
    $_SESSION = [];
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
    endif;
    redirect("signin");
}