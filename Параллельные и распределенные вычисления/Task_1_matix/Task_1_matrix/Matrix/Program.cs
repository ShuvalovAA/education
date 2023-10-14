using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Matrix
{
    class Program
    {
        static void Main(string[] args)
        {
            MConsole mConsole = new MConsole();

            int a = 0;
            mConsole.GetInteger("размер матрицы:", ref a);
            if (a>0)
            {
                Math math = new Math(a);
                int[,] matrixResult = math.MatrixMult(math.matrix1, math.matrix2);

                math.PrintMatrix(math.matrix1, "\nматрица 1");
                math.PrintMatrix(math.matrix2, "\nматрица 2");
                math.PrintMatrix(matrixResult, "\nпроизведение матрицы 1, 2");

                Console.WriteLine($"\nвремя выполненияd: {math.timeElapsed}");
            }
            else
            {
                Console.ForegroundColor = ConsoleColor.Red;
                Console.WriteLine("Размер матрицы нужен больше 0.");
            }


            Console.ReadKey();
        }
    }
}
