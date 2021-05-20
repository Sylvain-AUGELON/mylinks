<?php

function isLoggued()
{
    session_start();

    if (!array_key_exists("id", $_SESSION) ) :

       // echo "isnotloggued:<br>".session_id();
        //var_dump($_SESSION);
        return false;

    endif;

    // echo "isloggued:<br>".session_id();
    // var_dump($_SESSION);
    return true;
}
?>