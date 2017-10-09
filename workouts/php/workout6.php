<?php

// 1.
$user_id = 4;

// 2.
session_start();

// 3.
// var_dump($_SESSION);

// 4., 5.
// LOGIN 
// $_SESSION['user_id'] = $user_id;

// LOGOUT
// unset($_SESSION['user_id']);
// $_SESSION = []; // clean all information from the session including the id

// 6.
$username = 'Slartibartfast';

// 7.
$user = [
    'user_id' => $user_id,
    'username' => $username
];

// 8.
class Auth
{
    protected static $users = [];

    // 9.
    public static function addUser($user)
    {
        static::$users[] = $user;
    }

    // 10.
    public static function getUsers()
    {
        return static::$users;
    }

    // 13.
    protected static function getCurrentUserId()
    {
        // 14.
        // if in the global variable $_SESSION has 
        // an item with the key user_id and it is not empty
        if(!empty($_SESSION['user_id']))
        {
            return $_SESSION['user_id'];
        }
        else
        {
            return null;
        }
    }

    // 15.
    public static function getCurrentUser()
    {
        // 16.
        // get the id of the current user from session (just a number)
        $user_id = static::getCurrentUserId();

        // 17.
        // search for a user with the right id in all the users
        foreach(static::$users as $user)
        {
            // 18.
            // if the right user is found
            if($user_id == $user['user_id'])
            {
                // return him (an array with id and username)
                return $user;

                // return immediatelly ends the function so nothing more is run
            }
        }

        // 19.
        // the function did not return yet? that means that no user was found
        // for that id. Return null to indicate that.
        return null;
    }
}

$array = []; // new way (since php 5.4)
$array = array(); // old way (Honza has been using this for 10 years)

// 11.
Auth::addUser([
    'user_id' => 1, 
    'username' => 'Kevin'
]);
Auth::addUser(['user_id' => 2, 'username' => 'Stuart']);
Auth::addUser(['user_id' => 3, 'username' => 'Bob']);

// 12.
Auth::addUser($user);

// var_dump(Auth::getUsers());

// 20. 
$current_user = Auth::getCurrentUser();

var_dump($current_user);