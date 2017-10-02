<?php

class match
{
    public $begins_at = null;
    public $score = null;
    public $nr_of_players = null;
    public $length = null; // length of the match in minutes

    public function __construct($datetime)
    {
        $this->begins_at = $datetime;
    }

    public function getEstimatedEnd()
    {
        // turn the datetime string in $this->begin_at into a timestamp
        $begins_at_timestamp = strtotime($this->begins_at);

        // calculate the timestamp of the end of the match
        $ends_at_timestamp = $begins_at_timestamp + $this->length * 60;

        // turn the timestamp of the end of the match into a datetime string
        $ends_at_datetime = date('Y-m-d H:i:s', $ends_at_timestamp);

        return $ends_at_datetime;
    }
}