INSERT INTO actor (first_name, last_name)
VALUES ("Jason", "Statham");

INSERT INTO film (title, description, release_year, language_id, rental_duration, rental_rate, replacement_cost)
VALUES ("Dune", "Dune is set in the distant future amidst a feudal interstellar society in which various noble houses control planetary fiefs. It tells the story of young Paul Atreides, whose family accepts the stewardship of the planet Arrakis.", "2021", 1, 2, 8.00, 7.00);

SELECT first_name, last_name 
FROM actor;

SELECT title FROM film
WHERE title LIKE 'a%';

SELECT MAX(amount) AS MaxAmount
FROM payment
WHERE payment_date BETWEEN "2005-06-01 00:00:00" AND "2005-06-30 23:59:59";