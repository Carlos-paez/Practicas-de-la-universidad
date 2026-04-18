/*
 * Creado por SharpDevelop.
 * Usuario: Personal
 * Fecha: 26/9/2025
 * Hora: 8:18 p. m.
 * 
 * Para cambiar esta plantilla use Herramientas | Opciones | Codificación | Editar Encabezados Estándar
 */
using System;
using System.Collections.Generic;
namespace pilaformulario
{
	public class Pila
{
    private List<string> elementos;

    public Pila()
    {
        elementos = new List<string>();
    }

    public void Push(string dato)
    {
        elementos.Add(dato);
    }

    public string Pop()
    {
        if (elementos.Count == 0)
            return null;

        string ultimo = elementos[elementos.Count - 1];
        elementos.RemoveAt(elementos.Count - 1);
        return ultimo;
    }

    public string Peek()
    {
        return elementos.Count > 0 ? elementos[elementos.Count - 1] : null;
    }

    public List<string> ObtenerElementos()
    {
        return new List<string>(elementos);
    }

    public bool EstaVacia()
    {
        return elementos.Count == 0;
    }
}
	
}
