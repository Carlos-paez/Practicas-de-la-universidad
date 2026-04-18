using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace practicas
{
    public class Usuarios
    {
        private string Nombre;
        private string Apellido;
        private string CI;
        private string Genero;
        private DateTime FechaNacimiento;
        private string Password;
        private Rol rol;
        public enum Rol
        {
            Usuario,
            Administrador
        }

        public Usuarios(string nombre, string apellido, string ci, string genero, DateTime fechaNacimiento, string alias, string password, Rol rol)
        {
            this.Nombre = nombre;
            this.Apellido = apellido;
            this.CI = ci;
            this.Genero = genero;
            this.FechaNacimiento = fechaNacimiento;
            this.Password = password;
            this.rol = Rol.Usuario;
            this.rol = Rol.Administrador;
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

        public string GetCI()
        {
            return CI;
        }
        public void SetCI(string ci)
        {
            this.CI = ci;
        }

        public string GetGenero()
        {
            return Genero;
        }
        public void SetGenero(string genero)
        {
            this.Genero = genero;
        }

        public DateTime GetFechaNacimiento()
        {
            return FechaNacimiento;
        }
        public void SetFechaNacimiento(DateTime fechaNacimiento)
        {
            this.FechaNacimiento = fechaNacimiento;
        }
       
		public string GetPassword()
		{
			return Password;
		}
		public void SetPassword(string password)
		{
			this.Password = password;
		}

        public string GetRol()
        {
            return rol.ToString();
        }
        public void SetRol(Rol rol)
        {
            this.rol = rol;
        }
    }

}
