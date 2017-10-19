<?php

class animal
{
    public static $nr_in_the_world = 456;

    public static function getNrInTheWorld()
    {
        // static - any class on which this method is called
        return static::$nr_in_the_world;
    }

    public static function getNrInTheWorld2()
    {
        // self - always the class this is written in - animal
        return self::$nr_in_the_world;
    }
}

class dog extends animal
{
    public static $nr_in_the_world = 123;
}

echo dog::getNrInTheWorld(); // 123
echo dog::getNrInTheWorld2(); // 456