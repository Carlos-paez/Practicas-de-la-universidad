/*using System;
using System.Collections.Generic;

namespace practicando
{
    public class Prog
    {
        public static void Main()
        { 
            List<Producto> ProductosList = new List<Producto>();
            List<Usuarios> userList = new List<Usuarios>();
            bool accesoConcedido = false;
            
            authenticar(accesoConcedido);
            try
            {
                if (accesoConcedido)
                {
                    while (true)
                    {
                        Console.WriteLine("Ingrese la actividad que desea realizar \n1 - Cargar Cliente \n2 - Cargar Productos \n3 - Solicitar Producto \n4 - Facturar \n5 - Mostrar Productos Más Comprados \n7 - Salir del Sistema");
                        int Oppcion = int.Parse(Console.ReadLine());
               
                        switch (Oppcion)
                        {
                            case 1:
                                Console.Clear();
                                New_User(userList);
                                Console.Clear();
                                break;
                            case 2:
                                Console.Clear();
                                Agregar(ProductosList);
                                Console.Clear();
                                break;
                            case 3:
                                Console.Clear();
                                foreach (var view in ProductosList)
                                {
                                    Console.WriteLine(view.Info());
                                }
                                foreach (var user in userList)
                                {
                                    user.Solicitar(ProductosList);
                                }
                                Console.Clear();
                                break;
                            case 4:
                                Console.Clear();
                                Venta(userList, ProductosList);
                                Console.Clear();
                                break;
                            case 5:
                                Console.Clear();
                                MostrarProductosMasComprados(ProductosList);
                                Console.Clear();
                                break;
                        }

                        if (Oppcion == 7)
                        {
                            break;
                        }

                        Console.Clear();
                   
                    }
                })
               

               
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error inesperado", ex.Message);
            }
        }

        public static void New_User (List<Usuarios> usersList)
                {
                    try
                    {
                        Console.WriteLine("Ingrese un nombre del cliente");
                        string name = Console.ReadLine();
        
                        Console.WriteLine("Ingrese su cedula de identidad");
                        int cedula = int.Parse(Console.ReadLine());
                        
                        Console.WriteLine("Ingrese su Dirección Actual");
                        string addres = Console.ReadLine();
        
                        Usuarios User = new Usuarios(name, cedula, addres);
                        usersList.Add(User);

                    }
                    catch (FormatException fe)
                    {
                        Console.WriteLine("Error de formato" + fe.Message);
                    }
                    catch (ArgumentException ex)
                    {
                        Console.WriteLine("Error de Argumento" + ex.Message);
                    }
                    catch (Exception ex)
                    {
                        Console.WriteLine("Error inesperado" + ex.Message);
                    }
        
                }
        
        public static void Agregar(List<Producto> ProductosList)
        {
            string opcion = "";
            do
            {
                try
                {
                    
                    Console.WriteLine("Desea ingresar un Producto? \nsi o no");
                    opcion = Console.ReadLine();

                    switch (opcion)
                    {
                        case "si":
                            Console.WriteLine("Ingrese el nombre del Producto");
                            string name = Console.ReadLine();

                            Console.WriteLine("Ingrese Precio del Producto");
                            int money = int.Parse(Console.ReadLine());
                            
                            Console.WriteLine("Ingrese el Id del producto");
                            int id = int.Parse(Console.ReadLine());
                            
                            Console.WriteLine("Ingrese la descriccion del producto");
                            string descrip = Console.ReadLine();
                            
                            Console.WriteLine("Ingrese la cantidad del producto");
                            int cantidad = int.Parse(Console.ReadLine());

                            Producto ProductoI = new Producto(name, money, id, descrip, cantidad, 0);
                            ProductosList.Add(ProductoI);
                            break;
                        
                        case "no":
                            Console.WriteLine("Gracias por su preferencia\n");
                            break;
                        
                        default:
                            Console.WriteLine("Opción Iinvalida");
                            break;
                    }
                    
                   

                    foreach (Producto myitem in ProductosList)
                    {
                        Console.Clear();
                        Console.WriteLine(myitem.Info());
                    }
                    
                    Console.Clear();
                }

                catch (FormatException fe)
                {
                    Console.WriteLine("Error, Formato invalido" + fe.Message);
                }

                catch (ArgumentException ex)
                {
                    Console.WriteLine("Error e de argumento" + ex.Message);
                }

                catch (Exception ex)
                {
                    Console.WriteLine("Error inesperado" + ex.Message);
                }
            } while (opcion == "si");
        }

        public static void Venta(List<Usuarios> userslist, List<Producto> productosList)
        {
            try
            {
                DateTime fecha = DateTime.Now;
                
                foreach (var user in userslist)
                {
                   
                    user.Vender(productosList);
                }
                
                Console.WriteLine(fecha);
                Console.WriteLine("Presione una tecla para continuar");
                Console.ReadKey(true);
                Console.Clear();
            }

            catch (FormatException fe)
            {
                Console.WriteLine("Error, Formato invalido" + fe.Message);
            }

            catch (ArgumentException ex)
            {
                Console.WriteLine("Error e de argumento" + ex.Message);
            }

            catch (Exception ex)
            {
                Console.WriteLine("Error inesperado" + ex.Message);
            }
        }

        public static void authenticar(accesoConcedido)
        {
            try
            {
                string user = "Usuario";
                string pass = "1357908642";

                int maxIntentos = 3;
                int intentos = 0;
                

                while (intentos < maxIntentos && !accesoConcedido)
                {
                    Console.Write("Ingrese su usuario: ");
                    string usuarioIngresado = Console.ReadLine();

                    Console.Write("Ingrese su clave: ");
                    string claveIngresada = Console.ReadLine();

                    if (usuarioIngresado == user && claveIngresada == pass)
                    {
                        Console.Clear();
                        Console.WriteLine("¡Acceso concedido! Bienvenido.");
                        accesoConcedido = true;
                    }
                    else
                    {
                        intentos++;
                        Console.WriteLine($"Usuario o clave incorrectos. Intento {intentos} de {maxIntentos}.");
                        if (intentos == maxIntentos)
                        {
                            Console.WriteLine("Has alcanzado el número máximo de intentos. Acceso bloqueado.");
                        }
                    }
                }

                Console.Clear();
            }
            catch (FormatException fx)
            {
                Console.WriteLine("Error de formato", fx.Message);
            }
            catch (ArgumentException ax)
            {
                Console.WriteLine("Error de argumento", ax.Message);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error inesperado", ex.Message);
            }

        }
        
        public static void MostrarProductosMasComprados(List<Producto> productosList)
        {
            // Ordena los productos por la cantidad total vendida, descendente
            var productosOrdenados = productosList.OrderByDescending(p => p.GetTotalVendido());

            Console.WriteLine("Productos más comprados:");
            foreach (var producto in productosOrdenados)
            {
                Console.WriteLine($"{producto.GetNombre()} - Total Vendido: {producto.GetTotalVendido()}");
            }
            Console.WriteLine("Presione una tecla para continuar...");
            Console.ReadKey(true);
        }

    }
}*/

