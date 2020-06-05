/**
 * JAVASCRIPT:  Exercices
 * 
 * Coordonnées dans un espace à 2 dimensions type "fenêtre"
 * 
 * 
 * CONSIGNES : 
 * 1) Lisez la description de la classe "Area"
 * 2) Implémentez le code nécessaire à son bon fonctionnement en suivant les indications dans sa descirption
 * 3) Implémentez ensuite le programme suivant :
 *      a) Créer 2 "Area"
 *          a.1) Area 1 : 4 lignes x 4 colonnes
 *          a.2) Area 2 : 8 lignes x 6 colonnes
 *      b) Dans la 1ère "Area", ajouter 8 "Point" (coordonnées au choix, 5 dans les limites de la zone et 3 hors limites)
 *      c) Dans la 2nde "Area", ajouter 6 "Point" (coordonnées au choix, tous en dehors des limites)
 *      d) Créer ensuite 2 "Point" distincts ayant les mêmes coordonnées
 *      e) Les ajouter dans chacune des zones (1 "Point" par zone)
 *      f) Pour chaque zone : 
 *          - Afficher tous les points qui se trouvent hors des limites de la zone
 *          - Exécuter la méthode "needAllInside"
 *          - Afficher tous les points
 *          - Afficher le nombre d'emplacements libres
 * 
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
 *
 *
 * ALGORITHME AJOUTER/DEPLACER UN POINT DANS UNE AREA: 
 *
 * 1) En cas d'ajout, si la zone (Area) est pleine (Toutes les coordonnées "dans les limites" sont occupées par un "Point")
 *    1.1) Ajout impossible, renvoyer false
 *
 * 2) Si un "Point" existe déjà aux mêmes coordonnées:
 *    2.1) Rechercher la position libre la plus proche du "Point" d'origine (0,0)
 *    2.2) Si 2 positions son éligibles (distance égale), celle la plus proche du bord supérieur de la zone est privilégiée
 *       
 * 3) Enregistrer le "Point" dans la zone
 * 
 * 4) Renvoyer true
 *
 * @package CRM
 * @author jjeanniard
 * @version 0.0.1
 * @license unlicense
 */
const Point = require('./Point.js');
const Zone = require('./Zone.js');
class Area {
    /**
     * Constructeur: Initialise une nouvelle instance de la classe "Area"
     * La largeur et la hauteur définissent respectivement le nombre de colonnes et de lignes. 
     * @param int _width largeur de la zone
     * @param int _height hauteur de la zone
     */
    constructor(_width, _height) {
        // A vous de jouer
        this.pointOrigin = { w: 0, h: 0 };
        this.nrbPt = 0; //incrementation par ajout de point
        this.zone = new Zone(_width, _height); 
    }

    /**
     * Verifie si c'est bien une instance de l'objet Point
     * @returns boolean
     * @param Point _point
     */
    isValid(_point) {
        if (!(_point instanceof Point))
            return false;
        return true;
    }

    /**
     * verifie si le point existe et retourne l'index ou -1
     * @param Point _point
     * @returns index
     */
    srcPoint(_point){
        let index;
        index = this.zone.points.findIndex(po => po === _point);
        return index;
    }

    /**
     * 
     * @param _index element trouve par srcPoint()
     * @returns boolean
     */
    isPoint(_index){
        if(_index === -1)
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
        if (!(_point instanceof Point))
            return false;

        if (!this.isValid(_point))
            return false;

        if (this.nrbPt > this.zone.size)
            return false;
        
        //TODO: ajout du point meme si il comporte les mêmes coordonner d'un autre point
        //TODO: rechercher le point "dispo" le plus proche (preference sur le bord superieur)
        //TODO: et mettre à jour les "cords" du point
        //TODO: condition que le point depasse pas la zone 
        if(!this.zone.add(_point))
            console.log('return false');


        this.nrbPt++;
        return true;
    }

    readAll(){
        return this.zone.points;
    }

    readAllOutZone(){
        return this.zone.pointsOutZn;
    }

    /**
     * Déplace un point existant dans la zone vers de nouvelles coordonnées
     * Les nouvelles coordonnées peuvent se trouver hors limites
     * @returns Boolean true en cas de succès, false en cas d'échec
     */
    movePoint(_point, _exPoint) {
        // implémenter la méthode
        this.update(_point, _exPoint);
    }

    /**
     * TODO: Mettre à jour avec la methode "assign de l'objet Object".
     * Mets l'objet à jour avec de nouvelles valeurs.
     * @param Point _point
     * @returns Boolean
     */
    update(_point, _exPoint) {
        if (!this.isValid(_point))
            return false;
        if (!this.isValid(_exPoint))
            return false;

        //mise à jour dans la zone
        if(_point.x > this.zone.limit.w && _point.y > this.zone.limit.h){
            this.zone.update(_point);
        }else{
            Object.assign(_point, this.points);
        }

        return true;
    }

    /**
     * Supprime le point 
     * @param Point _point
     * @returns boolean 
     */
    delete(_point) {
        let index = 0;
        return true;
    }

    /**
    * TODO: prendre le premier point(hors zone) qui est le plus proche de 0,0
    * TODO: (si 2 point execo bord sup ou rd), trouver ensuite un point "dispo" le plus proche
    * TODO: dans la zone
    * TODO: Recuperer tout les points "dispo" dans un tableau et faire une "oper" 
    * TODO: pour savoir quel point est le plus proche et le deplacer 
    */
    /**
     * Vérifie la position de chaque "Point" existant dans la zone
     * Chaque Point hors des limites est automatiquement déplacé dans les limites vers la position libre la plus proche
     * @returns int le nombre de points déplacés
     */
    needAllInside(/* déterminer les paramètres */) {

        // implémenter la méthode
    }
}

module.exports = Area;