using System;
using System.Collections.Generic;
using System.Text;
using Zoo.Contrats;

namespace Zoo.Animals
{
    abstract class AnimalOfZoo : IMove
    {
        private DateTime dateOfBirth;
        private bool isBirthAtZoo;

        public AnimalOfZoo() : this(DateTime.Today, true)
        {

        }

        public AnimalOfZoo(DateTime _dateOfBirth, bool _isBirthAtZoo)
        {
            dateOfBirth = _dateOfBirth;
            isBirthAtZoo = _isBirthAtZoo;
        }

        public abstract bool Move();
    }
}
