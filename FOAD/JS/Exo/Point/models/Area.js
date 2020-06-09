/**
 * Class Area
 * Un "Point" est un objet représentant des coordonnées (x,y) dans un espace à 2 dimensions
 * Une "Area" est un objet représentant une zone à 2 dimensions (coïncidence?)
 * Une "Area" est obligatoirement définie par une largeur (nombre de colonnes) et une hauteur (nombre de lignes) pour former une grille.
 * On peut ajouter, déplacer et supprimer des "Point" à l'intérieur d'une Area (1 seul "Point" par coordonnée).
 * Une "Area" ne peut contenir plus de "Point" que de coordonnées disponibles dans la zone.
 * (une zone 4x4 est limitée à 16 points)
 * Les "Point" ajoutés peuvent se situer en dehors des limites de la zone (la limite du nombre de point par zone ne peut pas être dépassée !).
 * 
 * Le "Point" d'origine (0,0) d'une "Area" est situé au coin supérieur gauche 
 * Le "Point" d'origine existe toujours (créé dans le constructeur) et ne peut être supprimé 
 * A partir du "Point" d'origine, la zone s'étend vers la droite pour les abscisses et vers le bas pour les ordonnées 
 * @author jjeanniard
 * @version 2.0.0
 * @requires Point
 * @package CRM
 * @license unlicense
 * @copyright 2020
 * @class Area
 */
class Area 
{
    /**
     * Constructeur: Initialise une nouvelle instance de la classe "Area"
     * La largeur et la hauteur définissent respectivement le nombre de colonnes et de lignes. 
     * @param int _width largeur de la zone
     * @param int _height hauteur de la zone
     */
    constructor(_width, _height) {
        this.zOrigin = new Point(0,0);
        this.points = [];
        this.width = parseInt(_width || 0);
        this.height = parseInt(_height || 0);
        this.zone = [];
        // A vous de jouer
    }

    /**
     * methode pour verifier si l'objet est une instance de Point
     * @param Point _point
     * @boolean 
     */
    isPoint(_point){
        if(!(_point instanceof Point))
            return false;
        return true;
    }

    /**
     * Ajoute un "Point" dans la zone
     * Le "Point" peut se trouver hors des limites de la zone
     * @param Point _point 
     * @returns Boolean true en cas de succès, false si l'ajout est impossible 
     */
    addPoint(_point) {
        this.isPoint(_point);

        return true;
    }


    /**
     * Déplace un point existant dans la zone vers de nouvelles coordonnées
     * Les nouvelles coordonnées peuvent se trouver hors limites
     * @returns Boolean true en cas de succès, false en cas d'échec
     */
    movePoint(/* déterminer les paramètres */) {
        // implémenter la méthode
    }


    /**
     * Vérifie la position de chaque "Point" existant dans la zone
     * Chaque Point hors des limites est automatiquement déplacé dans les limites vers la position libre la plus proche
     * @returns int le nombre de points déplacés
     */
    needAllInside(/* déterminer les paramètres */) {
        // implémenter la méthode
    }
}