using System;

namespace Logique
{
    class Program
    {
        static void Main(string[] args)
        {
            Random dice = new Random();
            int roll1 = dice.Next(1, 7);
            int roll2 = dice.Next(1, 7);
            int roll3 = dice.Next(1, 7);
            int total = roll1 + roll2 + roll3;

            Console.WriteLine($"Dice roll: {roll1} + {roll2} + {roll3} = {total}");

            //imbriquation 
            if((roll1 == roll2) || (roll2 == roll3) || (roll3 == roll1))//operateur ||
            {
                if ((roll1 == roll2) && (roll2 == roll3))// operateur &&
                {
                    Console.WriteLine("You rolled triples! +6 bonus to total!");
                    total += 6;
                }else
                {
                    Console.WriteLine("You rolled doubles! +2 bonus to total!");
                    total += 2;
                }
            }

            if (total >= 16)
            {
                Console.WriteLine("You win a new car!");
            }
            else if (total >= 10)
            {
                Console.WriteLine("You win a new laptop!");
            }
            else if (total == 7)
            {
                Console.WriteLine("You win a trip for two");
            }
            else
            {
                Console.WriteLine("You win a kitten!");
            }

            Console.WriteLine("\n");
            //exemple exp bool
            string message = "The quick brown fox jumps over the lazy dog";
            bool result = message.Contains("dog");
            Console.WriteLine(result);

            if (message.Contains("fox"))
            {
                Console.WriteLine("What does the fox say?");
            }
            Console.WriteLine("\n");
            //TP
            Random random = new Random();
            int daysUntilExpiration = random.Next(12);
            int discountPercentage = 0;

            if(daysUntilExpiration <= 10)
            {
                if(daysUntilExpiration <= 5 && daysUntilExpiration > 1)
                {
                    Console.WriteLine($"Your subscription expires in {daysUntilExpiration} days.\nRenew now and save 10%!");
                    discountPercentage = 10;
                }
                else if (daysUntilExpiration == 1)
                {
                    Console.WriteLine("Your subscription expires within a day!\nRenew now and save 20%!");
                    discountPercentage = 20;
                }
                else if (daysUntilExpiration == 0)
                {
                    Console.WriteLine("Your subscription has expired.");
                }
                else
                {
                    Console.WriteLine("Your subscription will expire soon. Renew now!");
                }
                               
            }

        }
    }
}
