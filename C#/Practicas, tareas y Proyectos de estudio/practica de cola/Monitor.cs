using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Xml.Linq;

namespace WindowsFormsApp1
{
    public partial class Monitor : Form
    {
        public Monitor()
        {
            InitializeComponent();
        }

        Queue<string> esperar = new Queue<string>();

        private void button1_Click(object sender, EventArgs e)
        {
            string nombre = name.Text;
            string ubicacion = location.Text;
            string descripcion = description.Text;

            user nuevoUsuario = new user(nombre, ubicacion, descripcion);

            esperar.Enqueue(nuevoUsuario.GetName);

            name.Clear();
            location.Clear();
            description.Clear();

            actualizar();
        }

        public void actualizar()
        {
            fila.Items.Clear();
            fila.Items.AddRange(esperar.ToArray());
        }

        private void button2_Click(object sender, EventArgs e)
        {
            MessageBox.Show($"Atendiendo a: {esperar.Peek()}");
            esperar.Dequeue();
            actualizar();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            esperar.Clear();
            actualizar();
            Application.Exit();
        }
    }
}
