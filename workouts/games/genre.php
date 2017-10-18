<?php

require_once 'db.php';

class genre
{
    protected $id = null;
    protected $name = null;

    public static function getGenresForGames($game_ids)
    {
        $string = join(', ', $game_ids); // '2, 3, 5'

        $query = "
            SELECT *
            FROM `genre`
            RIGHT JOIN `game_has_genre`
                ON `genre`.`id` = `game_has_genre`.`genre_id`
            WHERE `game_has_genre`.`game_id` IN (".$string.")
        ";
        $statement = db::query($query);

        // make all future calls to fetch or fetchAll return objects 
        // of class 'genre'
        $statement->setFetchMode(PDO::FETCH_CLASS, 'genre');

        $all_genres = $statement->fetchAll();

        $wanted_genres = [];
        foreach($all_genres as $genre)
        {
            if(in_array($genre->game_id, $game_ids))
            {
                $wanted_genres[] = $genre;
            }
        }


        var_dump($wanted_genres);
    }
}