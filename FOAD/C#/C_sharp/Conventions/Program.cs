using System;

namespace Conventions
{
    class Program
    {
        static void Main(string[] args)
        {
            /* La partie la plus difficile du développement de logiciels,
             * est de donner un nom aux choses.
             */
            //float float; using kay mot error
            string thisIsCamelCase;
            string strMyValue;//inutile langage fortement typé
            /*
             Commentaire de plusieurs niveaux
             Les commentaire de code expliquent inutilement les fonctionnalités évidents,
             sont des commentaire de faible qualité.
             C'est qui veut dire, sais que la ligne de code à déjâ une doc.
             Les commentaires de code ne fournissent aucun contexte pour le problème,
             est considére aussi un commentaire faible.
             */
            //indentation obligatoire pour la comprention du code
            //Et ajouté des espaces blanc entre methode(fonction), condition, ... 
            //Accolades sur leur propre ligne
            Console.WriteLine("\n");
            //TP
            /*
             L’objectif général de ce code,
             est d’inverser une chaîne et de compter le nombre de fois qu’un caractère particulier apparaît.
             */
            string str = "The quick brown fox jumps over the lazy dog.";

            char[] charMessage = str.ToCharArray();
            Array.Reverse(charMessage);

            int x = 0;

            foreach (char i in charMessage)
            { 
                if (i == 'o') 
                { 
                    x++; 
                } 
            }

            string new_message = new String(charMessage);
   
            Console.WriteLine(new_message);
            Console.WriteLine($"'o' appears {x} times.");
        }
    }
}
