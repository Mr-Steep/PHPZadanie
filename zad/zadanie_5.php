<?php
$qwery_1 = "SELECT persons.fullname , SUM(transactions.amount)
FROM persons JOIN transactions ON transactions.to_person_id = persons.id
GROUP BY  persons.fullname";

$qwery_2 = "SELECT c.name
FROM cities c
LEFT JOIN  persons p ON c.id = p.city_id
JOIN transactions t on p.id = t.from_person_id OR p.id = t.to_person_id
GROUP BY (c.name)
ORDER BY(COUNT(c.name)) DESC 
LIMIT 1";


$qwery_2 = "SELECT * FROM cities c, persons p, transactions t 
WHERE c.id = p.city_id AND
 t.from_person_id = p.city_id 
 OR c.id = p.city_id AND t.to_person_id = p.city_id
";

