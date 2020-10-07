using System;
using System.Collections.Generic;
using System.Text;

namespace Lepidoptere
{
    public class Papillon : StadeDevolution
    {
        public override bool SeDeplacer()
        {
            Console.WriteLine("Je me déplace comme un papillon!");
            return true;
        }

        public override bool SeMetamorphoser()
        {
            Console.WriteLine("Je n'est plus d'evolution à ce stade!");
            return true;
        }
    }
}