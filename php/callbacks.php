<?php

$movies = [
    [
        'title' => 'Delta Force',
        'rating' => 62,
        'year' => 1986
    ],
    [
        'title' => 'Missing in action',
        'rating' => 57,
        'year' => 1984
    ],
    [
        'title' => 'Firewalker',
        'rating' => 49,
        'year' => 1986
    ],
];


function sort_movies($movie1, $movie2)
{
    if($movie1['rating'] == $movie2['rating'] && $movie1['year'] == $movie2['year'])
    {
        return 0;
    }

    if($movie1['year'] < $movie2['year']
        || ($movie1['year'] == $movie2['year'] && $movie1['rating'] > $movie2['rating'])) 
    {
        return -1;
    }
    else
    {
        return 1;
    }
}

class sorting_functions
{
    public function sort_movies($movie1, $movie2)
    {
        if($movie1['rating'] == $movie2['rating'] && $movie1['year'] == $movie2['year'])
        {
            return 0;
        }
    
        if($movie1['year'] < $movie2['year']
            || ($movie1['year'] == $movie2['year'] && $movie1['rating'] > $movie2['rating'])) 
        {
            return -1;
        }
        else
        {
            return 1;
        }
    }
}

// the callable is a global function
usort($movies, 'sort_movies');

// the callable is a static method of a class
usort($movies, ['sorting_functions', 'sort_movies']);

// the callable is a closure function
usort($movies, function($movie1, $movie2) {
    if($movie1['rating'] == $movie2['rating'] && $movie1['year'] == $movie2['year'])
    {
        return 0;
    }

    if($movie1['year'] < $movie2['year']
        || ($movie1['year'] == $movie2['year'] && $movie1['rating'] > $movie2['rating'])) 
    {
        return -1;
    }
    else
    {
        return 1;
    }
});

var_dump($movies);