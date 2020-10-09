using System;
using System.Collections.Generic;
using System.Text;

namespace Zoo.Animals
{
    class Rabbit : AnimalOfZoo
    {
        private int sizeHearCm;

        public Rabbit(DateTime _dateOfBirth, bool _isBirthAtZoo) : base(_dateOfBirth,_isBirthAtZoo)
        {
            sizeHearCm = 10;
        }

        public override bool Move()
        {
            Console.WriteLine("Je sautille!");
            return true;
        }

        public void eat()
        {
            Console.WriteLine("Je mange des carotte!");
        }
    }
}
