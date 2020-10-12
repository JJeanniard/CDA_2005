
using System;
using System.Collections.Generic;
using System.Text;

namespace Zoo.Animals
{
    class Lion : AnimalOfZoo
    {
        public Lion(DateTime _dateOfBirth, bool _isBirthAtZoo) : base(_dateOfBirth, _isBirthAtZoo)
        {
        }

        public override bool Move()
        {
            Console.WriteLine("Je marche ou je cours");
            return true;
        }

        public void eat()
        {
            Console.WriteLine("Je mange de la viande!");
        }
    }
}
