using System;
using System.Collections.Generic;

namespace practicando
{
    public class Producto
    {
        private string Nombre;
        private double Precio;
        private int Id;
        private string Descripcion;
        private int Cantidad;
        private int TotalVendido = 0;

        public Producto(string nombre, double precio, int id, string descripcion, int cantidad, int total)
        {
            this.Nombre = nombre;
            this.Precio = precio;
            this.Id = id;
            this.Descripcion = descripcion;
            this.Cantidad = cantidad;
            this.TotalVendido = total;
        }

        //Guetter y Setter
        public string GetNombre()
        {
            return Nombre;
        }

        public void SetNombre(string nombre)
        {
            this.Nombre = nombre;
        }

        public double GetPrecio()
        {
            return Precio;
        }

        public void SetPrecio(double precio)
        {
            this.Precio = precio;
        }

        public int GetId()
        {
            return Id;
        }

        public void SetId(int id)
        {
            this.Id = id;
        }

        public string GetDescriccion()
        {
            return Descripcion;
        }

        public void SetDescriccion(string descriccion)
        {
            this.Descripcion = descriccion;
        }

        public int GetCantidad()
        {
            return Cantidad;
        }

        public void SetCantidad(int cantidad)
        {
            this.Cantidad = cantidad;
        }

        public int GetTotalVendido()
        {
            return TotalVendido;
        }

        public void SetTotalVendido(int total)
        {
            this.TotalVendido = total;
        }

        //Metodos
        public string Info()
        {
            return
                $"ID: {Id} - {Nombre} - Precio: {Precio} - Cantidad en inventario: {Cantidad}\nDescripción: {Descripcion}";
        }

        public double CalcularIva()
        {
            return Precio * 0.16;
        }
        
        public void RegistrarVenta(int cantidad)
        {
            TotalVendido += cantidad;
        }
    }
    
    public class Usuarios
    {
        //Atributos
        private string Nombre;
        private int Cedula;
        private string Direccion;

        private Dictionary<Producto, int> productosSolicitados = new Dictionary<Producto, int>();

        //Constructor 
        public Usuarios(string nombre, int cedula, string direccion)
        {
            this.Nombre = nombre;
            this.Cedula = cedula;
            this.Direccion = direccion;
        }

        //GeTter y Setter
        public string GetNombre()
        {
            return Nombre;
        }

        public void SetNombre(string nombre)
        {
            this.Nombre = nombre;
        }

        public int GetCedula()
        {
            return Cedula;
        }

        public void SetCedula(int cedula)
        {
            this.Cedula = cedula;
        }

        public string GetDireccion()
        {
            return Direccion;
        }

        public void SetDireccion(string direccion)
        {
            this.Direccion = direccion;
        }

        //Metodos
        public void Vender(List<Producto> productosList)
        {
            Console.WriteLine("Ingrese el dia Actual");
            string dia = Console.ReadLine();

            Console.WriteLine($"Nombre {GetNombre()}\n Cédula {GetCedula()}\n Dirección {GetDireccion()}\n productos:");

            if (productosSolicitados.Count == 0)
            {
                Console.WriteLine("No ha solicitado productos. Solicite productos antes de facturar.");
                return;
            }

            double total = 0;
            double totalIva = 0;

            // Solo facturar productos solicitados
            foreach (var item in productosSolicitados)
            {
                Producto producto = item.Key;
                int cantidad = item.Value;
                double subtotal = producto.GetPrecio() * cantidad;
                double iva = producto.CalcularIva() * cantidad;

                Console.WriteLine(
                    $"Producto: {producto.GetNombre()} | Cantidad: {cantidad} | Precio unitario: {producto.GetPrecio():C} | Subtotal: {subtotal:C} | IVA: {iva:C}");

                total += subtotal;
                totalIva += iva;
                producto.RegistrarVenta(cantidad);
            }

            Console.WriteLine($"Total sin IVA: {total:C}");
            Console.WriteLine($"Total IVA: {totalIva:C}");
            Console.WriteLine($"Total con IVA: {(total + totalIva):C}");

            if (dia.ToLower().Contains("martes"))
            {
                double descuento = (total + totalIva) * 0.32;
                Console.WriteLine($"Total con descuento del Martes: {(total + totalIva - descuento):C}");
            }
            else if (dia.ToLower().Contains("jueves"))
            {
                double descuento = (total + totalIva) * 0.00;
                Console.WriteLine($"Total con descuento del Jueves: {(total + totalIva - descuento):C}");
            }
        }

        public void Solicitar(List<Producto> productosList)
        {
            Console.WriteLine("Ingrese el id del producto que está solicitando:");
            int idValue = int.Parse(Console.ReadLine());

            Console.WriteLine("Ingrese la cantidad de ese producto:");
            int pedir = int.Parse(Console.ReadLine());

            Producto productoSolicitado = null;
            foreach (var producto in productosList)
            {
                if (producto.GetId() == idValue)
                {
                    productoSolicitado = producto;
                    break;
                }
            }

            if (productoSolicitado == null)
            {
                Console.WriteLine("Producto no encontrado.");
                return;
            }

            int cantidadDisponible = productoSolicitado.GetCantidad();

            if (pedir <= 0)
            {
                Console.WriteLine("La cantidad solicitada debe ser mayor que cero.");
                return;
            }

            if (pedir > cantidadDisponible)
            {
                Console.WriteLine($"No hay suficiente stock. Cantidad disponible: {cantidadDisponible}");
            }
            else
            {
                // Descontar la cantidad solicitada
                productoSolicitado.SetCantidad(cantidadDisponible - pedir);

                // Guardar en productosSolicitados
                if (productosSolicitados.ContainsKey(productoSolicitado))
                {
                    productosSolicitados[productoSolicitado] += pedir;
                }
                else
                {
                    productosSolicitados.Add(productoSolicitado, pedir);
                }

                Console.WriteLine(
                    $"Pedido exitoso. Quedan {productoSolicitado.GetCantidad()} unidades del producto '{productoSolicitado.GetNombre()}'.");
            }
        }

        public void MostrarProductosSolicitados()
        {
            if (productosSolicitados.Count == 0)
            {
                Console.WriteLine("No se han solicitado productos aún.");
                return;
            }

            double totalPagar = 0;
            Console.WriteLine("Productos solicitados:");

            foreach (var item in productosSolicitados)
            {
                Producto producto = item.Key;
                int cantidad = item.Value;
                double subtotal = producto.GetPrecio() * cantidad;

                Console.WriteLine(
                    $"Producto: {producto.GetNombre()} | Cantidad: {cantidad} | Precio unitario: {producto.GetPrecio():C} | Subtotal: {subtotal:C}");

                totalPagar += subtotal;
            }

            Console.WriteLine($"Total a pagar por los productos solicitados: {totalPagar:C}");
        }
    }
}