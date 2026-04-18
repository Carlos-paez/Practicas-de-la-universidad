using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Diagnostics.CodeAnalysis;
using System.Drawing;
using System.Linq;
using System.Runtime.InteropServices.ComTypes;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace examen_de_windows_forms
{ 
    public partial class Form2 : Form
    {
        int numero_1;
        int numero_2;
        int numero_3;
        int numero_4;
        int numero_5;

       

        List<int> numberlist = new List<int>();

        public Form2()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            numero_1 = int.Parse(num1.Text);
            numero_2 = int.Parse(num2.Text);
            numero_3 = int.Parse(num3.Text);
            numero_4 = int.Parse(num4.Text);
            numero_5 = int.Parse(num5.Text);

            numberlist.Add(numero_1);
            numberlist.Add(numero_2);
            numberlist.Add(numero_3);
            numberlist.Add(numero_4);
            numberlist.Add(numero_5);

            int suma = numero_1 + numero_2 + numero_3 + numero_4 + numero_5;

            int promedio = suma / 5;

            int mayor = numberlist.Max();

            string resultado_de_suma = suma.ToString();
            string resultado_de_promedio = promedio.ToString();
            string resultado_de_mayor = mayor.ToString();


            MessageBox.Show(resultado_de_suma, "Suma");
            MessageBox.Show(resultado_de_promedio, "promedio");
            MessageBox.Show(resultado_de_mayor, "mayor");

        }



        private void button2_Click(object sender, EventArgs e)
        {
            numero_1 = int.Parse(num6.Text);
            numero_2 = int.Parse(num7.Text);
            numero_3 = int.Parse(num8.Text);
            numero_4 = int.Parse(num9.Text);
            numero_5 = int.Parse(num10.Text);

            int multiplicacion = numero_1 * numero_2 * numero_3 * numero_4 * numero_5;

            int resta = numero_1 - numero_2 - numero_3 - numero_4 - numero_5;

            string resultado_multiplicacion = multiplicacion.ToString();
            string resultado_resta = resta.ToString();

            MessageBox.Show(resultado_multiplicacion, "multiplicacion");
            MessageBox.Show(resultado_resta, "resta");

        }
    }
}
