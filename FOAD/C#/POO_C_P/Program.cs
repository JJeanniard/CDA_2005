using System;


namespace Bank
{
    class Program
    {

        static void Main(string[] args)
        {
            Compte compte1 = new Compte(1, "Doe", 3000, -100);
            Compte compte2 = new Compte(2, "Jhg", 200, 0);
            Compte compte3 = new Compte(3, "fdsf", 565, -200);

            Console.WriteLine("Bienvenue Dans la Bank XXX");

            Console.WriteLine(compte1.ToString() + "\n");
            Console.WriteLine(compte2.ToString() + "\n");
            Console.WriteLine(compte3.ToString() + "\n");

            compte2.Crediter(50);
            Console.WriteLine(compte2.ToString() + "\n");

            Console.WriteLine(compte3.Debiter(500));
            Console.WriteLine(compte3.ToString() + "\n");

        }
    }
}
