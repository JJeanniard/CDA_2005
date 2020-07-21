using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;

namespace GstBancaire
{
    public class Bank
    {
        private int nbComptes;
        private List<Compte> comptes = new List<Compte>();

        private string name;
        private string ville;

        public Bank(string _name, string _ville)
        {
            ville = _ville;
            name = _name;
        }

        public override string ToString()
        {
            int i;
            string answer;
            answer = "";

            for (i = 0; i < comptes.Count; i++)
            {
                answer += comptes[i].ToString() + "\n";
            }

            return answer;
        }

        public void AddCompte(int _num, string _lastname, int _solde, int _decouvertAutoriser)
        {
            AddCompte(new Compte(_num, _lastname, _solde, _decouvertAutoriser));
        }

        private void AddCompte(Compte _compte)
        {
            comptes.Add(_compte);
            nbComptes++;
        }

        public void CompteSup()
        {
            comptes.Sort(delegate (Compte a, Compte b)
            {
                if (a.Solde == null && b.Solde == null) return 0;
                else if (a.Solde == null) return -1;
                else if (b.Solde == null) return 1;
                else return a.Solde.CompareTo(b.Solde);
            });

            Console.WriteLine(comptes[comptes.Count - 1]);
        }

        public Compte RendCompte(int _num)
        {
            Compte aneswer;
            aneswer = comptes.Find(x => x.Id == _num);
            if (aneswer == null)
                aneswer = null;
            return aneswer;
        }

        public bool Transfere(int _num1, int _num2, int somme)
        {
            bool isValid;
            isValid = false;
            Compte anwerSchCpt1, anwerSchCpt2;

            anwerSchCpt1 = comptes.Find(x => x.Id == _num1);
            anwerSchCpt2 = comptes.Find(x => x.Id == _num2);
            if (anwerSchCpt1 != null && anwerSchCpt2 != null)
            {
                isValid = anwerSchCpt1.Virement(somme, anwerSchCpt2);
            }

            return isValid;
        }

    }
}
