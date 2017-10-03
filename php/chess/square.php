<?php

class square
{
    protected $x_coord = null;
    protected $y_coord = null;
    protected $piece = null;

    public function __construct($x, $y, $piece = null)
    {
        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece;
    }

    public function isDark()
    {
        return $this->x_coord % 2 == $this->y_coord % 2;
    }

    public function __toString()
    {
        $class = $this->isDark() ? 'dark' : 'light';
        return '<div class="' . $class . '">' . $this->piece . '</div>';
    }
}