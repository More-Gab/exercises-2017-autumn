<?php

require_once 'db.php';

class game
{
    protected $id = null;
    protected $name = null;
    protected $image_url = null;
    protected $description = null;
    protected $rating = null;
    protected $released_at = null;

    public static function getAllGames()
    {
        $query = "
            SELECT *
            FROM `game`
            ORDER BY `game`.`id`
        ";
        // run the query
        $statement = db::query($query);

        // make all future calls to fetch or fetchAll return objects 
        // of class 'game'
        $statement->setFetchMode(PDO::FETCH_CLASS, 'game');

        // get all the results at once as an array
        $games = $statement->fetchAll();

        return $games;
    }
}