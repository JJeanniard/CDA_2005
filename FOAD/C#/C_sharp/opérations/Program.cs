using System;

namespace opérations
{
    class Program
    {
        static void Main(string[] args)
        {
            string firstname = "Bob";
            int widgetsSold = 7;
            int firstNumber = 12;
            int secondNumber = 7;
            Console.WriteLine(firstname + " sold " + widgetsSold + 7 + " widgets.");//concatène

            Console.WriteLine(firstname + " sold " + (widgetsSold + 7) + " widgets.");// opérateur surchargé, les () sont prioritaires comme en math

            int sum = 7 + 5;
            int difference = 7 - 5;
            int product = 7 * 5;
            int quotient = 7 / 5;

            Console.WriteLine("Sum: " + sum);
            Console.WriteLine("Difference: " + difference);
            Console.WriteLine("Product: " + product);
            Console.WriteLine("Quotient: " + quotient);

            decimal decimalQuotient = 7.0m / 5.0m;
            Console.WriteLine("Decimal quotient: " + decimalQuotient);

            /*int decimalQuotient = 7 / 5.0m;
            int decimalQuotient = 7.0m / 5;
            int decimalQuotient = 7.0m / 5.0m;
            decimal decimalQuotient = 7 / 5;*/
            //ceci est faute


            //cast

            int first = 7;
            int second = 5;
            decimal qUotient = (decimal)first / (decimal)second;
            Console.WriteLine(qUotient);

            Console.WriteLine("Modulus of 200 / 5 : " + (200 % 5));
            Console.WriteLine("Modulus of 7 / 5: " + (7 % 5));
            //ordre de priorité
            int value1 = 3 + 4 * 5;
            int value2 = (3 + 4) * 5;
            Console.WriteLine(value1);
            Console.WriteLine(value2);

            //la suite sur l'incrementation
        }
    }
}
