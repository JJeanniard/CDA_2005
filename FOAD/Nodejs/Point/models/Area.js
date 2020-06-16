const Point = require("./Point.js");
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
class Area {
  /**
   * Constructeur: Initialise une nouvelle instance de la classe "Area"
   * La largeur et la hauteur définissent respectivement le nombre de colonnes et de lignes.
   * @param int _width largeur de la zone
   * @param int _height hauteur de la zone
   */
  constructor(_width, _height) {
    this.zOrigin = new Point(0, 0);
    this.points = [];
    this.width = parseInt(_width || 0);
    this.height = parseInt(_height || 0);
    this.max = 0;
    // A vous de jouer
  }

  /**
   * methode pour verifier si l'objet est une instance de Point
   * @param Point _point
   * @retrun boolean
   */
  isPoint(_point) {
    if (!(_point instanceof Point)) return false;
    return true;
  }

  /**
   * !la limite de point est le nombre possible dans la zone
   * !il ne peut avoir 1 point par coordonner,
   * !mais, si il y deja un point,
   * !le deplacer au plus proche emplacement libre
   * !5 point possible autour du point deja pris
   * ! ou partir du point 0,0 (préferé les abscisses)
   * Ajoute un "Point" dans la zone
   * Le "Point" peut se trouver hors des limites de la zone
   * @param Point _point
   * @returns Boolean true en cas de succès, false si l'ajout est impossible
   */
  addPoint(_point) {
    if (!this.isPoint(_point)) return false;

    if (this.max === this.width * this.height) return false;
    if (this.isPointExeco(_point)){
        this.moveClandestin(_point);
    };

    this.points.push(_point);
    this.max++;
    return true;
  }

  /**
   * Déplace un point existant dans la zone vers de nouvelles coordonnées
   * Les nouvelles coordonnées peuvent se trouver hors limites
   * @returns Boolean true en cas de succès, false en cas d'échec
   * x --------->
   * y
   * |
   * |
   * |
   * v
   */
  movePoint(_point, _x, _y) {
    if (!this.isPoint(_point)) return false; //si c'est un objet Point
    if (!this.isPtExist(_point)) return false; //si le existe
    if (_x === Number.NaN || _y === Number.NaN) return false;
     
    if (this.isPointExeco(_point)) return false;
    return true;
  }

  /**
   * Vérifie la position de chaque "Point" existant dans la zone
   * Chaque Point hors des limites est automatiquement déplacé dans les limites vers la position libre la plus proche
   * @returns int le nombre de points déplacés
   */
  needAllInside(/* déterminer les paramètres */) {
    // implémenter la méthode
  }

  /**
   * Si le point est deja present dans Area returne "true", sinon "false"
   * @param Point _point
   * @return Boolean
   */
  isPtExist(_point) {
    if (this.points.find((pnt) => pnt === _point) === undefined) return false;
    return true;
  }

  /**
   * Cherche s'il y a un point execo dans la collection est retourne "true" si trouvé
   * @param Point _point
   * @returns boolean
   */
  isPointExeco(_point) {
    if (
      this.points.findIndex((pt) => pt.x === _point.x && pt.y === _point.y) ===
      -1
    )
      return false;
    return true;
  }

  /**
   * 
   * @param Point _point
   * @returns Point 
   */
  moveClandestin(_point){
    if(!this.isPoint(_point)) return false;
    /**
     * Nous voulons testé si le point qui est le plus pres de l'abscisse est libre et le deplacer desssus
     * 
     * Si aucune point disponible le deplacé dans la zone en partent du point d'origine
     */
    if(_point.x < -0){
      _point.move(_point.x + 1, _point.y)
      if(!this.isPointExeco(_point)){
        console.log('tu peu le deplacer')
      }else{
        console.log("point d'origin")
      }
    }else{
      _point.move(_point.x - 1, _point.y)
      if(!this.isPointExeco(_point)){
        console.log('tu peu le deplacer')
      }else{
        console.log("point d'origin")
      }
    }
  }
}

module.exports = Area;
