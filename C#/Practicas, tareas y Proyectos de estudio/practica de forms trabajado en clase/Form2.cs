using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace practica_de_forms
{
    public partial class Form2 : Form
    {
        DateTime fecha_nacimiento;
        DateTime fecha_actual = DateTime.Now;

        public Form2(string usuario, string contraseña)
        {
            InitializeComponent();
            ver1.Text = usuario;
            ver2.Text = contraseña;
        }

        private void button6_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            fecha_nacimiento = fechaNacimiento.Value;

            Form6 Creado = new Form6 (fecha_nacimiento, fecha_actual);
            Creado.Show();

        }
    }
}
