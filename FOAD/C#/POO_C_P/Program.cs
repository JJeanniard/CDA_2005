using System;

namespace GstBancaire
{
    class Program
    {

        static void Main(string[] args)
        {
            Console.WriteLine("Bienvenue Dans la Bank XXX");
            Compte compte1 = new Compte();
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
            }
        }
    }
}
