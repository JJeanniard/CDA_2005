using System;
using System.Collections.Generic;
using System.Text;

namespace Lepidoptere
{
    public class Lepidoptere
    {
        private StadeDevolution monStadeCourant;

        public Lepidoptere(StadeDevolution _monStadeCourant)
        {
            monStadeCourant = _monStadeCourant;
        }

        public bool SeDeplacer()
        {
            return monStadeCourant.SeDeplacer();
        }

        public bool SeMetamorphoser()
        {
            return monStadeCourant.SeMetamorphoser();
        }
    }
}