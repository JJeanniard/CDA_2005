using Microsoft.VisualStudio.TestTools.UnitTesting;
using PointSpace;
using System.Collections.Generic;

namespace PointSpaceTest
{
    [TestClass]
    public class PointTest
    {
        private static Dictionary<int, Point> coords;

        public PointTest()
        {
            coords = new Dictionary<int, Point>();
            int i;
            for (i = 1; i < 100; i++)
            {
                coords.Add(i, new Point());
            }

            coords.Add(100, new Point(10, 20));
        }

        [TestMethod]
        public void TestToString()
        {
            foreach (KeyValuePair<int, Point> coord in coords)
            {
                Assert.AreEqual($"x: {coord.Value.X}, y: {coord.Value.Y}", coord.Value.ToString());
            }

            Assert.AreEqual($"x: 10, y: 20", coords[100].ToString());
        }

        [TestMethod]
        public void MovePoint()
        {
            coords[2].DeplacePoint(-5, 9);

            Assert.AreEqual("x: -5, y: 9", coords[2].ToString());

        }

        [TestMethod]
        public void Miroir()
        {
            coords[100].MiroirOrDon(coords[100]);
            Assert.AreEqual("x: -10, y: 20", coords[100].ToString());
            coords[100].MiroirAbscis(coords[100]);
            Assert.AreEqual("x: -10, y: -20", coords[100].ToString());
            coords[100].MiroirOrigin(coords[100]);
            Assert.AreEqual("x: 10, y: 20", coords[100].ToString());
        }
    }
}

