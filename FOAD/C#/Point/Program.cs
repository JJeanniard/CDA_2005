using System;
using System.Collections.Generic;

namespace PointSpace
{
    class Program
    {
        static void Main(string[] args)
        {
            List<Point> coords = new List<Point>();

            Point coord1 = new Point();
            Point coord2 = new Point();
            Point coord3 = new Point();
            Point coord4 = new Point(-11, 30);
            Point coord5 = new Point(10, 5);
            Point coord6 = new Point(coord4);
            
            coords.Add(coord1);
            coords.Add(coord2);
            coords.Add(coord3);
            coords.Add(coord4);
            coords.Add(coord5);
            coords.Add(coord6);

            Console.WriteLine("Hello World, welcome in classe point!");

            int i;
            i = 1;
            foreach (Point _point in coords)
            {
                Console.WriteLine("PointSpace: "+i+" coordonnée: " + _point);
                i++;
            }

            Console.WriteLine($"\nDeplacement du point {coord5}");
            coord5.DeplacePoint(60, 60);
            UpdateInCollecPoint(coords, coord5);

            i = 1;
            foreach (Point _point in coords)
            {
                Console.WriteLine("PointSpace: " + i + " coordonnée: " + _point);
                i++;
            }

            Console.WriteLine($"\nDéplacement du point {coord2} en mirroire sur l'ordonnée");
            coord2.MiroirOrDon(coord2);
            Console.WriteLine($"Nouvelle coordonée du point {coord2}");

            Console.WriteLine($"\nDéplacement du point {coord2} en mirroire sur l'abscisse");
            coord2.MiroirAbscis(coord2); //TODO: à corriger, si le nombre est en négative le passer en possitive et vice versa. 
            Console.WriteLine($"Nouvelle coordonée du point {coord2}\n");

            UpdateInCollecPoint(coords, coord2);

            i = 1;
            foreach (Point _point in coords)
            {
                Console.WriteLine("PointSpace: " + i + " coordonnée: " + _point);
                i++;
            }

            Console.WriteLine($"\nDéplacement du point {coord6} en mirroire sur l'ordonnée");
            coord2.MiroirOrigin(coord6);
            Console.WriteLine($"Nouvelle coordonée du point {coord6}");
        }

        public static bool UpdateInCollecPoint(List<Point> _collection ,Point _points)
        {
            bool isValide;
            int value;
            isValide = true;

            value = _collection.IndexOf(_points);

            _collection.Remove(_points);

            _collection.Insert(value, _points);

            return isValide;
        }
    }
}
