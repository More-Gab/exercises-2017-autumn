<?php

class vehicle
{
    public $wheels_count = null;
    public $color = null;
    public $avg_speed = null;

    public function travel($distance)
    {
        if( ! $this->avg_speed ) return false; // division by 0

        return $distance / $this->avg_speed;
    }
}