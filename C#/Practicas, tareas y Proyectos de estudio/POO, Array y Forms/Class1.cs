using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WindowsFormsApp1
{
    public class User
    {
        private string Nombre;
        private string Apellido;
        private int Edad;

        public User(string nombre, string apellido, int edad)
        {
            this.Nombre = nombre;
            this.Apellido = apellido;
            this.Edad = edad;
        }

        public string GetNombre()
        {
            return Nombre;
        }

        public void SetNombre(string nombre)
        {
            this.Nombre = nombre;
        }

        public string GetApellido()
        {
            return Apellido;
        }

        public void SetApellido(string apellido)
        {
            this.Apellido = apellido;
        }

        public int GetEdad()
        {
            return Edad;
        }

        public void SetEdad(int edad)
        {
            this.Edad = edad;
        }

        public override string ToString()
        {
            return $"Nombre: {Nombre}, Apellido: {Apellido}, Edad: {Edad}";
        }
    }
}
