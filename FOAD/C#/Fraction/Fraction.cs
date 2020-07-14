
using Microsoft.VisualBasic.CompilerServices;
using System;
using System.Collections.Generic;
using System.Text;

namespace Fraction
{
    public class Fraction
    {
        private int numerateur;
        private int denominateur;

        public Fraction()
        {
            devision(0, 1);
        }

        public Fraction(int _numerateur, int _denominateur)
        {
            devision(_numerateur, _denominateur);
        }

        private float devision(int _numerateur, int _denominateur)
        {
            float resultat;
            if (_numerateur == null)
            {
                resultat = 0;
            }
            else
            {
                resultat = _numerateur / _denominateur;
            }

            return resultat;
        }
    }
}
