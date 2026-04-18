using System;

namespace Practica_1
{
	class Program
	{
		public static void Main(string[] args)
		{
			
			// Uso de If, Else...
			
			/*operadores de comparación: ==, >, <, diferente
			  Operadores Aricmeticos: exonentes, * - + /   
			  Operadores logicos: and, or, not 
			 */
			
			
			int x;
			
			Console.WriteLine("Algoritmo que calcula expresiones \nIntodusca el numero a calcular");
			x = int.Parse(Console.ReadLine()); 
			
			x = x^2+2*x+1;
			
			Console.WriteLine("El resultado es: " + x);
			
			if (x <= 80)
			{
				Console.WriteLine("El resultado es menor o igual a 80");
			}
			
			else
			{
				Console.WriteLine("El resultado es mayor a 80");
			}
			
			
			Console.ReadKey(true);
			Console.Clear();
			
			
			do
			{
				Console.WriteLine("el numeor es mayor a 100");
			}while(x<=100);
			
			Console.ReadKey(true);
			
		}
	}
}