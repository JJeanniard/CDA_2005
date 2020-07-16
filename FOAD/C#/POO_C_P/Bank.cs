using System;
using System.Collections.Generic;
using System.Text;

namespace GstBancaire
{
    class Bank
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

        public string ToString()
        {
            return "";
        }

        public void AddCompte(int num, string lastname, int solde, int decouvertAutoriser)
        {

        }

        private void AddCompte(Compte _compte)
        {

        }
    }
}
