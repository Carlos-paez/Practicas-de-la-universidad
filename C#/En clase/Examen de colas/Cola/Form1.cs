using System.Windows.Forms;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;

namespace Cola;

public partial class Form1 : Form
{
    public Form1()
    {
        InitializeComponent();
    }

    // La cola ahora maneja objetos 'auto' por las correcciones en Cola.cs
    Cola miCola = new Cola(); 
    
    void ActualizarLista()
    {
        esperando.Items.Clear();
        // El foreach ahora itera sobre objetos 'auto'
        foreach (var carro in miCola.ObtenerElementos()) 
        {
            // Muestra solo la placa en el ListBox
            esperando.Items.Add(carro.GetPlaca); 
        }
    }

    // MÉTODO SOLUCIÓN: Muestra todos los atributos del primer objeto en la cola
    private void button3_Click_1(object sender, EventArgs e)
    {
        // 1. Usa Peek() para obtener el objeto 'auto' sin eliminarlo
        auto carroEnCola = miCola.Peek(); 

        if (carroEnCola != null)
        {
            // 2. Construye el mensaje con todos los atributos
            string mensaje = $"Detalles del Próximo Vehículo:\n" +
                             $"Placas: {carroEnCola.GetPlaca}\n" +
                             $"Ubicación/Piso: {carroEnCola.GetPiso}\n" +
                             $"Hora de Entrada: {carroEnCola.GetInput}\n" +
                             $"Hora de Salida: {carroEnCola.GetOupput}\n" +
                             $"Tarifa: {carroEnCola.GetTarifa}";
                             
            // 3. Muestra el mensaje
            MessageBox.Show(mensaje, "Próximo en la Fila (Detalles)", MessageBoxButtons.OK, MessageBoxIcon.Information);
        }
        else
        {
            MessageBox.Show("La cola de vehículos está vacía. No hay detalles para mostrar.", "Cola Vacía", MessageBoxButtons.OK, MessageBoxIcon.Warning);
        }
    }

    private void button1_Click_1(object sender, EventArgs e)
    {
        string placas = placa.Text;
        string ubicacion = piso.Text;
        string Entrada = intro.Text;
        string salida = exit.Text;
        string pago = totalpago.Text;

        auto carro = new auto(placas, ubicacion, Entrada, salida, pago);

        // CORRECCIÓN: Encola el objeto 'carro' completo, no solo la placa
        miCola.Enqueue(carro); 

        ActualizarLista();
        // Opcional: Limpiar los TextBoxes después de encolar
        placa.Clear();
        piso.Clear();
        intro.Clear();
        exit.Clear();
        totalpago.Clear();
        placa.Focus();
    }

    private void button2_Click_1(object sender, EventArgs e)
    {
        // Usa Peek() para obtener el objeto 'auto' antes de eliminarlo
        auto carroSalida = miCola.Peek(); 

        if (carroSalida != null)
        {
            MessageBox.Show($"Salió el vehículo con placa: {carroSalida.GetPlaca}", "Salida de Vehículo", MessageBoxButtons.OK, MessageBoxIcon.Information);

            // Ahora sí elimina el elemento de la cola
            miCola.Dequeue();
        }
        else
        {
            MessageBox.Show("La cola de vehículos está vacía.", "Cola Vacía", MessageBoxButtons.OK, MessageBoxIcon.Warning);
        }

        ActualizarLista();
    }

    private void button4_Click(object sender, EventArgs e)
    {
        Application.Exit();
    }
}