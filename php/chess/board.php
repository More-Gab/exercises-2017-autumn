<?php

class board
{
    protected $pieces = [];

    public function __construct($pieces)
    {
        if(is_array($pieces))
        {
            $this->pieces = $pieces;
        }
        elseif(is_string($pieces))
        {
            $this->pieces = $this->convertFenToArray($pieces);
        }
    }

    public function __toString()
    {
        $html = '<div class="board">'; // start the board

        for($x = 1; $x <= 8; $x++)
        {
            $html .= '<div class="row">'; // start a row

            for($y = 1; $y <= 8; $y++)
            {
                if(isset($this->pieces[$x][$y])) // if a piece is defined in the supplied array
                {
                    $piece = new piece($this->pieces[$x][$y]); // create a piece object
                }
                else // otherwise
                {
                    $piece = null; // use null
                }

                $square = new square($x, $y, $piece); // create a square using the piece object or null

                $html .= $square; // add the square to html
            } 

            $html .= '</div>'; // end a row
        }

        $html .= '</div>'; // end the board

        return $html;
    }

    // Forsyth–Edwards Notation
    public function convertFenToArray($fen)
    {
        $parts = preg_split('#\s+#', $fen);
        $rows = explode('/', $parts[0]);

        $pieces = array();

        $y = 8;
        foreach($rows as $row)
        {
            $x = 1;
            for($i = 0; $i < strlen($row); $i++)
            {
                if(is_numeric($row[$i]))
                {
                    $x += intval($row[$i]);
                }
                else
                {
                    $pieces[$x][$y] = $row[$i];
                    $x++;
                }
            }
            $y--;
        }

        return $pieces;
    }

}