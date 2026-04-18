// solicitar 3 datos por teclado números por teclado y calcular su promedio

/*
    Contador:
        Se utiliza para contar valores ( cont++; o cont+1; )
        
    Acumulador:
        Se utilizan  para acumular valores ( suma = suma + valor; )
*/
/*using System;

class Program
{
    static void Main(string[] args)
    {
        float suma;
        
        Console.WriteLine("Ingrese el primer numero");
        float numero1 = float.Parse(Console.ReadLine());
        
        Console.WriteLine("Ingrese el segundo numero");
        float numero2 = float.Parse(Console.ReadLine());
        
        Console.WriteLine("Ingrese el tercer numero");
        float numero3 = float.Parse(Console.ReadLine());
        
        suma = numero1 + numero2 + numero3;
        float promedio = (suma/3);
        
        Console.WriteLine("El promedio es= " + promedio);
        
        Console.ReadKey(true);
    }
}
*/


/* Calcular el IVA de 3 productos y calcular el total a pagar, 
el valor de los productos debe ser introducidos por teclado*/

using System;

class Program
{
    static void Main(string[] args)
    {
        // Pedir y capturar datos de los productos
        Console.WriteLine("Ingrese el precio del primer producto");
        float precio1 = float.Parse(Console.ReadLine());
        
        Console.WriteLine("Ingrese el precio del segundo producto");
        float precio2 = float.Parse(Console.ReadLine());
        
        Console.WriteLine("Ingrese el precio del tercer producto");
        float precio3 = float.Parse(Console.ReadLine());
        
        //Calcular el iva de cada producto
        double iva1 = (precio1 * 0.16);
        double iva2 = (precio2 * 0.16);
        double iva3 = (precio3 * 0.16);
        
        //Mostrar el precio total de cada producto
        Console.WriteLine("El precio total del primer producto es: " +  iva1);
        Console.WriteLine("El precio total del segundo producto es: " +  iva2);
        Console.WriteLine("El precio total del tercer producto es: " +  iva3);
        
        for (int i = 0; i <5; i++ )
        {
            Console.WriteLine("\n hola mundo");
        }
        
        
        Console.ReadKey(true);
    }
}