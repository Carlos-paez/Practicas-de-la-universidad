using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace editor_de_texto
{
    public partial class Form1 : Form
    {
        Pila MyPila = new Pila();
        public Form1()
        {
            InitializeComponent();
        }

        private void Guardar_Click(object sender, EventArgs e)
        {
            string tex = texto.Text;

            if (MyPila.push(tex))
            {
                MessageBox.Show("Cambios Guardados");
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string cambio = MyPila.peek();

            texto.Clear();
            texto.Text = cambio.ToString();
        }

        private void ver_Click(object sender, EventArgs e)
        {
            string cuantos = MyPila.numero().ToString();

            MessageBox.Show($"Numero de cambios guardados: {cuantos}");
        }
    }
}
