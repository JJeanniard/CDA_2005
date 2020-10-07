using System;
using System.Collections.Generic;
using System.Text;

namespace Lepidoptera
{
    public class Lepidoptera
    {

        private string etat;

        private int nbrPattes;

        private float vitesseDeplacement;

        public Lepidoptera() : this("Chenille", 8, 2)
        {
        }

        public Lepidoptera(string _etat, int _nbrPattes, float _vitesseDeplacement)
        {
            etat = _etat;
            nbrPattes = _nbrPattes;
            vitesseDeplacement = _vitesseDeplacement;
        }

        public void VtsDeplacement(float _vitesse)
        {
            vitesseDeplacement = _vitesse;
        }

        public void Metamorphose(string _etat)
        {
            etat = _etat;
        }
    }
}