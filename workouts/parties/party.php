<?php

class party
{
    public $id = null;
    public $name = null;
    public $poll_results = null;

    public function __construct($name = null)
    {
        $this->name = $name;
    }
}