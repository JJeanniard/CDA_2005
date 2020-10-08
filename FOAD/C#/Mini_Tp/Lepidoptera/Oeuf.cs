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

        /// <summary>
        /// On realise une polimorphie pour faire evolué l'intance donner, à chaque appelle de la méthode.
        /// </summary>
        /// <returns>StadeDevolution</returns>
        public override StadeDevolution SeMetamorphoser()
        {
            Console.WriteLine("Ma futur metamorphose est en chenille!");
            StadeDevolution monStadeCourant = new Chenille();
            return monStadeCourant;
        }
    }
}