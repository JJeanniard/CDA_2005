using Microsoft.VisualStudio.TestTools.UnitTesting;
using PointSpace;
using System.Collections.Generic;

namespace PointSpaceTest
{
    [TestClass]
    public class PointTest
    {
        private static Dictionary<int, Point> coords = new Dictionary<int, Point>();

        public PointTest()
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
                Assert.AreEqual($"x: {coord.Value.X}, y: {coord.Value.Y}", coord.Value.ToString());
            }

        }

        [TestMethod]
        public void MovePoint()
        {
            coords[2].DeplacePoint(-5, 9);

            Assert.AreEqual($"x: -5, y: 9", coords[2].ToString())

        }
    }
}

