<?php

// FULLY QUALIFIED NAME: \request

/**
 * represents the request coming to the server
 *
 * $_REQUEST, $_GET, $_POST etc.
 */
class request
{
    public static function dump()
    {
        var_dump($_REQUEST);
    }
}