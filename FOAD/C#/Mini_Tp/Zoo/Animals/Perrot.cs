using System;
using System.Collections.Generic;
using System.Text;
using Zoo.Contrats;

namespace Zoo.Animals
{
    class Perrot : AnimalOfZoo, ISpeak
    {
        public Perrot(DateTime _dateOfBirth, bool _isBirthAtZoo) : base(_dateOfBirth, _isBirthAtZoo)
        {

        }

        public override bool Move()
        {
            Console.WriteLine("Je vole!");
            return true;
        }

        public void Speak()
        {
            Console.WriteLine("Au feu, au feu!");
        }

        public void eat()
        {
            Console.WriteLine("Je mange des insectes");
        }
    }
}
