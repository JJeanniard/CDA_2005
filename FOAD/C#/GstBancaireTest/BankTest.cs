using Microsoft.VisualStudio.TestTools.UnitTesting;
using GstBancaire;

namespace GstBancaireTest
{
    [TestClass]
    public class BankTest
    {
        Bank bank = new Bank("Tata", "Malfra");  

        public BankTest()
        {
            bank.AddCompte(1234, "Doe", 2000, 200);
            bank.AddCompte(4567, "C", 1000, 50);
            bank.AddCompte(7891, "D", 5000, 0);
        }

        [TestMethod]
        public void Search()
        {
            Assert.AreEqual("numéro: 4567, Lastname: C, Solde: 1000, Decouvert autoriser: 50", bank.RendCompte(4567));
        }

        [TestMethod]
        public void Tranfere()
        {
            Assert.IsTrue(bank.Transfere(1234, 4567, 1000));
            Assert.IsFalse(bank.Transfere(1234, 4567, 1500));
        }
    }
}