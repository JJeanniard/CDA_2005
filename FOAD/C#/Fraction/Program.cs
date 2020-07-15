using System;

namespace Fraction
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            Fraction fraction1 = new Fraction();
            Fraction fraction2 = new Fraction(24,4);
            Fraction fraction3 = new Fraction(5,8);
            Fraction fraction4 = new Fraction(1,3);
            Fraction fraction5 = new Fraction(2,5);
            Fraction fraction6 = new Fraction(fraction2);

            Console.WriteLine(fraction1.ToDiplay());
            Console.WriteLine(fraction2.ToDiplay());
            Console.WriteLine(fraction3.ToDiplay());
            Console.WriteLine(fraction4.ToDiplay());
           
            Console.WriteLine(fraction4.EgaleA(fraction5));
            Console.WriteLine(fraction3.SuperieurA(fraction5));
            Console.WriteLine(fraction3.EgaleA(fraction5));
            /* Console.WriteLine(fraction4.EgaleA(fraction3));
             Console.WriteLine(fraction2.Division(fraction3));*/
        }
    }
}
