using System;

namespace Lepidoptere
{
    class Program
    {
        static void Main(string[] args)
        {
            //new lepidoptera
            Lepidoptere lpd1 = new Lepidoptere(new Oeuf());
            lpd1.SeDeplacer();
            lpd1.SeMetamorphoser();
        }
    }
}
