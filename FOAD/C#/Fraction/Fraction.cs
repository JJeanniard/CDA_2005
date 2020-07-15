
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
            switch (numerateur)
            {
                default:
            }

            return $"numérateur {numerateur} et le dénominateur {denominateur}";
        }

        public string ToDiplay()
        {
            return $"{numerateur}/{denominateur}";
        }

        public Fraction Division(Fraction _fraction)
        {
            return this;
        }

        public void Oppose()
        {

        }

        public void Inverse()
        {

        }

        public bool SuperieurA(Fraction _fraction)
        {
            float quotient, quotient2;
            bool resultat;

            resultat = true;

            quotient = numerateur / denominateur;
            quotient2 = _fraction.numerateur / _fraction.denominateur;

            if (quotient<quotient2)
                resultat = false;

            return resultat;
        }

        public bool EgaleA(Fraction _fraction)
        {
            float quotient;
            bool resultat;
            resultat = false;
            quotient = numerateur / denominateur;
            if (quotient < (_fraction.numerateur/_fraction.denominateur))
                resultat = true;

            return resultat;
        }

        private void Reduire()
        {

        }

        private int GetPgcd()
        {

        }
        
        public Fraction Plus(Fraction _fraction)
        {

        }

        public Fraction Moins(Fraction _fraction)
        {

        }

        public Fraction Multiple(Fraction _fraction)
        {

        }

        public Fraction Division(Fraction _fraction)
        {

        }
    }
}
