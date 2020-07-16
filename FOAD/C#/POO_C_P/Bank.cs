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
        }

        public void HideCompte()
        {
            //regarder le sytéme de trie sur List
        }

        public Compte showCompte(int _num)
        {

        }

        public bool Switch(int _num1, int _num2, int somme)
        {
            bool isValid;
            isValid = false;

            return isValid;
        }

    }
}
