using System;
using System.Collections.Generic;
using System.Text;

namespace Lepidoptere
{
    public class Chenille : StadeDevolution
    {

        public override bool SeDeplacer()
        {
            Console.WriteLine("Je me déplace comme une chenille!");
            return true;
        }

        public override bool SeMetamorphoser()
        {
            Console.WriteLine("Ma futur metamorphose est en Chrysalide!");
            return true;
        }

    }
}