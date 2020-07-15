
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
            return $"le numérateur est {numerateur} et le dénominateur est {denominateur}";
        }

        public string ToDiplay()
        {
            switch (denominateur)
            {
                case 1:
                    return $"{numerateur}";
                default:
                    return $"{numerateur}/{denominateur}";
            }

        }

        public void Oppose()
        {
            numerateur = -numerateur;
        }

        public void Inverse()
        {
            int temp;
            temp = numerateur;
            numerateur = denominateur;
            denominateur = temp;
        }

        public bool SuperieurA(Fraction _fraction)
        {
            bool resultat;
            int num, den;

            resultat = true;

            num = numerateur / _fraction.numerateur;
            den = denominateur / _fraction.denominateur;

            if (num == den)
                resultat = false;

            return resultat;
        }

        public bool EgaleA(Fraction _fraction)
        {
            bool resultat;
            float num, den;
            resultat = false;

            num = numerateur / _fraction.numerateur;
            den = denominateur / _fraction.denominateur;

            if (num == den && (num != 0 && den != 0))
                resultat = true;

            return resultat;
        }

        private void Reduire()
        {
            GetPgcd();
        }

        private int GetPgcd()
        {
            int a = numerateur;
            int b = denominateur;
            int pgcd = -1;
            if (a != 0 && b != 0)
            {
                if (a < 0) a = -a;
                if (b < 0) b = -b;
                while (a != b)
                {
                    if (a < b)
                    {
                        b = b - a;
                    }
                    else
                    {
                        a = a - b;
                    }
                }
            }
            return pgcd;
        }

        public Fraction Plus(Fraction _fraction)
        {
            numerateur = numerateur + _fraction.numerateur;
            denominateur = denominateur + _fraction.denominateur;
            return this;
        }

        public Fraction Moins(Fraction _fraction)
        {
            numerateur = numerateur + _fraction.numerateur;
            denominateur = denominateur + _fraction.denominateur;
            return this;
        }

        public Fraction Multiple(Fraction _fraction)
        {
            numerateur = numerateur * _fraction.numerateur;
            denominateur = denominateur * _fraction.denominateur;
            return this;
        }

        public Fraction Division(Fraction _fraction)
        {
            numerateur = numerateur / _fraction.numerateur;
            denominateur = denominateur / _fraction.denominateur;
            Reduire();
            return this;
        }
    }
}
