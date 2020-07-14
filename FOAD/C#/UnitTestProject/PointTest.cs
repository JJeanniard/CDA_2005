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
        private static Dictionary<int,Point> coords = new Dictionary<int, Point>();

        public void Generateur()
        {
            int i;
            for(i = 0; 0 < 100; i++)
            {
                coords.Add(i, new Point());
            }
            
        }

        [TestMethod]
        public void TestToString()
        {
            Console.WriteLine(coords.ToString().ToString());
        }


    }
}

