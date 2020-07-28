using System;

namespace Bibliotheque
{
    class Program
    {
        static void Main(string[] args)
        {
            Random dice = new Random();// methode d'instance, changement del'état à chaque instance(objet)
            int roll = dice.Next(1, 7);//return type int with paramet in

            Console.WriteLine(roll);//methode sans état, return type void
            /*
             Des méthodes on besoin d'avoir une instance pour fonctionner
            et d'autre sont appeller à partir de la classe.
             */
            //méthodes surchagées
            Console.WriteLine();//19 version surchargées diff.
            int number = 7;
            string text = "seven";

            Console.WriteLine(number);
            Console.WriteLine();
            Console.WriteLine(text);

            dice = new Random();
            int roll1 = dice.Next();//no limit 0 to 2 147 483 647 (stokage max in int)
            int roll2 = dice.Next(101);//0 to 100
            int roll3 = dice.Next(50, 101);//50 to 100

            Console.WriteLine($"First roll: {roll1}");
            Console.WriteLine($"First roll: {roll2}");
            Console.WriteLine($"First roll: {roll3}");
            //l'autocompletation et les bulles d'info vient de IntelliSense
            dice.Next();
            //https://docs.microsoft.com

            //TP -> used méthode class Math
            int firstValue = 500;
            int secondValue = 600;
            int largerValue;
            largerValue = System.Math.Max(firstValue, secondValue);
            Console.WriteLine(largerValue);
        }
    }
}
