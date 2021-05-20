<?php

function isLoggued()
{
    session_start();

    if (array_key_exists("id", $_SESSION) ) {
        return true;
    }
    return false;
}