/**
 * JAVASCRIPT:  Exercices
 * 
 * Définition d'un "Point"
 * 
 * 
 * CONSIGNES : 
 * 1) Lisez la description et étudiez la classe "Point" ci-dessous (celle-ci est partiellement implémentée)
 * 2) Implémentez les méthodes suivantes:
 *  - move(int x, int y)    : définit de nouvelles coordonnées (x=abscisses, y=ordonnées)
 *  - duplicate()           : retourne une nouvelle instance de "Point" avec les mêmes coordonnées que l'instance actuelle
 *  - copy(Point _point)    : copie les coordonnées du "Point" fourni en argument dans l'instance actuelle
 *  - rabbit(Point _point)  : Les coordonnées de l'instance actuelle et du "Point" fourni en argument sont échangées
 * 
 * RESTRICTIONS :
 *  - Le corps de la méthode "rabbit" ne peut contenir que 3 instructions au maximum !
 * 
 * Le petit programme qui suit la classe doit fonctionner en l'état (non modifié)
 */

/**
 * La classe "Point" représente les coordonnées d'un point dans une zone à 2 dimensions
 */
class Point {
    /**
     * Constructeur: Initialise une nouvelle instance de la classe "Point"
     * @param int _x Coordonnée horizontale du point (abscisse). Valeur négative acceptée
     * @param int _y Coordonnée verticale du point (ordonnée). Valeur négative acceptée
     */
    
    constructor(_x, _y) {
        this.x = parseFloat(_x || 0);
        this.y = parseFloat(_y || 0);
    }

    /**
     * Retourne une représentation textuelle du Point
     * @return string Les coordonnées du Point
     */
    toString() {
        return "(" + this.x + "," + this.y + ")";
    }

    /**
     * Change les valeur de x et y de l'instence donnée;
     * @param float _x 
     * @param float _y 
     */
    move(_x, _y){
        this.x = _x; 
        this.y = _y; 
    }

    /**
     * @returns Objet Nouvelle objet avec les valeurs d'un autre objet
     */
    duplicate(){
        return new Point(this.x, this.y);
    }

    /**
     * 
     * @param float _point Copy les coordonnées d'une classe passée en paramètre
     */
    copy(_point){
        this.x = _point.x;
        this.y = _point.y;
    }

    lolilol(_point){
        let tmp = this
        this.copy(_point)
        _point.copy(tmp)
    }

    rabbit(_point){
        
        lolilol(_point);

       /* let temp = _point;
        _pointT.move(this.x, this.y);
        this.copy(temp); */
    }
}



/**
 * Programme "Point"
 * Décrivez ci-dessous en quelques lignes le programme suivant
 * (utilité, finalité)
 * Permet de travailler essaiment sur des coordonnées en 2D,
 * échanger, manipulé, copier...
 * 
 * 
 * 
 */

let p1 = new Point(0, 1);
let p2 = new Point(2, 3);
let p3 = new Point(4, 5);
let p4;
let p5;

console.log(p1);     // affiche: Point { x: 0, y: 1 }
console.log(p2);     // affiche: Point { x: 2, y: 3 }
console.log(p3);     // affiche: Point { x: 4, y: 5 }

p4 = p3.duplicate();
console.log(p3 !== p4);         // affiche: true
console.log(p3.toString());     // affiche (4,5)
console.log(p4.toString());     // affiche: (4,5)

p2.copy(p1);
console.log(p1 !== p2);         // affiche: true
console.log(p1.toString());     // affiche:  (0,1)
console.log(p2.toString());     // affiche:  (0,1)

p1.rabbit(p3);
console.log(p1 !== p3);         // affiche: true
console.log(p1.toString());     // affiche:  (4,5)
console.log(p3.toString());     // affiche:  (0,1)

