using System;
using System.Collections.Generic;
using System.Text;

namespace Lepidoptere
{
    public class Chrysalide : StadeDevolution
    {
        public override bool SeDeplacer()
        {
            Console.WriteLine("Je ne me déplace pas, je suis un Chrysallide");
            return true;
        }

        public override bool SeMetamorphoser()
        {
            Console.WriteLine("Ma futur metamorphose est en Papillon!");
            return true;
        }
    }
}