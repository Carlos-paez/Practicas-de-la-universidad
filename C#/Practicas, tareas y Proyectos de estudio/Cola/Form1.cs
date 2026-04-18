using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Collections;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {

        Queue fila = new Queue();
        int i = 0;

        public Form1()
        {
            InitializeComponent();
        }

        private void Enviar_Click(object sender, EventArgs e)
        {
            string usuario = nombre.Text;

            fila.Enqueue(usuario);

            actualizar();
            nombre.Clear();
            nombre.Focus();

            i++;
        }

        public void actualizar()
        {
            encola.Items.Clear();
            
            foreach (var item in fila)
            {
                encola.Items.Add(item);
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Se atendera a: " + fila.Dequeue());

            actualizar();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Se atendieron: " + fila.Count);
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Se Atendieron: " + i + " Personas");
        }

        private void button5_Click(object sender, EventArgs e)
        {
            fila.Clear();
            actualizar();
            MessageBox.Show("Se a cerrado la Fila por completo");
        }
    }
}
