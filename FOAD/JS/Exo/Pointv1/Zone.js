const Point = require('./Point.js');
/**
 * TODO: Qu'est cette classe? 
 */
class Zone {
    constructor(_width, _height) {
        this.pointOrigin = { w: 0, h: 0 };
        this.limit = { w: parseInt(_width || 0), h: parseInt(_height || 0) };
        this.size = (parseInt(_width || 0) * parseInt(_height || 0));
        this.pointsInZn = [];
        this.pointsOutZn = [];
        this.points = [this.pointsInZn, this.pointsOutZn];
    }

    isVZone(_zone){
        if(!(_zone instanceof Zone)){
            return false;
        }
        return true;
    }

    isVPoint(_point){
        if(!(_point instanceof Point)){
            return false;
        }
        return true;
    }

    /**
     * si retour false, c'est que le point est au même coordonnée
     * @param Point _point 
     * @returns boolean
     */
    setPointZn(_point) {
        let rslt = true;
        if(this.isVPoint(_point))
            return false;

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