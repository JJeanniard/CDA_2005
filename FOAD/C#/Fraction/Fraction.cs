
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
            numerateur = 0;
            denominateur = 1;
        }

        public Fraction(Fraction _fraction)
        {
            numerateur = _fraction.numerateur;
            denominateur = _fraction.denominateur;
        }

        public Fraction(int _numerateur)
        {
            numerateur = _numerateur;
            denominateur = 1;
        }

        public Fraction(int _numerateur, int _denominateur)
        {
            numerateur = _numerateur;
            denominateur = _denominateur;
        }

        public override string ToString()
        {
            return "resultat: " + (numerateur/denominateur);
        }
    }
}
