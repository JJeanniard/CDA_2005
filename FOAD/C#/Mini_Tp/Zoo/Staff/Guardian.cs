using System;
using System.Collections.Generic;
using System.Text;
using Zoo.Contrats;

namespace Zoo.Staff
{
    class Guardian : Contrats.ISpeak, IMove
    {
        public bool Move()
        {
            return true;
        }

        public void Speak()
        {
            Console.WriteLine("Au feu, au feu!");
        }
    }
}
