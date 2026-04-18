using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinFormsApp1
{
    public partial class Numeros : Form
    {
        public Numeros()
        {
            InitializeComponent();
        }

        int numCre = 0;
        int numDec = 0;
        int[] arrDig1 = new int[10];
        int[] arrDig2 = new int[10];
        private int i = 0;
        private int d = 0;

        private void button1_Click(object sender, EventArgs e)
        {
            try
            {
                if (i < arrDig1.Length)
                {
                    numCre = int.Parse(creciente.Text);
                    arrDig1[i] = numCre;
                    MessageBox.Show("Se ha ingresado el número: " + arrDig1[i]);
                    i++;
                }
                else
                {
                    MessageBox.Show("El arreglo de números crecientes está lleno.", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
            catch (FormatException)
            {
                MessageBox.Show("Formato Inválido: Ingrese un número entero.", "Inválido", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución: " + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            try
            {
                if (d < arrDig2.Length)
                {
                    numDec = int.Parse(decreciente.Text);
                    arrDig2[d] = numDec;
                    MessageBox.Show("Se ha ingresado el número: " + arrDig2[d]);
                    d++;
                }
                else
                {
                    MessageBox.Show("El arreglo de números decrecientes está lleno.", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
            catch (FormatException)
            {
                MessageBox.Show("Formato Inválido: Ingrese un número entero.", "Inválido", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución: " + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            try
            {
                string resultadoSuma = "Resultados de la suma:\n";
                int limite = Math.Min(i, d);
                if (limite == 0)
                {
                    MessageBox.Show("No hay suficientes datos en ambos arreglos para realizar la suma.", "Advertencia", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                    return;
                }

                for (int c = 0; c < limite; c++)
                {
                    int suma = arrDig1[c] + arrDig2[c];
                    resultadoSuma += $"Suma de índice {c} ({arrDig1[c]} + {arrDig2[c]}): {suma}\n";
                }
                MessageBox.Show(resultadoSuma, "Suma de Arreglos");
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución: " + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            try
            {
                int sumaTotal = 0;
                // Sumar todos los elementos del primer array
                for (int c = 0; c < i; c++)
                {
                    sumaTotal += arrDig1[c];
                }
                // Sumar todos los elementos del segundo array
                for (int c = 0; c < d; c++)
                {
                    sumaTotal += arrDig2[c];
                }

                string resultadoSuma = $"La suma de todos los elementos en ambos arreglos es: {sumaTotal}";
                MessageBox.Show(resultadoSuma, "Suma Total de Arreglos");
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución: " + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }

        }
    }
}
