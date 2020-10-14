using System;
using System.Collections.Generic;
using System.Text;
using Zoo.Contrats;

namespace Zoo.Animals
{
    class Perrot : AnimalOfZoo, ISpeak
    {
        private int lengthBecCm;

        public Perrot(DateTime _dateOfBirth, bool _isBirthAtZoo, int _lengthBecCm) : base(_dateOfBirth, _isBirthAtZoo)
        {
            lengthBecCm = _lengthBecCm;
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
