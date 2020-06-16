/**
 * La classe "Point" représente les coordonnées d'un point dans une zone à 2 dimensions
 */
class Point {
    #x; //attr pivate
    #y;
    /**
     * Constructeur: Initialise une nouvelle instance de la classe "Point"
     * @param int _x Coordonnée horizontale du point (abscisse). Valeur négative acceptée
     * @param int _y Coordonnée verticale du point (ordonnée). Valeur négative acceptée
     */
    constructor(_x, _y) {
        this.#x = parseInt(_x || 0);
        this.#y = parseInt(_y || 0);
    }

    /**
     * Retourne une représentation textuelle du Point
     * @return string Les coordonnées du Point
     */
    toString() {
        return "(" + this.#x + "," + this.#y + ")";
    }

    /**
     * Change les valeur de x et y de l'instence donnée;
     * @param float _x 
     * @param float _y 
     */
    move(_x, _y) {
        this.#x = _x;
        this.#y = _y;
    }

    /**
     * Nouvelle instance d'objet avec les valeurs des attribues de l'instance actuel
     * @returns Objet 
     */
    duplicate() {
        return new Point(this.#x, this.#y);
    }

    /**
     * 
     * @param Objet _point Copy les coordonnées d'une classe passée en paramètre
     */
    copy(_point) {
        this.#x = _point.x;
        this.#y = _point.y;
    }
    /**
     * 
     * @param Objet _point 
     */
    rabbit(_point) {
        /**
        * On voulais pas l'acces a une valeur par reference
        * (ce qui ecrase les valeurs),
        * let a = 1;
        * let b = a; b -> a -> 1
        * a = 2;
        * b -> 2  
        * mais les valeurs de cette reference 
        */ 
        let temp = _point.duplicate();
        _point.copy(this);
        this.copy(temp);
    }

}

module.exports = Point;