using Microsoft.VisualStudio.TestTools.UnitTesting;
using GstBancaire;

namespace GstBancaireTest
{
    [TestClass]
    public class CompteTest
    {
        [TestMethod]
        public void Affichage_Compte()
        {
            Compte compte1 = new Compte(1, "Doe", 3000, -100);
            Compte compte2 = new Compte(2, "Jhg", 200, 0);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);

            Assert.AreEqual("numéro: 1, Lastname: Doe, Solde: 3000, Decouvert autoriser: -100", compte1.ToString());
            Assert.AreEqual("numéro: 2, Lastname: Jhg, Solde: 200, Decouvert autoriser: 0", compte2.ToString());
            Assert.AreEqual("numéro: 3, Lastname: fdsf, Solde: 565, Decouvert autoriser: -200", compte3.ToString());
        }

        [TestMethod]
        public void Add_To_Creadit_And_Debit()
        {
            Compte compte2 = new Compte(2, "Jhg", 200, 0);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);
            
            compte2.Crediter(50);

            Assert.AreEqual(250, compte2.Solde);
            Assert.IsFalse(compte3.Debiter(600));
            Assert.IsTrue(compte3.Debiter(150));
            Assert.IsTrue(compte3.Debiter(40));
        }

        [TestMethod]
        public void Virement_Compte_At_Compte()
        {
            Compte compte1 = new Compte(1, "Doe", 3000, -100);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);
            Assert.IsTrue(compte1.Virement(1000, compte3));
            Assert.IsFalse(compte1.Virement(4000, compte3));
        }

        [TestMethod]
        public void Equals_Compte()
        {
            Compte compte2 = new Compte(2, "Jhg", 200, 0);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);

            Assert.IsTrue(compte3.Compare(compte2));
            Assert.IsFalse(compte2.Compare(compte3));

        }
    }
}
