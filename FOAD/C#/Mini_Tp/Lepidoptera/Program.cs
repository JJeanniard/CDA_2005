using System;

namespace Lepidoptere
{
    class Program
    {
        static void Main(string[] args)
        {
            /// <summary>
            /// Instanciation de la classe Lépidoptère qui va créer un objet dans la variable lpd1.
            /// Et utilisation des méthodes de l'objet instancier.
            /// <summary>
            Lepidoptere lpd1 = new Lepidoptere();
            lpd1.SeDeplacer();
            lpd1.SeMetamorphoser();

            lpd1.SeDeplacer();
            lpd1.SeMetamorphoser();
        }
    }
}
