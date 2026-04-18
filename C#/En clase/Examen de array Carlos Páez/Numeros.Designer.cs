namespace WinFormsApp1
{
    partial class Numeros
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            creciente = new TextBox();
            button1 = new Button();
            label1 = new Label();
            label2 = new Label();
            button2 = new Button();
            decreciente = new TextBox();
            button3 = new Button();
            button4 = new Button();
            SuspendLayout();
            // 
            // creciente
            // 
            creciente.Location = new Point(67, 69);
            creciente.Name = "creciente";
            creciente.Size = new Size(143, 23);
            creciente.TabIndex = 0;
            // 
            // button1
            // 
            button1.Location = new Point(74, 102);
            button1.Name = "button1";
            button1.Size = new Size(124, 37);
            button1.TabIndex = 1;
            button1.Text = "Ingresar";
            button1.UseVisualStyleBackColor = true;
            button1.Click += button1_Click;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(34, 33);
            label1.Name = "label1";
            label1.Size = new Size(332, 15);
            label1.TabIndex = 2;
            label1.Text = "Ingrese uno por uno los numeros del 0 al 9 en orden creciente";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(443, 33);
            label2.Name = "label2";
            label2.Size = new Size(345, 15);
            label2.TabIndex = 5;
            label2.Text = "Ingrese uno por uno los numeros del 9 al 0 en orden decreciente";
            // 
            // button2
            // 
            button2.Location = new Point(565, 102);
            button2.Name = "button2";
            button2.Size = new Size(124, 37);
            button2.TabIndex = 4;
            button2.Text = "Ingresar";
            button2.UseVisualStyleBackColor = true;
            button2.Click += button2_Click;
            // 
            // decreciente
            // 
            decreciente.Location = new Point(558, 69);
            decreciente.Name = "decreciente";
            decreciente.Size = new Size(143, 23);
            decreciente.TabIndex = 3;
            // 
            // button3
            // 
            button3.Location = new Point(322, 210);
            button3.Name = "button3";
            button3.Size = new Size(128, 38);
            button3.TabIndex = 6;
            button3.Text = "Sumar uno por uno";
            button3.UseVisualStyleBackColor = true;
            button3.Click += button3_Click;
            // 
            // button4
            // 
            button4.Location = new Point(322, 272);
            button4.Name = "button4";
            button4.Size = new Size(128, 38);
            button4.TabIndex = 7;
            button4.Text = "Sumar todos";
            button4.UseVisualStyleBackColor = true;
            button4.Click += button4_Click;
            // 
            // Numeros
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(button4);
            Controls.Add(button3);
            Controls.Add(label2);
            Controls.Add(button2);
            Controls.Add(decreciente);
            Controls.Add(label1);
            Controls.Add(button1);
            Controls.Add(creciente);
            Name = "Numeros";
            Text = "Form2";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox creciente;
        private Button button1;
        private Label label1;
        private Label label2;
        private Button button2;
        private TextBox decreciente;
        private Button button3;
        private Button button4;
    }
}