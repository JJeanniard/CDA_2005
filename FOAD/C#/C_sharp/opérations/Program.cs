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

            //incrementation
            int value = 0;
            value = value + 5;
            value += 5;
            value = 0;
            value = value + 1;
            value++;
            /*
             * +=
             * -=
             * *=
             * ++
             * --
             */
            ++value;//incrementation effectué avant la recuperation de la valeur dans la variable
            value++;//incrementation effectué apres que la valaur soit recuperé dans la variable

            //utilisation de l'opérateur d'incrémentation avant et après la valeur.
            value = 1;
            value++;
            Console.WriteLine("First: " + value);
            Console.WriteLine("Second: " + value++);
            Console.WriteLine("Third: " + value);//confirme l'incrementation sur la ligne précedent
            Console.WriteLine("Fourth: " + (++value));

            //TP -> caclcule de degrés Celsius en fonction du fahrenheit
            int fahrenheit = 94;
            decimal cinqNeuvi = 5m / 9m, convertion;
            convertion = (fahrenheit - 32) * cinqNeuvi;
            Console.WriteLine("The temperature is " + convertion + " Celsius.");
        }
    }
}
