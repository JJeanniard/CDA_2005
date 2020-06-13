const Point = require('./models/Point.js');
const Area = require('./models/Area.js');

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
/**
 * Test unitaire sur la zone 1
 */
/* const area1 = new Area(4,4);

area1.addPoint(p1);
area1.addPoint(p2);
area1.addPoint(p3);
area1.addPoint(p4);
area1.addPoint(p5);
area1.addPoint(p6);
area1.addPoint(p7);
area1.addPoint(p8);
area1.addPoint(p12);

let area1Size = area1.height * area1.width;

for (let index = 0; index < area1Size; index++) {
    rd1 = Math.round(Math.random()*(-area1Size - area1Size));
    rd2 = Math.round(Math.random()*(area1Size - -area1Size)+-area1Size);
    let val = new Point(rd1,rd2);
    area1.addPoint(val);
}

console.log(area1.points); */

/**
 * Test unitaire sur la zone2
 */
const area2 = new Area(8,6);

area2.addPoint(p6);
area2.addPoint(p7);
area2.addPoint(p8);
area2.addPoint(p9);
area2.addPoint(p10);
area2.addPoint(p13);

let area2Size = area2.height * area2.width;
for (let index = 0; index < area2Size; index++) {
    rd1 = Math.round(Math.random()*(-area2Size - area2Size));
    rd2 = Math.round(Math.random()*(area2Size - -area2Size)+-area2Size);
    let val = new Point(rd1,rd2);
    area2.addPoint(val);
}
//p9 = -30,60

area2.movePoint(p9, -9, -5);

console.log(area2.points);
