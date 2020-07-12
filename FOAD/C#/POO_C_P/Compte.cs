using System;
using System.Collections.Generic;
using System.Text;

namespace Bank
{
    public class Compte
    {
        private int id;
        private string lastname;
        private int solde;
        private int decouvert;

        public Compte()
        {
        }

        public Compte(int _id, string _lastname, int _solde, int _decouvert)
        {
            id = _id;
            lastname = _lastname;
            solde = _solde;
            decouvert = _decouvert;
        }

        /// <summary>
        /// Retourne les informations du compte client.
        /// </summary>
        /// <returns></returns>
        public override string ToString()
        {
            return "Id: " + id + "\nLastname: " + lastname + "\nSolde: " + solde + "\nDecouvert autoriser: " + decouvert;
        }
        /// <summary>
        /// Action qui permet de crediter le compte
        /// </summary>
        /// <param name="_somme"></param>
        public void Crediter(int _somme)
        {
            solde += _somme;
        }
        /// <summary>
        /// Actino qui permet de debiter sur le compte,
        /// avec verification de decouvert autoriser
        /// </summary>
        /// <param name="_somme"></param>
        /// <returns></returns>
        public bool Debiter(int _somme)
        {
            bool isAccepter;
            isAccepter = true;
            int toto = (solde + Math.Abs(decouvert));
            if (_somme < toto)//300 - 500 (100)
            {
                solde = solde - _somme;
            }
            else
            {
                isAccepter = false;
            }

            return isAccepter;
        }
        /// <summary>
        /// Action de virement d'une somme à sur un autre compte 
        /// </summary>
        /// <param name="_somme"></param>
        /// <param name="_compteD"></param>
        /// <returns></returns>
        public bool Virement(int _somme, Compte _compteD)
        {
            bool isAccepter;
            isAccepter = Debiter(_somme);

            _compteD.Crediter(_somme);

            return isAccepter;
        }

        /// <summary>
        /// Action qui compare la somme des deux comptes
        /// </summary>
        /// <param name="_compteD"></param>
        /// <returns></returns>
        public bool Compare(Compte _compteD)
        {
            bool isSuperieur;

            if (solde > _compteD.solde)
            {
                isSuperieur = true;
            }
            else
            {
                isSuperieur = false;
            }

            return isSuperieur;
        }
    }
}
