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
    public partial class letras : Form
    {
        public letras()
        {
            InitializeComponent();
        }

        char[] arrCh1 = new char[5];
        char[] arrCh2 = new char[5];
        char letraVocal;
        char letraAbc;
        int v = 0;
        int a = 0;

        private void button1_Click(object sender, EventArgs e)
        {
            try
            {

                if (v < arrCh1.Length)
                {
                    letraVocal = char.Parse(vocales.Text);
                    arrCh1[v] = letraVocal;
                    MessageBox.Show("Se ha ingresado la letra: " + arrCh1[v]);
                    v++;
                }
                else
                {
                    MessageBox.Show("El arreglo de vocales está lleno.", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
            catch (FormatException)
            {
                MessageBox.Show("Formato Inválido: Ingrese un solo carácter.", "Inválido", MessageBoxButtons.OK, MessageBoxIcon.Error);
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

                if (a < arrCh2.Length)
                {
                    letraAbc = char.Parse(abc.Text);
                    arrCh2[a] = letraAbc;
                    MessageBox.Show("Se ha ingresado la letra: " + arrCh2[a]);
                    a++;
                }
                else
                {
                    MessageBox.Show("El arreglo del abecedario está lleno.", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
            catch (FormatException)
            {
                MessageBox.Show("Formato Inválido: Ingrese un solo carácter.", "Inválido", MessageBoxButtons.OK, MessageBoxIcon.Error);
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
                string resultadoConcat = "";


                for (int c = 0; c < v; c++)
                {
                    resultadoConcat += arrCh1[c];
                }

                for (int c = 0; c < a; c++)
                {
                    resultadoConcat += arrCh2[c];
                }

                MessageBox.Show("Concatenación de ambos arreglos: " + resultadoConcat, "Concatenación");
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
                string cadenaConcatenada = "";

                for (int c = 0; c < v; c++)
                {
                    cadenaConcatenada += arrCh1[c];
                }
                for (int c = 0; c < a; c++)
                {
                    cadenaConcatenada += arrCh2[c];
                }


                MessageBox.Show("La cadena obtenida es: " + cadenaConcatenada, "Cadena concatenada");
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución: " + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void button5_Click(object sender, EventArgs e)
        {
            try
            {
                // Obtener la cadena de las 5 vocales
                string vocalesCadena = "";
                for (int c = 0; c < arrCh1.Length; c++)
                {
                    vocalesCadena += arrCh1[c];
                }

                // Obtener la cadena de las 5 primeras letras
                string primerasLetrasCadena = "";
                for (int c = 0; c < arrCh2.Length; c++)
                {
                    primerasLetrasCadena += arrCh2[c];
                }

                // Mostrar ambas cadenas en pantalla
                MessageBox.Show("Las 5 vocales son: " + vocalesCadena +
                    "\nLas 5 primeras letras son: " + primerasLetrasCadena,
                    "Cadenas de Vocales y Letras");
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución: " + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }

        }

        private void button6_Click(object sender, EventArgs e)
        {
            try
            {
                string textoIntercalado = "";
                int longitud = Math.Min(arrCh1.Length, arrCh2.Length);

                // Intercalar los valores de ambos arreglos
                for (int c = 0; c < longitud; c++)
                {
                    textoIntercalado += arrCh1[c].ToString() + arrCh2[c].ToString();
                }

                MessageBox.Show("Texto intercalado: " + textoIntercalado, "Intercalado");
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error de ejecución: " + ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }

        }
    }
}
