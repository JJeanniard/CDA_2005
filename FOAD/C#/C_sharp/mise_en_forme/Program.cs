using System;

namespace mise_en_forme
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello\nWorld!");
            Console.WriteLine("Hello \"World\"!");
            //error Console.WriteLine("c:\source\repos");
            Console.WriteLine("c:\\source\\repos");
            Console.WriteLine("Generating invoices for customer \"ABC Corp\" ...\n");
            Console.WriteLine("Invoice: 1021\t\tComplete!");// \t pour tabulation
            Console.WriteLine("Invoice: 1022\t\tComplete!");
            Console.WriteLine("\nOutput Directory:\t");
            Console.WriteLine(@"   c:\source\repos   
                    (this is where your code goes)");
            Console.Write(@"c:\invoices");
            // Kon'nichiwa World
            Console.WriteLine("\u3053\u3093\u306B\u3061\u306F World!");
            // To generate Japanese invoices:
            // Nihon no seikyū-sho o seisei suru ni wa:
            Console.Write("\n\n\u65e5\u672c\u306e\u8acb\u6c42\u66f8\u3092\u751f\u6210\u3059\u308b\u306b\u306f\uff1a\n\t");
            Console.WriteLine(@"c:\invoices\app.exe -j");

            //concate

        }
    }
}
