namespace WinFormsApp1
{
    partial class letras
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
            button4 = new Button();
            button3 = new Button();
            label2 = new Label();
            button2 = new Button();
            abc = new TextBox();
            label1 = new Label();
            button1 = new Button();
            vocales = new TextBox();
            button5 = new Button();
            button6 = new Button();
            SuspendLayout();
            // 
            // button4
            // 
            button4.Location = new Point(241, 336);
            button4.Name = "button4";
            button4.Size = new Size(128, 38);
            button4.TabIndex = 15;
            button4.Text = "cadena de caracteres de e";
            button4.UseVisualStyleBackColor = true;
            button4.Click += button4_Click;
            // 
            // button3
            // 
            button3.Location = new Point(241, 274);
            button3.Name = "button3";
            button3.Size = new Size(128, 38);
            button3.TabIndex = 14;
            button3.Text = "Concatenar valores";
            button3.UseVisualStyleBackColor = true;
            button3.Click += button3_Click;
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(466, 87);
            label2.Name = "label2";
            label2.Size = new Size(298, 15);
            label2.TabIndex = 13;
            label2.Text = "Ingrese una por una las primeras 5 letras del abecedario";
            // 
            // button2
            // 
            button2.Location = new Point(554, 156);
            button2.Name = "button2";
            button2.Size = new Size(124, 37);
            button2.TabIndex = 12;
            button2.Text = "Ingresar";
            button2.UseVisualStyleBackColor = true;
            button2.Click += button2_Click;
            // 
            // abc
            // 
            abc.Location = new Point(547, 123);
            abc.Name = "abc";
            abc.Size = new Size(143, 23);
            abc.TabIndex = 11;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(40, 87);
            label1.Name = "label1";
            label1.Size = new Size(174, 15);
            label1.TabIndex = 10;
            label1.Text = "Ingrese una por una las vocales ";
            // 
            // button1
            // 
            button1.Location = new Point(63, 156);
            button1.Name = "button1";
            button1.Size = new Size(124, 37);
            button1.TabIndex = 9;
            button1.Text = "Ingresar";
            button1.UseVisualStyleBackColor = true;
            button1.Click += button1_Click;
            // 
            // vocales
            // 
            vocales.Location = new Point(56, 123);
            vocales.Name = "vocales";
            vocales.Size = new Size(143, 23);
            vocales.TabIndex = 8;
            // 
            // button5
            // 
            button5.Location = new Point(408, 274);
            button5.Name = "button5";
            button5.Size = new Size(128, 38);
            button5.TabIndex = 16;
            button5.Text = "Mostrar en pantalla";
            button5.UseVisualStyleBackColor = true;
            button5.Click += button5_Click;
            // 
            // button6
            // 
            button6.Location = new Point(408, 336);
            button6.Name = "button6";
            button6.Size = new Size(128, 38);
            button6.TabIndex = 17;
            button6.Text = "Intercalar";
            button6.UseVisualStyleBackColor = true;
            button6.Click += button6_Click;
            // 
            // letras
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(button6);
            Controls.Add(button5);
            Controls.Add(button4);
            Controls.Add(button3);
            Controls.Add(label2);
            Controls.Add(button2);
            Controls.Add(abc);
            Controls.Add(label1);
            Controls.Add(button1);
            Controls.Add(vocales);
            Name = "letras";
            Text = "Form2";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button button4;
        private Button button3;
        private Label label2;
        private Button button2;
        private TextBox abc;
        private Label label1;
        private Button button1;
        private TextBox vocales;
        private Button button5;
        private Button button6;
    }
}