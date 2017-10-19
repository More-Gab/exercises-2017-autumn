SELECT `delivery`.*
FROM `delivery`
WHERE `delivery`.`sent_at` IS NOT NULL
  AND `delivery`.`delivered_at` IS NULL
ORDER BY `delivery`.`sent_at` ASC
LIMIT 0, 10

# shortest:
SELECT *
FROM `delivery`
WHERE `sent_at` IS NOT NULL
  AND `delivered_at` IS NULL
ORDER BY `sent_at`
LIMIT 10