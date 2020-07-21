using System;

namespace GstBancaire
{
    class Program
    {

        static void Main(string[] args)
        {
            Console.WriteLine("Bienvenue Dans la Bank XXX");
            /*Compte compte1 = new Compte();
            Compte compte2 = new Compte(2, "Jhg", 1000, 500);
            Compte compte3 = new Compte(3, "fdsf", 565, 200);          
            Compte compte4 = new Compte(545454, "Smitch", 2000, 500);          


            Console.WriteLine(compte1);
            Console.WriteLine(compte2);
            Console.WriteLine(compte3);

            compte4.Crediter(100);
            Console.WriteLine(compte4);
            bool ok = compte4.Debiter(1000000);
            if (ok)
            {
                Console.WriteLine("Débit réussi!");
            }
            else
            {
                Console.WriteLine("Débit pas réussi!");
            }

            compte2.Virement(1300, compte3);
            Console.WriteLine(compte2);
            Console.WriteLine(compte3);

            if (compte2.Compare(compte3))
            {
                Console.WriteLine("Superieur");
            }
            else
            {
                Console.WriteLine("Inférieur");
            }*/

            Bank bank = new Bank("xxx", "chausette");

            bank.AddCompte(585458, "toto", 150000, 0);
            bank.AddCompte(25642, "john", 2000, 100);
            bank.AddCompte(54253, "Laurent", 1500, 50);
            bank.AddCompte(65324, "Marcel", 3000, 500);

            Console.WriteLine(bank);
            bank.CompteSup();
            Console.WriteLine($"\n{bank.RendCompte(54253)}");
            Console.WriteLine("\n{0}", bank.RendCompte(565656) == null ? "null" : "");
            if (!bank.Transfere(54253, 25642, 1600))
            {
                Console.WriteLine("tranfert impossible");
            }
            else 
            { 
                Console.WriteLine("transfert effectué"); 
            }
            Console.WriteLine("\n{0}",bank);
        }
    }
}
