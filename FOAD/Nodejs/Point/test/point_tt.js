//require('../app.js');//chargement general de app.js

const Point = require('../models/Point.js');

p1 = new Point(0,0);
p2 = new Point(1,4);
p3 = new Point(2,1);
p4 = new Point(3,2);
p5 = new Point(4,4);
//en dehors de la zone
p6 = new Point(-9,-5);
p7 = new Point(20,6);
p8 = new Point(6,30);
p9 = new Point(-30,60);
p10 = new Point(-60,-6);
p11 = new Point(12, 12);
//point ==
p12 = new Point(1,4);
p13 = new Point(-9,-5);

//affichage
console.log(p13.toString());
//deplacement d'un point, puis affichage
console.log("move");
p13.move(8,6);
console.log(p13.toString());
//dupliquer un point
console.log("duplicate");
const dudu = p13.duplicate();
console.log(dudu.toString());
//copy
console.log("copy");
p3.copy(p12);
console.log(p3.toString());
//rabbit
console.log("rabbit");
console.log(p4.toString());
console.log(p2.toString())
p4.rabbit(p2);
console.log(p3.toString());
console.log(p2.toString());
//fin du test unitaire