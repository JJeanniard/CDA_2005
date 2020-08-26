using System;

namespace PointSpace
{
    public class Point
    {
        private int x;
        private int y;

        public int X { get => x; set => x = value; }
        public int Y { get => y; set => y = value; }

        /// <summary>
        /// initialise un point aleatoire à l'instanciation de l'objet
        /// </summary>
        public Point()
        {
            x = new Random().Next(-20, 20);
            y = new Random().Next(-20, 20);
        }

        /// <summary>
        /// initialise un point à partir de parametre definie 
        /// </summary>
        /// <param name="_x"></param>
        /// <param name="_y"></param>
        public Point(int _x, int _y)
        {
            x = _x;
            y = _y;
        }

        /// <summary>
        /// initialise un point à partir d'un autre point 
        /// </summary>
        /// <param name="_point"></param>
        public Point(Point _point)
        {
            x = _point.x;
            y = _point.y;
        }

        /// <summary>
        /// Affichage du point demander
        /// </summary>
        /// <returns></returns>
        public override string ToString()
        {
            return "x: " + x + ", y: " + y;
        }

        /// <summary>
        /// deplace le point au coordonnée voulue
        /// </summary>
        /// <param name="_x"></param>
        /// <param name="_y"></param>
        public void DeplacePoint(int _x, int _y)
        {
            x = _x;
            y = _y;
        }

        /// <summary>
        /// deplace le point sur que les ordonnées
        /// </summary>
        /// <param name="_point"></param>
        /// <returns></returns>
        public Point MiroirOrDon(Point _point)
        {
            _point.x = -_point.x;
            //x
            return _point;
        }
        /// <summary>
        /// deplace le point que sur les abscisses 
        /// </summary>
        /// <param name="_point"></param>
        /// <returns></returns>
        public Point MiroirAbscis(Point _point)
        {
            _point.y = -_point.y;
            //y
            return _point;
        }

        /// <summary>
        /// deplace le point de ça possition 
        /// </summary>
        /// <param name="_point"></param>
        public void MiroirOrigin(Point _point)
        {
            _point.x = -_point.x;
            _point.y = -_point.y;
        }
    }
}
