using Microsoft.VisualStudio.TestTools.UnitTesting;
using System;
using PointSpace;
using System.Collections.Generic;
using System.Security.Cryptography.X509Certificates;

namespace UnitTestProject
{
    [TestClass]
    public class PointTest
    {
        private static Dictionary<int, Point> coords = new Dictionary<int, Point>();

        [TestMethod]
        public void Generateur()
        {
            int i;
            for (i = 0; i < 100; i++)
            {
                coords.Add(i, new Point());
            }

        }

        [TestMethod]
        public void TestToString()
        {

            foreach (KeyValuePair<int, Point> coord in coords)
            {
                Console.WriteLine("{0}", coord.Value);
            }

        }

        [TestMethod]
        public void MovePoint()
        {
            coords[2].DeplacePoint(-5, 9);
            Point a = coords[2];
            coords[2].MiroirOrDon(a);

            coords[2].MiroirAbscis(a);

            coords[2].MiroirOrigin(a);
        }
    }
}

