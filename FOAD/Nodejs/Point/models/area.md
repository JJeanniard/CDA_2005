# JAVASCRIPT: Exercices

Coordonnées dans un espace à 2 dimensions type "fenêtre"

## CONSIGNES

1. Lisez la description de la classe "Area" [x]
2. Implémentez le code nécessaire à son bon fonctionnement en suivant les indications dans sa descirption
3. Implémentez ensuite le programme suivant :

a) Créer 2 "Area" [x]

1) Area 1 : 4 lignes x 4 colonnes [x]
2) Area 2 : 8 lignes x 6 colonnes [x]

b) Dans la 1ère "Area", ajouter 8 "Point" (coordonnées au choix, 5 dans les limites de la zone et 3 hors limites) [x]
c) Dans la 2nde "Area", ajouter 6 "Point" (coordonnées au choix, tous en dehors des limites) [x]
d) Créer ensuite 2 "Point" distincts ayant les mêmes coordonnées [x]
e) Les ajouter dans chacune des zones (1 "Point" par zone) [x]

f) Pour chaque zone : - Afficher tous les points qui se trouvent hors des limites de la zone - Exécuter la méthode "needAllInside" - Afficher tous les points - Afficher le nombre d'emplacements libres

### consigne suplementaire

ALGORITHME AJOUTER/DEPLACER UN POINT DANS UNE AREA:
a) cas:

1) En cas d'ajout, si la zone (Area) est pleine (Toutes les coordonnées "dans les limites" sont occupées par un "Point").
2) Ajout impossible, renvoyer false

b) Si un "Point" existe déjà aux mêmes coordonnées :

1) Rechercher la position libre la plus proche du "Point" d'origine (0,0).
2) Si 2 positions son éligibles (distance égale), celle la plus proche du bord supérieur de la zone est privilégiée

c) Enregistrer le "Point" dans la zone

d) Renvoyer true
