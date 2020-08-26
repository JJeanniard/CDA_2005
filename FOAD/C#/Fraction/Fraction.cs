
namespace FractionCalcul
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
            float somme1, somme2;

            resultat = true;

            somme1 = (float)numerateur / (float)denominateur;
            somme2 = (float)_fraction.numerateur / (float)_fraction.denominateur;

            if (somme1 < somme2)
                resultat = false;

            return resultat;
        }

        public bool EgaleA(Fraction _fraction)
        {
            bool resultat;
            float quotient1, quotient2;
            resultat = false;

            quotient1 = (float)numerateur/ (float)denominateur;
            quotient2 = (float)_fraction.numerateur/ (float)_fraction.denominateur;

            if (quotient1 == quotient2)
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
            int product1, product2, product3;
            
            product1 = numerateur * _fraction.denominateur;
            product2 = denominateur * _fraction.denominateur;

            product3 = _fraction.numerateur * denominateur;

            numerateur = product1 + product3;

            denominateur = product2;

            return this;
        }

        public Fraction Moins(Fraction _fraction)
        {
            int product1, product2, product3;

            product1 = numerateur * _fraction.denominateur;
            product2 = denominateur * _fraction.denominateur;

            product3 = _fraction.numerateur * denominateur;

            numerateur = product1 - product3;

            denominateur = product2;
            
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
            numerateur = numerateur * _fraction.denominateur;
            denominateur = denominateur * _fraction.numerateur;
            Reduire();
            return this;
        }
    }
}
