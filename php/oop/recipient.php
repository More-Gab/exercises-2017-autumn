<?php

class recipient
{
    public $email = null;

    public function __toString()
    {
        return $this->email;
    }
}