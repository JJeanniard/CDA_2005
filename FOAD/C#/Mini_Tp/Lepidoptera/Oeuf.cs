using System;
using System.Collections.Generic;
using System.Text;

namespace Lepidoptere
{
    public class Oeuf : StadeDevolution
    {
        public override bool SeDeplacer()
        {
            Console.WriteLine("Je ne me déplace pas, je suis un oeuf");
            return true;
        }

        public override bool SeMetamorphoser()
        {
            Console.WriteLine("Ma futur metamorphose est en chenille!");

            return true;
        }
    }
}