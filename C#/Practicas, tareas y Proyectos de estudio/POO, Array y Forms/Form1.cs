using System;
using System.Collections.Generic;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        // Se utiliza List<User> para una gestión más dinámica de los usuarios.
        private List<User> users = new List<User>();
        private const int MaxUsers = 3; // Define una constante para el número máximo de usuarios.

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Validar que no se exceda el límite de usuarios.
            if (users.Count >= MaxUsers)
            {
                MessageBox.Show("No se pueden agregar más usuarios, el array está lleno.");
                return;
            }

            // Validar que los campos de texto no estén vacíos.
            if (string.IsNullOrWhiteSpace(Nombre.Text) || string.IsNullOrWhiteSpace(Apellido.Text) || string.IsNullOrWhiteSpace(Año.Text))
            {
                MessageBox.Show("Por favor, complete todos los campos.", "Error de validación", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }

            // Validar que la edad sea un número válido.
            if (!int.TryParse(Año.Text, out int edad))
            {
                MessageBox.Show("Por favor, ingrese un número válido para la edad.", "Error de validación", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }

            // Crear y agregar el nuevo usuario a la lista.
            users.Add(new User(Nombre.Text, Apellido.Text, edad));

            MessageBox.Show($"Usuario '{Nombre.Text} {Apellido.Text}' agregado correctamente.");

            // Limpiar los campos después de agregar el usuario.
            Nombre.Clear();
            Apellido.Clear();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (users.Count == 0)
            {
                MessageBox.Show("No hay usuarios para mostrar.");
                return;
            }

            // Recorre y muestra la información de cada usuario.
            foreach (User user in users)
            {
                MessageBox.Show(user.ToString(), "Información del usuario", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
        }
    }
}
