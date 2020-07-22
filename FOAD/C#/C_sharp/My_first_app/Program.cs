using System;

namespace Valeur_litterales
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Console.WriteLine('b');//valeur littérales
            Console.WriteLine("Hello World!");//erreur si on passe en litérrales
            Console.WriteLine(123);//int
            Console.WriteLine(12.3m);//littéral décimal avec le suffixe m or M
            Console.WriteLine(true);
            Console.WriteLine(false);

            //String valeur different avec une valeur littéral
            //Un littéral est littéralement une valeur codée en dur.
            Console.WriteLine("123");
            Console.WriteLine(123);

            Console.WriteLine("true");
            Console.WriteLine(true);
        }
    }
}
