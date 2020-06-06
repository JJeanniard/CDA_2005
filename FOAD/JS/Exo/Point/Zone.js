const Point = require('./Point.js');
/**
 * TODO: Qu'est cette classe? 
 */
class Zone {
    constructor(_width, _height) {
        this.pointOrigin = { w: 0, h: 0 };
        this.limit = { w: _width, h: _height };
        this.size = (_width * _height);
        this.pointsInZn = [];
        this.pointsOutZn = [];
        this.points = [this.pointsInZn, this.pointsOutZn];
    }

    /**
     * si retour false, c'est que le point est au même coordonnée
     * @param Point _point 
     * @returns boolean
     */
    setPointZn(_point) {
        let rslt = true;
        if (_point.x > this.limit.w || _point.y > this.limit.h) {
            if (this.pointsOutZn.findIndex(pts => (pts.x === _point.x && pts.y === _point.y)) === -1) {
                this.pointsOutZn.push(_point);
            } else {
                rslt = false;
            }
        } else {
            if (this.pointsInZn.findIndex(pts => (pts.x === _point.x && pts.y === _point.y)) === -1)
                this.pointsInZn.push(_point);
            else
                rslt = false;
        }
        return rslt;
    }
}

module.exports = Zone;