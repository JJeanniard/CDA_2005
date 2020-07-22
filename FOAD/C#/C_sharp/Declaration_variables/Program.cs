using System;
using System.Reflection;

namespace Declaration_variables
{
    class Program
    {
        static void Main(string[] args)
        {
            //variable est un tiroire dans le quel on stoke qu'une valeur, qui est associé à une addresse memoire
            string firtname;//contient uniquement des type string(chaine)
            string first_name;
            string name123456;
            //string 1azerty erreur
            //ne doit pas etre un mot cle
            string _firstname;
            string _Firstname;
            string strfirstname;//inutile
            char userOption;
            int gameScore;
            decimal particlesPerMillion;
            bool processedCustomer;


            //declaration de variable
            first_name = "Bob";//definition de la variable

            //error, it is type int => gameScore = "resrs";
            Console.WriteLine(first_name);
            first_name = "bibi";
            Console.WriteLine(first_name);
            //error variable non init Console.WriteLine(firtname); -> (31,19): error CS0165: Use of unassigned local variable 'firstName'

            //variables locales implicitement
            var message = "Hello world!";//chaque instance sera de type string
            //error message = 10.0m; -> (2,11): error CS0029: Cannot implicitly convert type 'decimal' to 'string'
            //la variable doit etre init

            //TP
            string firstname;
            int nbrbox;
            decimal celsius;
            firtname = "Bobl";
            nbrbox = 3;
            celsius = 34.4M;
            Console.WriteLine("Hello, {0}! You have {1} in your inbox. The temperature is {2} celsius.", firtname, nbrbox, celsius);
        }
    }
}
