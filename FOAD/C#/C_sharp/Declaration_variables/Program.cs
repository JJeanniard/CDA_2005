using System;

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
            first_name = "bibi"
            Console.WriteLine(first_name);
            //error variable non init Console.WriteLine(firtname); -> (31,19): error CS0165: Use of unassigned local variable 'firstName'



        }
    }
}
