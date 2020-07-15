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
            Fraction fraction3 = new Fraction(5,6);
            Fraction fraction4 = new Fraction(fraction2);
            Console.WriteLine(fraction1.ToDiplay());
            Console.WriteLine(fraction2.ToDiplay());
            Console.WriteLine(fraction3.ToDiplay());
            Console.WriteLine(fraction4.ToDiplay());
        }
    }
}
