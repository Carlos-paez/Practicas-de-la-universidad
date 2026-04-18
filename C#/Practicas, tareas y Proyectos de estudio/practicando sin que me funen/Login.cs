using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace practicando_sin_que_me_funen
{
    public partial class Login : Form
    {
        private Pila mypila = new Pila();

        public Login()
        {
            InitializeComponent();
        }

        //Cerrar
        private void button2_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        //Enviar
        private void button1_Click(object sender, EventArgs e)
        {
            try
            {
                string name = email.Text.Trim();
                string clave = pass.Text.Trim();
                string nivel = "";

                if (admin.Checked == true)
                {
                    nivel = "Administrador";
                }

                if (estand.Checked == true)
                {
                    nivel = "Estandar";
                }


                Users user = new Users(name, clave, nivel);


                if (human.Checked == true)
                {
                    if (string.IsNullOrEmpty(user.GetNombre()))
                    {
                        MessageBox.Show("Ingrese un dato valido", "Invalido", MessageBoxButtons.OK, MessageBoxIcon.Error);
                        return;
                    }

                    if (mypila.push(user.GetNombre()))
                    {

                        Actualizar();

                        email.Clear();
                        email.Focus();

                        pass.Clear();
                        pass.Focus();

                        MessageBox.Show($"El Usuario '{user.GetNombre()}' fue creado con exito", "Creado", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
                    }
                }

                else
                {
                    MessageBox.Show("Por favor confirme que no es un robot", "Invalido", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }

            catch (Exception ex)
            {
                MessageBox.Show($"Error: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        // Actualizar Lista
        public void Actualizar()
        {
            try
            {
                allusers.Items.Clear();

                foreach (var item in mypila.optener_items())
                {
                    allusers.Items.Add(item);
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show($"Error: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        //Ver ultimo
        private void button3_Click(object sender, EventArgs e)
        {
            try
            {
                string ultimo = mypila.peek();

                if (ultimo != null)
                {
                    MessageBox.Show($"El Ultimo Usuario Creado fue: {ultimo}", "Ultimo Usuario", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }

                else
                {
                    MessageBox.Show("No se a creado ningún usuario", "Vacio", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }

            catch (Exception ex)
            {
                MessageBox.Show($"Error: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        //Eliminar Ultimo
        private void button4_Click(object sender, EventArgs e)
        {
            try{
                if (!mypila.vacio())
                {
                    string eliminado = mypila.pop();
                    Actualizar();

                    MessageBox.Show($"Se a Eliminado el Usuario: {eliminado}", "Eliminado", MessageBoxButtons.OK, MessageBoxIcon.Question);
                }

                else
                {
                    MessageBox.Show("No se a creado ningún usuario", "Vacio", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }

            catch (Exception ex)
            {
                MessageBox.Show($"Error: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}
