namespace WinFormsApp1
{
    public partial class Principal : Form
    {
        public Principal()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Numeros num = new Numeros();
            num.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            letras let = new letras();
            let.Show();
        }
    }
}
