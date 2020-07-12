using System;
using System.Collections.Generic;

namespace Point
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
            Point coord6 = new Point(coord3);
            
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
                Console.WriteLine("Point: "+i+" coordonnée: " + _point.ToString());
                i++;
            }

            coord5.DeplacePoint(60, 60);
            UpdateInCollecPoint(coords, coord5);

            i = 1;
            foreach (Point _point in coords)
            {
                Console.WriteLine("Point: " + i + " coordonnée: " + _point.ToString());
                i++;
            }

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
