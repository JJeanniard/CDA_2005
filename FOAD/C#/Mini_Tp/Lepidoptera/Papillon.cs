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

        /// <summary>
        /// On realise une polimorphie pour faire evolué l'intance donner, à chaque appelle de la méthode.
        /// </summary>
        /// <returns>StadeDevolution</returns>
        public override StadeDevolution SeMetamorphoser()
        {
            Console.WriteLine("Je n'est plus d'evolution à ce stade!");
            StadeDevolution monStadeCourant = this;
            return monStadeCourant;
        }
    }
}