using System;
using System.Collections.Generic;

namespace practicando
{
    public class Prog
    {
        public static void Main()
        {
            List<Producto> ProductosList = new List<Producto>();
            List<Usuarios> userList = new List<Usuarios>();
            bool accesoConcedido = false;
            string tipoUsuario;

            authenticar(ref accesoConcedido, out tipoUsuario);

            try
            {
                if (accesoConcedido)
                {
                    while (true)
                    {
                        Console.WriteLine("Ingrese la actividad que desea realizar \n1 - Cargar Cliente \n2 - Cargar Productos \n3 - Solicitar Producto \n4 - Facturar \n5 - Mostrar Productos Más Comprados \n7 - Salir del Sistema");
                        int Oppcion = int.Parse(Console.ReadLine());

                        switch (Oppcion)
                        {
                            case 1:
                                Console.Clear();
                                New_User(userList);
                                Console.Clear();
                                break;
                            case 2:
                                Console.Clear();
                                Agregar(ProductosList);
                                Console.Clear();
                                break;
                            case 3:
                                Console.Clear();
                                foreach (var view in ProductosList)
                                    Console.WriteLine(view.Info());
                                foreach (var user in userList)
                                    user.Solicitar(ProductosList);
                                Console.Clear();
                                break;
                            case 4:
                                Console.Clear();
                                Venta(userList, ProductosList);
                                Console.Clear();
                                break;
                            case 5:
                                Console.Clear();
                                MostrarProductosMasComprados(ProductosList);
                                Console.Clear();
                                break;
                        }

                        if (Oppcion == 7)
                            break;

                        Console.Clear();
                    }
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error inesperado: " + ex.Message);
            }
        }

        public static void New_User(List<Usuarios> usersList)
        {
            try
            {
                Console.WriteLine("Ingrese un nombre del cliente");
                string name = Console.ReadLine();
                Console.WriteLine("Ingrese su cedula de identidad");
                int cedula = int.Parse(Console.ReadLine());
                Console.WriteLine("Ingrese su Dirección Actual");
                string addres = Console.ReadLine();
                Usuarios User = new Usuarios(name, cedula, addres);
                usersList.Add(User);
            }
            catch (FormatException fe)
            {
                Console.WriteLine("Error de formato: " + fe.Message);
            }
            catch (ArgumentException ex)
            {
                Console.WriteLine("Error de Argumento: " + ex.Message);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error inesperado: " + ex.Message);
            }
        }

        public static void Agregar(List<Producto> ProductosList)
        {
            string opcion = "";
            do
            {
                try
                {
                    Console.WriteLine("Desea ingresar un Producto? \nsi o no");
                    opcion = Console.ReadLine();
                    switch (opcion)
                    {
                        case "si":
                            Console.WriteLine("Ingrese el nombre del Producto");
                            string name = Console.ReadLine();
                            Console.WriteLine("Ingrese Precio del Producto");
                            double money = double.Parse(Console.ReadLine());
                            Console.WriteLine("Ingrese el Id del producto");
                            int id = int.Parse(Console.ReadLine());
                            Console.WriteLine("Ingrese la descripcion del producto");
                            string descrip = Console.ReadLine();
                            Console.WriteLine("Ingrese la cantidad del producto");
                            int cantidad = int.Parse(Console.ReadLine());
                            Producto ProductoI = new Producto(name, money, id, descrip, cantidad, 0);
                            ProductosList.Add(ProductoI);
                            break;
                        case "no":
                            Console.WriteLine("Gracias por su preferencia\n");
                            break;
                        default:
                            Console.WriteLine("Opción Invalida");
                            break;
                    }

                    foreach (Producto myitem in ProductosList)
                    {
                        Console.Clear();
                        Console.WriteLine(myitem.Info());
                    }
                    Console.Clear();
                }
                catch (FormatException fe)
                {
                    Console.WriteLine("Error, Formato invalido: " + fe.Message);
                }
                catch (ArgumentException ex)
                {
                    Console.WriteLine("Error de argumento: " + ex.Message);
                }
                catch (Exception ex)
                {
                    Console.WriteLine("Error inesperado: " + ex.Message);
                }
            } while (opcion == "si");
        }

        public static void Venta(List<Usuarios> userslist, List<Producto> productosList)
        {
            try
            {
                DateTime fecha = DateTime.Now;
                foreach (var user in userslist)
                {
                    user.Vender(productosList);
                }
                Console.WriteLine(fecha);
                Console.WriteLine("Presione una tecla para continuar");
                Console.ReadKey(true);
                Console.Clear();
            }
            catch (FormatException fe)
            {
                Console.WriteLine("Error, Formato invalido: " + fe.Message);
            }
            catch (ArgumentException ex)
            {
                Console.WriteLine("Error de argumento: " + ex.Message);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error inesperado: " + ex.Message);
            }
        }

        public static void authenticar(ref bool accesoConcedido, out string tipoUsuario)
        {
            tipoUsuario = "";
            try
            {
                // Diccionario de usuarios y contraseñas
                var usuarios = new Dictionary<string, string>
                {
                    { "admin", "admin123" },           // Administrador
                    { "Usuario", "1357908642" }        // Usuario común
                };

                int maxIntentos = 3;
                int intentos = 0;
                while (intentos < maxIntentos && !accesoConcedido)
                {
                    Console.Clear();
                    Console.Write("Ingrese su usuario: ");
                    string usuarioIngresado = Console.ReadLine();
                    Console.Write("Ingrese su clave: ");
                    string claveIngresada = Console.ReadLine();

                    // Verifica si el usuario existe y la clave es correcta
                    if (usuarios.ContainsKey(usuarioIngresado) && usuarios[usuarioIngresado] == claveIngresada)
                    {
                        Console.Clear();
                        Console.WriteLine("¡Acceso concedido! Bienvenido.");
                        accesoConcedido = true;
                        tipoUsuario = (usuarioIngresado == "admin") ? "admin" : "usuario";
                        Console.WriteLine($"Has iniciado sesión como: {tipoUsuario.ToUpper()}");
                        Console.WriteLine("Presione una tecla para continuar...");
                        Console.ReadKey(true);
                    }
                    else
                    {
                        intentos++;
                        Console.WriteLine($"Usuario o clave incorrectos. Intento {intentos} de {maxIntentos}.");
                        if (intentos == maxIntentos)
                        {
                            Console.WriteLine("Has alcanzado el número máximo de intentos. Acceso bloqueado.");
                        }
                        Console.WriteLine("Presione una tecla para continuar...");
                        Console.ReadKey(true);
                    }
                }
            }
            catch (FormatException fx)
            {
                Console.WriteLine("Error de formato: " + fx.Message);
            }
            catch (ArgumentException ax)
            {
                Console.WriteLine("Error de argumento: " + ax.Message);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error inesperado: " + ex.Message);
            }
        }

        public static void MostrarProductosMasComprados(List<Producto> productosList)
        {
            // Ordena los productos por la cantidad total vendida, descendente
            var productosOrdenados = productosList.OrderByDescending(p => p.GetTotalVendido());
            Console.WriteLine("Productos más comprados:");
            foreach (var producto in productosOrdenados)
            {
                Console.WriteLine($"{producto.GetNombre()} - Total Vendido: {producto.GetTotalVendido()}");
            }
            Console.WriteLine("Presione una tecla para continuar...");
            Console.ReadKey(true);
        }
    }
}

