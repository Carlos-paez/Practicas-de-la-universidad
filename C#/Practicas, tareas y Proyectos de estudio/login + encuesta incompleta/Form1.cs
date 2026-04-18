using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        string nombre;
        string contraseña;
        string admin_user = "admin";
        string admin_pass = "24680";
        public Form1()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            nombre = name.Text;
            contraseña = pass.Text;

            if (nombre == admin_user && contraseña == admin_pass && catcha.Checked == true) 
            {
                encuesta encuesta = new encuesta();
                encuesta.Show();
            }
        }
    }
}
