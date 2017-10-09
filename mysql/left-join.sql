# select all columns from both tables
# from table `city`
# where population is above 5000000
# left joining records from table `country`
# where their `Code` column equals the `CountryCode` column in table `city`
SELECT *
FROM `city`
LEFT JOIN `country`
    ON `city`.`CountryCode` = `country`.`Code`
LEFT JOIN `country_language`
    ON `country`.`language_id` = `country_language`.`id`
WHERE `city`.`Population` > 5000000
ORDER BY `city`.`Population` DESC;

# select all persons for movie 12345 using the joining table `movie_has_person`
SELECT `person`.`name`, `person`.`id`
FROM `movie_has_person`
LEFT JOIN `person`
    ON `movie_has_person`.`person_id` = `person`.`id`
WHERE `movie_has_person`.`movie_id` = 12345;


SELECT *
FROM `countrylanguage`
LEFT JOIN `country`
    ON `countrylanguage`.`CountryCode` = `country`.`Code`
WHERE `countrylanguage`.`Language` = 'English'
    AND `country`.`Population` > 1000000;
