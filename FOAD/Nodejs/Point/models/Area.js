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
    this.size = this.width * this.height; //calcul la taille
    this.max = 0; //nombre de point possible
    this.pointsZnDisp = [];
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
   * Si le point est deja present dans Area returne "true", sinon "false"
   * @param Point _point
   * @return Boolean
   */
  isPtExist(_point) {
    if (
      this.points.find(
        (pnt) => pnt.getX() === _point.getX() && pnt.getY() === _point.getY()
      )
    )
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
    if (!this.isPoint(_point)) return false;
    if (this.max === this.size) return false;
    if (!this.isPtExist(_point)) this.move(_point);
    this.points.push(_point);
    this.max++;
    return true;
  }

  /**
   * Affiche tout les points d'une instance
   *
   */
  readAll() {
    this.points.forEach((point) => {
      console.log("x:" + point.getX() + " y:" + point.getY());
    });
  }

  /**
   * Affiche tout les points qui sont à l'exterieur de la zone
   *
   */
  readOut() {
    this.points.forEach((point) => {
      if (
        point.getX() > this.width ||
        (point.getY() > this.height && point.getX() < 0) ||
        point.getY() < 0
      ) {
        console.log("x:" + point.getX() + " y:" + point.getY());
      }
    });
  }

  /**
   * compte le nombre de point disponible dans la zone
   * @returns int
   */
  count() {
    let i, y;
    y = this.width * this.height;
    for (i = 0; i < this.points.length; i++) {
      if (
        this.points[i].getX() <= this.width &&
        this.points[i].getX() >= 0 &&
        this.points[i].getY() <= this.height &&
        this.points[i].getY() >= 0
      ) {
        y--;
      }
    }
    return y;
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
  movePoint(_exPoint, _point) {
    if (!this.isPoint(_exPoint)) return false; //si c'est un objet Point
    if (this.isPtExist(_exPoint)) return false; //si le p existe
    if (!this.isPoint(_point)) return false; //si c'est un objet Point
    if (!this.isPtExist(_point)) return false; //si le p existe
    _exPoint.move(_point.getX(), _point.getY());
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
   * Ceci est pour un point deja existent est à place n'importe ou!
   * @param Point _point
   * @returns Point
   * @private
   */
  move(_point) {
    if (this.isPtExist(_point)) return false;
    /**
     * Nous voulons testé si le point qui est le plus pres de l'abscisse est libre et le deplacer desssus
     * Si aucune point disponible le deplacé dans la zone en partent du point d'origine
     */
    if (_point.getX() < -0) {
      _point.move(_point.getX() + 1, _point.getY());
      if (!this.isPtExist(_point)) {
        Object.assign(_point, this.points);
      } else {
        //si la place est pas dispo, le place au niveau de 0,0
        console.log("le point existe deja");
        return false;
        //this.moveZero(_point); //TODO deplacer les points du plus de zero en fonction de la dispo
      }
    }
    if (_point.getX() > 0) {
      _point.move(_point.getX() - 1, _point.getY());
      if (!this.isPtExist(_point)) {
        Object.assign(_point, this.points);
      } else {
        //si la place est pas dispo, le place au niveau de 0,0
        console.log("le point existe deja");
        return false;
      }
    }
  }

  pointZnDis(){
    
  }
}

module.exports = Area;
