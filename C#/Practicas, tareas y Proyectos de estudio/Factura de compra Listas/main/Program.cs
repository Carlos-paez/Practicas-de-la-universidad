using System;
using System.Collections.Generic; // Agregar esta línea para usar List

class Program
{
    static void Main(string[] args)
    {
        int facturaNumero = 0;
        double totalDia = 0;
        double totalPagar = 0;
        DateTime fecha = DateTime.Now;

        int repetir;
        double precioTotal = 0;
        string direccion = "";
        string cliente = "";

        List<string> nombresProductos = new List<string>(); // Usar List para almacenar nombres de productos
        List<double> preciosProductos = new List<double>(); // Usar List para almacenar precios de productos

        while(true)
        {
        	Console.WriteLine("Ingrese la acción que desea realizar: \n 1 = crear factura. \n 2 = Cierre de caja.");
        int opcion = int.Parse(Console.ReadLine());

        Console.Clear();

        if (opcion == 1)
        {
            while (true)
            {
                Console.WriteLine("Ingrese el nombre del producto (o 'fin' para terminar):");
                string nombreProducto = Console.ReadLine();

                if (nombreProducto.ToLower() == "fin")
                {
                    break;
                }

                Console.WriteLine("Ingrese el precio del producto:");
                double precioProducto = double.Parse(Console.ReadLine());

                nombresProductos.Add(nombreProducto); // Agregar nombre a la lista
                preciosProductos.Add(precioProducto); // Agregar precio a la lista
                precioTotal += precioProducto;

                Console.WriteLine("¿Desea ingresar otro producto? (1 = sí, 2 = no):");
                repetir = int.Parse(Console.ReadLine());

                Console.Clear();

                if (repetir == 2)
                {
                    Console.WriteLine("Ingrese el nombre y apellido del cliente:");
                    cliente = Console.ReadLine();

                    Console.WriteLine("Ingrese la dirección del cliente:");
                    direccion = Console.ReadLine();

                    break;
                }
            }

            totalPagar = precioTotal * 1.16;
            totalDia += totalPagar;
            facturaNumero++;

            Console.Clear();

            // Mostrar la factura
            Console.WriteLine("------------------------------------------------------------------------------------------------------------------------");
            Console.WriteLine(fecha);
            Console.WriteLine("Cliente: " + cliente);
            Console.WriteLine("Ubicado en: " + direccion);
            Console.WriteLine("Número de factura: " + facturaNumero);
            Console.WriteLine("------------------------------------------------------------------------------------------------------------------------");
            Console.WriteLine("------------------------------------------------------------------------------------------------------------------------");
            Console.WriteLine("\nPrecio individual de cada Producto:");

            for (int i = 0; i < nombresProductos.Count; i++) // Mostrar precio unitario de cada producto
            {
                Console.WriteLine(nombresProductos[i] + ": " + preciosProductos[i]);
            }

            Console.WriteLine("\nTotal de los productos: " + precioTotal); // Mostrar precio total sin IVA
            Console.WriteLine("\nTotal a pagar: " + totalPagar); // Mostrar total a pagar con IVA

            Console.ReadLine();
            Console.Clear();

            if (totalPagar > 100 && totalPagar < 200)
            {
                Console.WriteLine("\nGracias por su compra");
            }
            else if (totalPagar < 100)
            {
                Console.WriteLine("Que tenga feliz día");
            }
            else
            {
                Console.WriteLine("Vuelva pronto");
            }

            Console.ReadKey(true);
            Console.Clear();
        }
        else if (opcion == 2)
        {
            Console.WriteLine("Al " + fecha + " se crearon " + facturaNumero + " facturas.");
            Console.WriteLine("Sumando un total de: " + totalDia);
            Console.ReadKey(true);
            Console.Clear();
        }
        else
        {
            Console.WriteLine("Opción no válida.");
        }
        }
    }
}   