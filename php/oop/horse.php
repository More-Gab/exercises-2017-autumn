<?php

class horse extends vehicle
{
    public $wheels_count = 0;
    public $is_fed = false;

    public function feed()
    {
        $this->is_fed = true;
    }
}