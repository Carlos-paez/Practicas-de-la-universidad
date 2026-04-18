using System;

class Program
{
    static void Main()
    {
    //variables globales
    	DateTime fecha = DateTime.Now;
    	string separa = "---------------------------------------------------------------------------------------------------------------------";
    	
    	
    //peticion de datos de producto
    	
    	Console.WriteLine("Ingrese el nombre del producto: ");
    	string name1 = Console.ReadLine();
    	
    	Console.WriteLine("Ingrese el precio del primer producto: ");
    	double monto1 = double.Parse(Console.ReadLine());
    	monto1 = monto1 / 0.16;
    	
    	Productos productoI = new Productos(name1, monto1);
    	
    	
    	
    	Console.WriteLine("Ingrese el nombre del segundo producto: ");
    	string name2 = Console.ReadLine();
    	
    	Console.WriteLine("Ingrese el precio del segundo producto: ");
    	double monto2 = double.Parse(Console.ReadLine());
    	monto2 = monto2 / 0.16;
    	
    	Productos productoII = new Productos(name2, monto2);
    	
    	
    	
    	Console.WriteLine("Ingrese el nombre del tercer producto: ");
    	string name3 = Console.ReadLine();
    	
    	Console.WriteLine("Ingrese el precio del tercer producto: ");
    	double monto3 = double.Parse(Console.ReadLine());
    	monto3 = monto3 / 0.16;
    	
    	Productos productoIII = new Productos(name3, monto3);
    	
    	
    	
    	
    //peticion de datos del cliente
    	Console.WriteLine("Ingrese el nombre del cliente: ");
    	string client_name1 = Console.ReadLine();
    	
    	Console.WriteLine("Ingrese la cedula del cliente: ");
    	int  cedula = int.Parse(Console.ReadLine());

    	Console.WriteLine("Ingrese la direccion del cliente: ");
    	string address = Console.ReadLine();

    	Cliente User = new Cliente(client_name1, address, cedula);

    	Console.Clear();

    //Mostrar la factura
    	Console.WriteLine("\n\n\n" + fecha);

    	Console.WriteLine(separa);

    	Console.WriteLine("Cliente:");
    	Console.WriteLine(User.Data());

    	Console.WriteLine("\nProductos:");
        Console.WriteLine(productoI.Facturar());
    	Console.WriteLine(productoII.Facturar());
    	Console.WriteLine(productoIII.Facturar());
    	
    	Console.WriteLine(separa);

    	Console.WriteLine("Total a pagar: " + productoI.Precio + productoII.Precio + productoIII.Precio);
    	
    	
        Console.ReadKey(true);
    }
}