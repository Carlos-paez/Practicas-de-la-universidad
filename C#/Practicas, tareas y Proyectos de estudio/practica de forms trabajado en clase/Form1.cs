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
    public partial class Form1 : Form
    {
        string usuario;
        string contraseña;

        string userAdmin = "admin";
        string passAdmin = "admin";


        public Form1()
        {
            InitializeComponent();
        }

        private void button6_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            usuario = name.Text;
            contraseña = password.Text;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (usuario.Contains(userAdmin) && contraseña.Contains(passAdmin))
            {
                MessageBox.Show("Bienvenid@");
            }

            else {
                Form2 view = new Form2(usuario, contraseña);
                view.Show();
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Form3 info = new Form3();
            info.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Form4 opinion = new Form4();
            opinion.Show();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Form5 Config = new Form5();
            Config.Show();
        }
    }
}
