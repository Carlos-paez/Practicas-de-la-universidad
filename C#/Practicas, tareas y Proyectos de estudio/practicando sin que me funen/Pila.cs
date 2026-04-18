using System;
using System.Collections.Generic;

namespace practicando_sin_que_me_funen
{
    public class Pila
    {
        private List<string> items;

        public Pila()
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
    
