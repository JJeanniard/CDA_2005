const Point = require('./Point.js');

const Area = require('./Area.js');

let incrt = 1;

//Area 1
let area1 = new Area(4,4);
//point first area
let a1p1 = new Point(2,0);
area1.addPoint(a1p1);
area1.addPoint(new Point(1,2));
area1.addPoint(new Point(0,4));
area1.addPoint(new Point(4,2));
area1.addPoint(new Point(3,1));
area1.addPoint(new Point(7,6));
area1.addPoint(new Point(6,6));
area1.addPoint(new Point(5,8));

//Area 2
let area2 = new Area(8,6);
//point second area
area2.addPoint(new Point(9,7));
area2.addPoint(new Point(10,8));
area2.addPoint(new Point(11,9));
area2.addPoint(new Point(12,10));
area2.addPoint(new Point(13,11));
area2.addPoint(new Point(14,12));

console.log(area2.addPoint(new Point(12,10)));
console.log(area1.addPoint(new Area(4,4)));

let ex = a1p1.duplicate();
a1p1.move(9,4);
area1.update(a1p1, ex);

console.log(area1.points)