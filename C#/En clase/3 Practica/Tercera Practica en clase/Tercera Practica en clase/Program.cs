using System;

namespace Tercera_Practica_en_clase
{
	class Program
	{
		public static void Main(string[] args)
		{
			/* Bucle finito (for, while, do-while)
			  * 
			  * 
			  * bucle infinito
			  * 	por usuario
			  * 	indefinido*/
			 
			 /*for (int i=0;i<3;i++)
			 {
			 	Console.WriteLine("hola");
			 }
			 
			 
			 while(true)
			 {
			 	int cont=int.Parse(Console.ReadLine());
			 
			 	if (cont=1)
			 	{
			 		break;
			 	}
			 }
			 
			 
			 estudiar para el examen:
			 conversion de string a numeros
			 canbios de mayuscula a minscula
			 controlar estructuras con strings*/
			 
			 
			 
			 
			 
			 int repetir;
			 int precio = 0;
			 string nombre = "";
			 string direccion = "";
			 string cliente = "";
			 
			 while(true)
			 {
			 	Console.WriteLine("ingrese el nombre del ingresando una , y precionando la tecla espacio y luego enter despues de cada uno");
			 	string nombre_interno = Console.ReadLine();
			 	
			 	
			 	Console.WriteLine("\ningrese el Precio del producto");
			 	int precio_interno = int.Parse(Console.ReadLine());
			 	
			 	Console.WriteLine("\nDesea ingresar otro producto?\ningrese 1 para si y 2 para no");
			 	repetir = int.Parse(Console.ReadLine());
			 	
			 	nombre = nombre + nombre_interno;
			 	precio = precio + precio_interno;
			 	
			 	Console.Clear();
			 
			 	
			 	if (repetir == 2)
			 	{
			 		Console.WriteLine("Ingrese el nombre y apellido del cliente ");
			 		cliente = Console.ReadLine();
			 		
			 		Console.WriteLine("\nIngrese la direccion del cliente ");
			 		direccion = Console.ReadLine();
			 	
			 		
			 		
			 		break;
			 		
			 	}
	
			 }
			 
			 
			 Console.Clear();
			 
			 Console.WriteLine("\nNombre del cliente: " + cliente);
			 Console.WriteLine("\nEn la direcion: " + direccion);
			 Console.WriteLine("********************************************************************************");
			 Console.WriteLine("los productos: " + nombre + "dan un total simple de: " + precio);
			 Console.WriteLine("\nY un total a pagar de: " + precio * 0.16);
			 
			 
			
			Console.ReadKey(true);
		}
	}
}