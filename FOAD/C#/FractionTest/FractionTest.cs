using Microsoft.VisualStudio.TestTools.UnitTesting;
using FractionCalcul;

namespace FractionTest
{
    [TestClass]
    public class FractionTest
    {
        private Fraction a;
        private Fraction b;
        private Fraction c;

        public FractionTest()
        {
            a = new Fraction(2, 3);
            b = new Fraction(5, 9);
            c = new Fraction(4, 6);
        }

        [TestMethod]
        public void TestToString()
        {
            Assert.AreEqual("le numérateur est 2 et le dénominateur est 3", a.ToString());
        }

        [TestMethod]
        public void Action()
        {
            a.Oppose();
            Assert.AreEqual("le numérateur est -2 et le dénominateur est 3", a.ToString());
            a.Inverse();
            Assert.AreEqual("le numérateur est 3 et le dénominateur est -2", a.ToString());
        }

        [TestMethod]
        public void Compares()
        {
            Assert.IsTrue(a.SuperieurA(b));
            Assert.IsTrue(a.EgaleA(c));
            Assert.IsFalse(b.SuperieurA(c));
            Assert.IsFalse(b.EgaleA(c));
        }

        [TestMethod]
        public void Calculs()
        {
            a.Plus(b);
            Assert.AreEqual("33/27", a.ToDiplay());
            a = new Fraction(2, 3);
            b = new Fraction(5, 9);
            a.Moins(b);
            Assert.AreEqual("3/27", a.ToDiplay());
            a = new Fraction(2, 3);
            b = new Fraction(5, 9);
            a.Multiple(b);
            Assert.AreEqual("10/27", a.ToDiplay());
            a = new Fraction(2, 3);
            b = new Fraction(5, 9);
            a.Division(b);
            Assert.AreEqual("18/15", a.ToDiplay());
        }
    }
}
