<?php

class blog_post
{
    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $user_id = null;
    public $status = 'not-published';

    public function __construct($user_id, $headline = null)
    {
        global $next_post_id;

        $this->id = $next_post_id;

        $next_post_id++;

        $this->added_at = date('Y-m-d H:i:s');

        $this->user_id = $user_id;

        $this->headline = $headline;

        // import global list of object from global scope
        global $all_posts;

        // add this object as the next item to the global list
        // of objects
        $all_posts[] = $this;

        // import global $posts_per_user
        global $posts_per_user;

        $posts_per_user[$this->user_id][$this->id] = $this;

    }    

    public function publish()
    {
        // plenty of code
        // ...
        
        $this->status = 'published';
    }
}