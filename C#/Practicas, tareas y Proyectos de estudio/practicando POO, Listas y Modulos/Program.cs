using System;
using System.Collections.Generic;
namespace practicando
{
    public class Prog
    {
        public static void Main()
        { 
            List<Libro> libros = new List<Libro>();
            List<Usuarios> userList = new List<Usuarios>();

            try
            {
                New_User(userList);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error inesperado" + ex.Message);
            }
            
            while (true)
            {
                try
                {
                    Agregar(libros);
                    Prestamo(userList, libros);
                }
                catch (Exception ex)
                {
                    Console.WriteLine("Error inesperado" + ex.Message);
                }

                Console.WriteLine("Si desea salir del sistema ingrese si, si desea continuar ingrese no");
                string salir = Console.ReadLine();

                if (salir.Contains("si"))
                {
                    break;
                }
            }
            
            Console.ReadKey(true);
        }

        public static void New_User (List<Usuarios> usersList)
                {
                    try
                    {
                        Console.WriteLine("Ingrese un nombre para su usuario");
                        string name = Console.ReadLine();
        
                        Console.WriteLine("Ingrese un Pin númerico para su usuario");
                        int pin = int.Parse(Console.ReadLine());
        
                        Usuarios User = new Usuarios(name, pin);
                        usersList.Add(User);
                        
                        Console.Clear();
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
        
        public static void Agregar(List<Libro> libros)
        {
            string opcion = "";
            do
            {
                try
                {
                    
                    Console.WriteLine("Desea ingresar un libro? \nsi o no");
                    opcion = Console.ReadLine();

                    switch (opcion)
                    {
                        case "si":
                            Console.WriteLine("Ingrese el nombre del libro");
                            string name_book = Console.ReadLine();

                            Console.WriteLine("Ingrese el año de publicación del libro");
                            int year = int.Parse(Console.ReadLine());

                            Libro book = new Libro(name_book, year);
                            libros.Add(book);
                            break;
                        
                        case "no":
                            Console.WriteLine("Gracias por su preferencia\n");
                            break;
                    }
                    
                   

                    foreach (Libro mylibro in libros)
                    {
                        Console.Clear();
                        Console.WriteLine(mylibro.Info());
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

        public static void Prestamo(List<Usuarios> userslist, List<Libro> libros)
        {
            try
            {
                foreach (var user in userslist)
                {
                    user.Prestar(libros);
                }
            
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

    }
}