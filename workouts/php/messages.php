<?php

class messages
{
    protected static $messages = [
        'error' => [],
        'warning' => [],
        'success' => [],
        'info' => []
    ];

    public static function getMessages()
    {
        return static::$messages;
    }

    public static function error($message)
    {
        static::$messages['error'][] = $message;
        
        // equivalent:
        // array_push(static::$messages['error'], $message);
    }

    public static function warning($message)
    {
        static::$messages['warning'][] = $message;
    }

    public static function success($message)
    {
        static::$messages['success'][] = $message;
    }

    public static function info($message)
    {
        static::$messages['info'][] = $message;
    }

    public static function flashMessages()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }

        $_SESSION['messages'] = static::$messages;
    }

    public static function loadFlashedMessages()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }

        if(isset($_SESSION['messages']))
        {
            static::$messages = array_merge(static::$messages, $_SESSION['messages']);

            unset($_SESSION['messages']);
        }
    }
}