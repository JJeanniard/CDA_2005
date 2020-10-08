using System;
using System.Collections.Generic;
using System.Text;

namespace Lepidoptere
{
    /// <summary>
    /// Classe qui est hérité par ces enfants et leurs donnent les directives.
    /// </summary>
    public abstract class StadeDevolution
    {
        public abstract bool SeDeplacer();

        public abstract StadeDevolution SeMetamorphoser();
    }
}