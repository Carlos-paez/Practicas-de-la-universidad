using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace examen_de_windows_forms
{
    public partial class Form1 : Form
    {

        string user_name = "carlos";
        string user_pass = "2468";

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
            string user = name.Text;
            string clave = pass.Text;

            if (user == user_name && clave == user_pass && catcha.Checked == true)
            {
                Form2 form2 = new Form2();
                form2.Show();
            }

            else
            {
                MessageBox.Show("La informacion que suministro es incorrecta o esta incompleta", "Login Fallido", MessageBoxButtons.RetryCancel, MessageBoxIcon.Exclamation);
            }

        }
    }
}
