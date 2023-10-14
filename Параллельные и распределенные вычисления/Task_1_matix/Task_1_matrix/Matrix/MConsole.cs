using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Matrix
{
    class MConsole
    {
        public Boolean GetInteger(string Question, ref int ResInt)
        {
            string s = GetString(Question);
            if (int.TryParse(s, out ResInt))
            {
                return true;
            }
            else
            {
                ConsoleColor cfc = Console.ForegroundColor;
                Console.ForegroundColor = ConsoleColor.Red;
                Console.WriteLine($"Введите валидные значения - {s}!");
                Console.ForegroundColor = cfc;
                Console.ReadKey();
                return false;
            }
        }

        public string GetString(string Question)
        {
            try
            {
                Console.Write(Question);
                return Console.ReadLine();
            }
            catch
            {
                return "";
            }
        }
    }
}
