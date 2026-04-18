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
    public partial class Form6 : Form
    {
        public Form6(DateTime fecha_nacimiento, DateTime fecha_actual)
        {
            InitializeComponent();
<<<<<<< HEAD
            int edad = fecha_actual.Year - fecha_nacimiento.Year;
            fecha.Text = edad.ToString();
=======
            fecha.Text = fecha_nacimiento.ToString();
        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

>>>>>>> 58a23b94f706ac8c7efb5a49ca56b424aaed7ade
        }

        private void button1_Click(object sender, EventArgs e)
        {
<<<<<<< HEAD
            Application.Exit();
=======

        }

        private void fecha_Click(object sender, EventArgs e)
        {
            
>>>>>>> 58a23b94f706ac8c7efb5a49ca56b424aaed7ade
        }
    }
}
