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

        /// <summary>
        /// On realise une polimorphie pour faire evolué l'intance donner, à chaque appelle de la méthode.
        /// </summary>
        /// <returns>StadeDevolution</returns>
        public override StadeDevolution SeMetamorphoser()
        {
            Console.WriteLine("Ma futur metamorphose est en Chrysalide!");
            StadeDevolution monStadeCourant = new Chrysalide();
            return monStadeCourant;
        }

    }
}