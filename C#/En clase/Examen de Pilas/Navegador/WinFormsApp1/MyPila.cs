using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WinFormsApp1
{
    internal class MyPila
    {
        private List<string> items;

        public MyPila()
        {
            items = new List<string>();
        }

        // Método push
        public bool push(string dato)
        {
            if (items.Contains(dato))
            {
                return false;
            }

            items.Add(dato);
            return true;
        }

        // Método pop
        public string pop()
        {
            if (items.Count == 0)
                return null;

            string ultimo = items[items.Count - 1];
            items.RemoveAt(items.Count - 1);
            return ultimo;
        }

        //Metodo Peek
        public string peek()
        {
            return items.Count > 0 ? items[items.Count - 1] : null;
        }

        //obtener los items
        public List<string> optener_items()
        {
            return new List<string>(items);
        }

        //Mostrar si esta vacio
        public bool vacio()
        {
            return items.Count == 0;
        }
    }
}
