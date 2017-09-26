<?php

class blog_post
{
    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $user_id = null;
    public $status = 'not-published';

    public function publish()
    {
        // plenty of code
        // ...

        
        $this->status = 'published';
    }
}