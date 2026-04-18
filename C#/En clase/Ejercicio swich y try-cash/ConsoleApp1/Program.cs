using System;

namespace ProgramaClub
{
    class Usuario
    {
        private DateTime _fechaNacimiento; // Atributo privado

        public Usuario(DateTime fechaNacimiento)
        {
            _fechaNacimiento = fechaNacimiento;
        }

        public DateTime GetFechaNacimiento() // Método para obtener la fecha de nacimiento
        {
            return _fechaNacimiento;
        }

        public void SetFechaNacimiento(DateTime fechaNacimiento) // Método para asignar la fecha
        {
            _fechaNacimiento = fechaNacimiento;
        }

        public int CalcularEdad()
        {
            int edad = DateTime.Now.Year - _fechaNacimiento.Year;
            if (DateTime.Now.DayOfYear < _fechaNacimiento.DayOfYear)
            {
                edad--;
            }
            return edad;
        }
    }

    class Producto
    {
        private double _precio; // Atributo privado para el precio

        public double GetPrecio() // Método para obtener el precio
        {
            return _precio;
        }

        public void SetPrecio(double precio) // Método para establecer el precio
        {
            if (precio >= 0)
            {
                _precio = precio;
            }
            else
            {
                throw new ArgumentException("El precio no puede ser negativo.");
            }
        }

        public Producto(double precioInicial)
        {
            SetPrecio(precioInicial); // Uso del método para inicializar el precio
        }
    }

    class GestionDescuento
    {
        public static double SeleccionDeDescuento(Producto producto, int edad)
        {
            double precioFinal = producto.GetPrecio();

            if (edad >= 65)
            {
                precioFinal = AplicarDescuento(producto.GetPrecio(), 50);
                Console.WriteLine("Edad: " + edad + ". Descuento del 50%. El Precio final es de: " + precioFinal);
            }
            else if (edad < 18)
            {
                Console.Write("¿Los padres son socios del club? (si/no): ");
                string respuesta = Console.ReadLine().ToLower();

                switch (respuesta)
                {
                    case "si":
                        precioFinal = AplicarDescuento(producto.GetPrecio(), 35);
                        Console.WriteLine("Edad: " + edad + ". Descuento del 35%. El Precio final es de: " + precioFinal);
                        break;
                    case "no":
                        Console.WriteLine("Edad: " + edad + ". No se aplica descuento. El Precio final es de: " + precioFinal);
                        break;
                    default:
                        Console.WriteLine("Respuesta no válida. No se aplica descuento. El Precio final es de: " + precioFinal);
                        break;
                }

                /*if (respuesta == "si")
                {
                    precioFinal = AplicarDescuento(producto.GetPrecio(), 35);
                    Console.WriteLine("Edad: " + edad + ". Descuento del 35%. El Precio final es de: " + precioFinal);
                }
                else
                {
                    Console.WriteLine("Edad: " + edad + ". No se aplica descuento. El Precio final es de: " + precioFinal);
                }*/
            }
            else if (edad >= 18 && edad < 65)
            {
                precioFinal = AplicarDescuento(producto.GetPrecio(), 20);
                Console.WriteLine("Edad: " + edad + ". Descuento del 20%. El Precio final es de: " + precioFinal);
            }

            return precioFinal;
        }

        public static double AplicarDescuento(double precioOriginal, int porcentajeDescuento)
        {
            return precioOriginal * (1 - porcentajeDescuento / 100.0);
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
                string continuar;

                do
                {
                    try
                    {
                        Console.WriteLine("\nRegistro de un nuevo usuario:");

                        // Solicitar datos del producto
                        Console.Write("Ingrese el precio original: ");
                        double precioOriginal = double.Parse(Console.ReadLine());
                        Producto producto = new Producto(precioOriginal);

                        // Solicitar datos del usuario
                        Console.Write("Ingrese la fecha de nacimiento del usuario (formato: YYYY-MM-DD): ");
                        DateTime fechaNacimiento = DateTime.Parse(Console.ReadLine());
                        Usuario usuario = new Usuario(fechaNacimiento);

                        // Calcular edad y aplicar descuento
                        int edad = usuario.CalcularEdad();
                        double precioFinal = GestionDescuento.SeleccionDeDescuento(producto, edad);

                        Console.WriteLine($"Precio final a pagar para este usuario: {precioFinal}");
                    }
                    catch (FormatException ex)
                    {
                        Console.WriteLine("Error: Formato de entrada inválido. Por favor, ingrese los datos correctamente.");
                        Console.WriteLine($"Detalles: {ex.Message}");
                    }
                    catch (ArgumentException ex)
                    {
                        Console.WriteLine("Error: " + ex.Message);
                    }
                    catch (Exception ex)
                    {
                        Console.WriteLine("Ocurrió un error inesperado: " + ex.Message);
                    }

                    // Preguntar si se desea continuar con otro usuario
                    Console.Write("\n¿Desea registrar otro usuario? (si/no): ");
                    continuar = Console.ReadLine().ToLower();

                } while (continuar == "si");

                Console.WriteLine("\nOperación finalizada. Presione cualquier tecla para salir...");
                Console.ReadKey(true);
        }
    }
}