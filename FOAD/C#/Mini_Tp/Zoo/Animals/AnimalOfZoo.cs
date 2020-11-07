using System;
using System.Collections.Generic;
using System.Diagnostics.CodeAnalysis;
using System.Text;
using Zoo.Contrats;

namespace Zoo.Animals
{
    abstract class AnimalOfZoo : IMove, IComparable, IComparable<AnimalOfZoo>
    {
        private DateTime dateOfBirth;
        private bool isBirthAtZoo;

        public DateTime DateOfBirth { get => dateOfBirth; }
        public bool IsBirthAtZoo { get => isBirthAtZoo; }

        public AnimalOfZoo() : this(DateTime.Today, true)
        {

        }

        public AnimalOfZoo(DateTime _dateOfBirth, bool _isBirthAtZoo)
        {
            dateOfBirth = _dateOfBirth;
            isBirthAtZoo = _isBirthAtZoo;
        }

        public abstract bool Move();

        public int CompareTo([AllowNull] string other)
        {
            return this.CompareTo(other) ;
        }

        public int CompareTo(AnimalOfZoo other)
        {
           /* if (this.dateOfBirth > other.dateOfBirth)
            {
                return 1;
            }*/
            return this.dateOfBirth.CompareTo(other.dateOfBirth);
        }

        public int CompareTo(object obj)
        {
            throw new NotImplementedException();
        }
    }
}
