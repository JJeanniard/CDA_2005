using System;
using System.Collections.Generic;
using System.Text;
using Zoo.Contrats;

namespace Zoo.Staff
{
    class Guardian : ISpeak, IMove
    {
        public bool Move()
        {
            Console.WriteLine("Je cours");
            return true;
        }

        public void Speak()
        {
            Console.WriteLine("Au feu, au feu!");
        }
    }
}
