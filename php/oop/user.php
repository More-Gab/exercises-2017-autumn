<?php

class user
{
    public $id = null;
    public $username = null;
    public $name = null;
    public $password = null;
    public $number_of_posts = 0;

    public function __construct($name = null)
    {
        global $next_user_id;

        $next_user_id++;

        $this->id = $next_user_id;

        $this->name = $name;
    }

    public function dumpMe()
    {
        var_dump($this);
    }
}