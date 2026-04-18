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
using System.Drawing;
using System.Windows.Forms;

namespace pilaformulario
{
	/// <summary>
	/// Description of MainForm.
	/// </summary>
	public partial class MainForm : Form
	{
		public MainForm()
		{		
			InitializeComponent();
					

		}
		Pila miPila = new Pila();
		void Button1Click(object sender, EventArgs e)
		{
			
        if (!string.IsNullOrWhiteSpace(textBox1.Text))
        {
        miPila.Push(textBox1.Text);
        ActualizarLista();
        label1.Text = "Elemento agregado.";
        textBox1.Clear();
        } 
        
        else {
         label1.Text = "Ingrese un dato válido.";
            }
        }
	void ActualizarLista()
     {
      listBox1.Items.Clear();
     foreach (var item in miPila.ObtenerElementos()) 
      {
        listBox1.Items.Add(item);
      }
    }
		
		void Button2Click(object sender, EventArgs e)
		{
		if (!miPila.EstaVacia()) 
		{
        string eliminado = miPila.Pop();
        ActualizarLista();
        label1.Text = "Elemento eliminado: " + eliminado;
    } else {
        label1.Text = "La pila está vacía.";
    }
		}
		
		
	}
}

