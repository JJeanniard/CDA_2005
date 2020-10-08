using System;
using System.Collections.Generic;
using System.Text;
using Zoo.Contrats;

namespace Zoo.Animals
{
    class Perrot : AnimalOfZoo, ISpeak
    {
        public override bool Move()
        {
            return true;
        }

        public void Speak()
        {
            Console.WriteLine("Au feu, au feu!");
        }
    }
}
