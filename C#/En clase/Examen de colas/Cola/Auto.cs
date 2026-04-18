using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cola
{
    // Hacemos la clase pública para que sea accesible fácilmente en Form1
    public class auto 
    {
        private string Placa;
        private string Piso;
        private string Input;
        private string Oupput;
        private string Tarifa;

        public auto(string placa, string piso, string input, string oupput, string tarifa)
        {
            this.Placa = placa;
            this.Piso = piso;
            this.Input = input;
            this.Oupput = oupput;
            this.Tarifa = tarifa;
        }

        // Propiedades de solo lectura simplificadas para mejor práctica
        public string GetPlaca => Placa;
        public string GetPiso => Piso;
        public string GetInput => Input;
        public string GetOupput => Oupput;
        public string GetTarifa => Tarifa;

        // Los Setters no son relevantes para el problema, pero se mantienen con una corrección
        // en SetTarifa que estaba asignando 'Tarifa' a sí mismo.
        public void SetPlaca(string placa) 
        {
            this.Placa = placa;
        }

        public void SetPiso(string piso)
        {
            this.Piso = piso;
        }

        public void SetInput(string input)
        {
            this.Input = input;
        }

        public void SetOupput(string oupput)
        {
            this.Oupput = oupput;
        }

        public void SetTarifa(string tarifa) // Corregido el nombre de la variable de entrada
        {
            this.Tarifa = tarifa;
        }
    }
}