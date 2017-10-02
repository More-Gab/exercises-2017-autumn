<?php 

class car extends vehicle
{
    public $wheels_count = 4;

    public function change_color($color)
    {
        $this->color = $color;
    }
}