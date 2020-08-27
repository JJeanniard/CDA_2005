using System;

namespace Tableau_Foreach
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] fraudOrderIds = new string[3];
            //Un tableau commence toujours par l'index 0

            fraudOrderIds[0] = "a123";
            fraudOrderIds[1] = "b456";
            fraudOrderIds[2] = "c789";
            //erreur sortie du taébleau fraudOrderIds[3] = "d000"; IndexOutOfRangeException
            Console.WriteLine($"First: {fraudOrderIds[0]}");
            Console.WriteLine($"Second: {fraudOrderIds[1]}");
            Console.WriteLine($"Third: {fraudOrderIds[2]}");
            fraudOrderIds[0] = "F000";
            Console.WriteLine($"Reassign first: {fraudOrderIds[0]}");
            //Autre méthode d'initisialitaion d'un Tableau
            string[] fraudOrderIDs = { "A123", "B456", "C789" };
            //Et c'est de la même manière d'acces au données au tableau
            Console.WriteLine($"There are {fraudOrderIds.Length} fraudulent orders to process.");
            Console.WriteLine("\n");
            //foreach
            string[] names = { "bob", "Conrad", "Grant" };
            foreach (string name in names)
            {
                Console.WriteLine(name);
            }
            //table de type int 
            int[] inventory = { 200, 450, 700, 175, 250 };
            int sum = 0, y = 0;
            foreach(int items in inventory){
                Console.WriteLine(sum += items);
                y++;
            }
            Console.WriteLine($"Nombre d'item dans le tableau est {y}");
            Console.WriteLine("\n");
            //TP
            string[] fackCommand = { "B123", "C234", "A345", "C15", "B177", "G3003", "C235", "B179" };
            foreach(string command in fackCommand)
            {
                if (command.Contains("B"))
                {
                    Console.WriteLine($"Fraude possiblie sur la commande {command}");
                }
                Console.WriteLine("\n");
                if(command.StartsWith("B"))
                {
                    Console.WriteLine($"Fraude possiblie sur la commande {command}");
                }
            }
        }
    }
}
