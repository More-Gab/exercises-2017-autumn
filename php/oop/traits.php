<?php

class animal
{
    protected $hungry = true;

    public function eat()
    {
        $this->hungry = false;
    }
}

trait domesticated
{
    public function beFed()
    {
        $this->hungry = false;
    }
}

trait trained
{
    public function playDead()
    {
        echo 'I am playing dead';
    }
}

class dog extends animal
{
    use domesticated, trained;
}

class wolf extends animal
{

}

class parrot extends animal
{
    use domesticated;
}

$ben = new dog();
$ben->beFed();
$ben->playDead();
var_dump($ben);

$fang = new wolf();
// $fang->beFed();
var_dump($fang);

$polly = new parrot();
$polly->beFed();
var_dump($polly);