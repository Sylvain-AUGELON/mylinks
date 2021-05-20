<?php
function login( )
{
    session_start();
    $_SESSION["id"] = session_id();
    $_SESSION["status"] = session_status();
}
?>