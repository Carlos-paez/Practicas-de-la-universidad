using System.Collections.Generic;

namespace Cola;

public class Cola
{
    // CAMBIO CLAVE: Almacenar objetos 'auto' en lugar de solo strings
    private Queue<auto> elementos; 

    public Cola()
    {
        elementos = new Queue<auto>();
    }

    // Aceptar y encolar un objeto 'auto'
    public void Enqueue(auto dato)
    {
        elementos.Enqueue(dato);
    }

    // Devolver el objeto 'auto' de la cabeza de la cola, quitándolo
    public auto Dequeue()
    {
        // Devuelve el objeto o null si la cola está vacía
        return elementos.Count > 0 ? elementos.Dequeue() : null; 
    }

    // Devolver el objeto 'auto' de la cabeza de la cola, sin quitarlo
    public auto Peek()
    {
        // Devuelve el objeto o null si la cola está vacía
        return elementos.Count > 0 ? elementos.Peek() : null; 
    }

    // Devolver una lista de objetos 'auto'
    public List<auto> ObtenerElementos()
    {
        return new List<auto>(elementos);
    }

    public bool EstaVacia()
    {
        return elementos.Count == 0;
    }
    
    // Propiedad auxiliar para el conteo (útil para Form1)
    public int Count => elementos.Count;
}