use tp_agence_voyages;

-- Créer les vues répondant aux demandes suivantes :

-- 1) Afficher les informations de toutes les villes (informations du pays incluses)
DROP VIEW IF EXISTS cities_coutries_resume;
CREATE VIEW cities_coutries_resume AS 
SELECT CI.city_code, CI.city_name, CO.country_code AS country_code_v, CO.country_name
FROM cities CI JOIN countries CO ON CI.country_code = CO.country_code;

SELECT * FROM cities_coutries_resume;

-- 2) Afficher les noms, prénoms, email de tous les clients qui ont réservé au moins 1 voyage. 
--    On a besoin de connaitre le titre du voyage ainsi que le pays de destination
DROP VIEW IF EXISTS clients_strips;
CREATE VIEW clients_strips AS 
SELECT client_lastname, client_firstname, client_email, TR.trip_title, CT.country_name FROM clients CL
JOIN orders ORS ON CL.client_id = ORS.client_id
JOIN trips TR ON ORS.trip_code = TR.trip_code
JOIN cities CI ON TR.city_code = CI.city_code
JOIN countries CT ON CI.country_code = CT.country_code;

SELECT * FROM clients_strips;

-- 3) Créer la vue permettant d'afficher :
--     Toutes les informations d'un client (sauf son mot de passe)
--     Le  nom de son commercial associé
--     Le nombre de voyages qu'il a commandé ET payé
--     La destination de son dernier voyage (ville + pays)

DROP VIEW IF EXISTS info_clients;
CREATE VIEW info_clients AS
SELECT CL.client_id,
client_lastname,
client_firstname,
client_email,
client_phone,
client_added,
order_paid nbr_strip_paye,
com_name,
CT.country_name
FROM clients CL
JOIN orders ORS ON CL.client_id = ORS.client_id
JOIN sales SLS ON CL.com_code = SLS.com_code
JOIN trips TR ON ORS.trip_code = TR.trip_code
JOIN cities CI ON TR.city_code = CI.city_code
JOIN countries CT ON CI.country_code = CT.country_code;

SELECT * FROM info_clients WHERE client_id = 1;