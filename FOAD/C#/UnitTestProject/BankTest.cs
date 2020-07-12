using Microsoft.VisualStudio.TestTools.UnitTesting;
using Bank;

namespace UnitTestProject
{
    [TestClass]
    class BankCompteTest
    {
        [TestMethod]
        public void Affichage_Compte()
        {
            Compte compte1 = new Compte(1, "Doe", 3000, -100);
            Compte compte2 = new Compte(2, "Jhg", 200, 0);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);

            compte1.ToString();
            compte2.ToString();
            compte3.ToString();
        }

        [TestMethod]
        public void Add_To_Creadit_And_Debit()
        {
            Compte compte2 = new Compte(2, "Jhg", 200, 0);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);

            compte2.Crediter(50);
            compte3.Debiter(600);
            compte3.Debiter(150);
            compte3.Debiter(40);
        }

        [TestMethod]
        public void Virement_Compte_At_Compte()
        {
            Compte compte1 = new Compte(1, "Doe", 3000, -100);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);
            compte1.Virement(1000, compte3);
        }

        [TestMethod]
        public void Equals_Compte()
        {
            Compte compte2 = new Compte(2, "Jhg", 200, 0);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);

            compte3.Compare(compte2);
        }
    }
}
