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


console.log(p13.toString());