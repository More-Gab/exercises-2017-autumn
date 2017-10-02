<?php

class user
{
    public $id = null;
    public $username = null;
    public $name = null;
    public $password = null;
    public $number_of_posts = 0;

    public function __construct($username)
    {
        global $next_user_id;

        $next_user_id++;

        $this->id = $next_user_id;


        $this->username = $username;
    }

    public function dumpMe()
    {
        var_dump($this);
    }

    public function getNumberOfPosts()
    {
        // import $posts_per_user from global scope
        global $posts_per_user;

        // if there are any posts in $posts_per_user for this user
        if(isset($posts_per_user[ $this->id ]))
        {
            // return the number of posts for this user
            return count($posts_per_user[ $this->id ]);
        }
        else
        {
            return 0;
        }
    }
}
