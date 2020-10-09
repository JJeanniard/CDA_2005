using System;
using System.Collections.Generic;
using Zoo.Animals;
using Zoo.Contrats;
using Zoo.Staff;

namespace Zoo
{
    class Program
    {
        static void Main(string[] args)
        {
            Guardian john = new Guardian();
            //realisation d'une liste animal et liste de qui parle
            List<AnimalOfZoo> animals = new List<AnimalOfZoo>();
            List<ISpeak> speaks = new List<ISpeak>();

            animals.Add(new Rabbit(DateTime.Parse("09/08/2020"), true));
            animals.Add(new Lion(DateTime.Parse("20/08/2015"), true));
            animals.Add(new Perrot(DateTime.Parse("28/02/2001"), true));
            animals.Add(new Rabbit(DateTime.Parse("18/08/2019"), false));

            Console.WriteLine("Liste des animaux du zoo :\n");

            foreach (AnimalOfZoo animal in animals)
            {
                Console.WriteLine($"{animal.GetType().Name} :\n\t " +
                    $"date de naissance -> {animal.DateOfBirth}\n\t " +
                    $"s'il est né au zoo -> {animal.IsBirthAtZoo}\n");
            }
            Console.WriteLine("Appuie sur la touche entree pour voir la suite!\n");
            Console.ReadLine();
            
            Console.WriteLine("Qui est le gardien du zoo :\n");
            Console.WriteLine("Prénom : John\n");

            //On trie les animaux dans l'odre du plus vieux au plus jeune
            animals.Sort();

            Console.WriteLine("Le feux fait fuire les aniamaux du zoo dans un d'ordre donner!\n");
            //il faut mettre un peu d'ordre dans l'evacuation...du plus vieux au plus jeune
            foreach (AnimalOfZoo animal in animals)
            {
                Console.WriteLine($"{animal.GetType().Name}\n ->");
                animal.Move();
                Console.WriteLine("\n");
            }

            //mais que fait le gardien? il reste sur place?
            Console.WriteLine("John :");
            john.Move();
            Console.WriteLine("\nAppuie sur la touche entree pour voir la suite!\n");
            Console.ReadKey();

            //et qui va appeller les secours?

            foreach (AnimalOfZoo animal in animals)
            {
                if(animal is ISpeak)
                {
                    speaks.Add((ISpeak)animal);
                }
            }

            speaks.Add(john);

            Console.WriteLine("Qui appelle au secoure :\n");
            foreach(ISpeak speak in speaks)
            {
                Console.WriteLine($"{speak.GetType().Name} :\n");
                speak.Speak();
                Console.WriteLine("\n");
            }
        }
    }
}
