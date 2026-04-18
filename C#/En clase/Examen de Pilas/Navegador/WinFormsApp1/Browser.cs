using Microsoft.VisualBasic.ApplicationServices;
using System.Security.Policy;
using static System.Windows.Forms.VisualStyles.VisualStyleElement.ListView;

namespace WinFormsApp1;

public partial class Form1 : Form
{
    MyPila pila = new MyPila();
    public Form1()
    {
        InitializeComponent();
    }

    private void button1_Click(object sender, EventArgs e)
    {
        try
        {
            string dato = link.Text;

            if (string.IsNullOrEmpty(dato))
            {
                MessageBox.Show("Ingrese una url valida", "Invalido", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }

            if (pila.push(dato))
            {

                Actualizar();
                history();

                MessageBox.Show($"La Url '{dato}' se esta buscan", "Navegando", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
            }


        }
        catch (Exception ex)
        {
            MessageBox.Show($"Eror: {ex.Message}");
        }
    }

    //actualizar
    public void Actualizar()
    {
        try
        {
            string url = pila.peek();

            Enlace.Items.Clear();
            Enlace.Items.Add(url);

        }
        catch (Exception ex)
        {
            MessageBox.Show($"Error: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
        }
    }

    //Historial
    public void history()
    {
        try
        {
            Historial.Items.Clear();

            foreach (var item in pila.optener_items())
            {
                Historial.Items.Add(item);
            }
        }
        catch (Exception ex)
        {
            MessageBox.Show($"Error: {ex.Message}", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
        }
    }
}