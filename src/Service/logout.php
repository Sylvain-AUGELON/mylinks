<?php


function logout()
{
    if ()
    session_destroy();
    $_SESSION= [];
    var_dump($_SESSION);
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );

    exit;
}
?>