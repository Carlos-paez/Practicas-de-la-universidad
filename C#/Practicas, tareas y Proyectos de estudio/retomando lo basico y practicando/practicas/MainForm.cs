/*using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;

namespace practicas
{

    public partial class MainForm : Form
    {
        //Declaración de variables
        string Nombre = "";
        string Apellido = "";
        string CI;
        string Genero = "";
        DateTime Fecha = DateTime.Now;
        DateTime FechaNacimiento;
        string Permisos = "";
        string Alias = "";
        string Clave = "";

        //Declaración de el arreglo
        Usuarios[] users = new Usuarios[10];
        Usuarios[] admins = new  Usuarios[3];

        public MainForm()
        {
            InitializeComponent();
        }

        //Boton de "Cerrar"
        private void button2_Click_1(object sender, EventArgs e)
        {
            Application.Exit();
        }
        
        //Boton de "Cerrar"
        private void button3_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        //Boton de enviar Usuarios
        private void button4_Click(object sender, EventArgs e)
        {
            try
            {
                for (int i = 0; i < admins.Length; i++)
                {

                    //Asignación de variables
                    Nombre = adminName.Text;
                    Apellido = admin_apellido.Text;
                    CI = admin_ci.Text;
                    FechaNacimiento = DateTime.Parse(admin_fecha.Text);
                    Permisos = Level.Text;
                    Alias = name_user.Text;
                    Clave = admin_pass.Text;



                    //Condicional para determinar el genero
                    if (admin_hombre.Checked = true)
                    {
                        Genero = "Hombre";
                    }
                    else if (admin_mujer.Checked = true)
                    {
                        Genero = "Mujer";
                    }
                    else
                    {
                        Genero = "Otro";
                    }


                    //Creación del objeto y asignación al arreglo
                    if (Nombre != null && Apellido != null && CI != null && FechaNacimiento != null && Genero != null Alias != null && Clave != null && Level != null)
                    {
                        Usuarios admin = new Usuarios(Nombre, Apellido, CI, Genero, FechaNacimiento, Alias, Clave, Level);
                        admins[i] = admin;
                    }

                    else
                    {
                        MessageBox.Show("Por favor, complete todos los campos.", "Invalido");
                    }

                    //Limpieza de los campos 
                    adminName.Clear();
                    admin_apellido.Clear();
                    admin_ci.Clear();
                    name_user.Clear();
                    admin_pass.Clear();
                }
            }

            catch (ArgumentException fe)
            {
                MessageBox.Show("Argumento Invalido" + fe.Message, "Invalido", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            catch (FormatException es)
            {
                MessageBox.Show("Formato Invalido" + es.Message, "Invalido", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución" + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        //Boton Login
        private void button6_Click(object sender, EventArgs e)
        {

            Form1 login = new Form1(this.users, this.admins);
            login.Show();
        }
    }
}*/




using System;
using System.Collections.Generic;
using System.Drawing;
using System.Windows.Forms;

namespace practicas
{
    public partial class MainForm : Form
    {
        // Declaración de variables
        string Nombre = "";
        string Apellido = "";
        string CI = "";
        string Genero = "";
        DateTime Fecha = DateTime.Now;
        DateTime FechaNacimiento;
        string Permisos = "";
        string Alias = "";
        string Clave = "";

        // Declaración de el arreglo
        Usuarios[] users = new Usuarios[10];
        Usuarios[] admins = new Usuarios[3];

        public MainForm()
        {
            InitializeComponent();
        }

        // Botón de "Cerrar"
        private void button2_Click_1(object sender, EventArgs e)
        {
            Application.Exit();
        }

        // Botón de "Cerrar"
        private void button3_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        // Botón de enviar Usuarios
        private void button4_Click(object sender, EventArgs e)
        {
            try
            {
                for (int i = 0; i < admins.Length; i++)
                {
                    // Asignación de variables
                    Nombre = adminName.Text;
                    Apellido = admin_apellido.Text;
                    CI = admin_ci.Text;
                    FechaNacimiento = DateTime.Parse(admin_fecha.Text);
                    Permisos = Permisos = Level.Text;
                    Alias = name_user.Text;
                    Clave = admin_pass.Text;

                    // Condicional para determinar el género
                    if (admin_hombre.Checked == true)
                    {
                        Genero = "Hombre";
                    }
                    else if (admin_mujer.Checked == true)
                    {
                        Genero = "Mujer";
                    }
                    else
                    {
                        Genero = "Otro";
                    }

                    // Validación de campos (corregida sintaxis y lógica)
                    if (!string.IsNullOrWhiteSpace(Nombre) &&
                        !string.IsNullOrWhiteSpace(Apellido) &&
                        !string.IsNullOrWhiteSpace(CI) &&
                        FechaNacimiento != default(DateTime) && // asegúrate que el campo no esté vacío
                        !string.IsNullOrWhiteSpace(Genero) &&
                        !string.IsNullOrWhiteSpace(Alias) &&
                        !string.IsNullOrWhiteSpace(Clave) &&
                        !string.IsNullOrWhiteSpace(Permisos))
                    {
                        Usuarios admin = new Usuarios(Nombre, Apellido, CI, Genero, FechaNacimiento, Alias, Clave, Permisos);
                        admins[i] = admin;
                    }
                    else
                    {
                        MessageBox.Show("Por favor, complete todos los campos.", "Invalido");
                    }

                    // Limpieza de los campos 
                    adminName.Clear();
                    admin_apellido.Clear();
                    admin_ci.Clear();
                    name_user.Clear();
                    admin_pass.Clear();
                }
            }
            catch (ArgumentException fe)
            {
                MessageBox.Show("Argumento Inválido: " + fe.Message, "Invalido", MessageBoxButtons.OK, MessageBoxIcon.Warning);
            }
            catch (FormatException es)
            {
                MessageBox.Show("Formato Inválido: " + es.Message, "Invalido", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución: " + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        // Botón Login
        private void button6_Click(object sender, EventArgs e)
        {
            Form1 login = new Form1(this.users, this.admins);
            login.Show();
        }

        private void panel2_Paint(object sender, PaintEventArgs e)
        {

        }
    }
}

