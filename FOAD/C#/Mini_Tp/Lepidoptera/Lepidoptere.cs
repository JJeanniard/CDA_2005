using System;
using System.Collections.Generic;
using System.Text;

namespace Lepidoptere
{
    /// <summary>
    /// Lépidoptère une espèce qui se déplace avec la méthode "SeDeplacer()" 
    /// et évolution en fonction de l'appelle de la méthode "SeMetamorphoser()".
    /// </summary>
    public class Lepidoptere
    {

        private StadeDevolution monStadeCourant;

        public Lepidoptere()
        {
            monStadeCourant = new Oeuf();
        }

        public bool SeDeplacer()
        {
            return monStadeCourant.SeDeplacer();
        }

        public StadeDevolution SeMetamorphoser()
        {
            return monStadeCourant=monStadeCourant.SeMetamorphoser();
        }
    }
}