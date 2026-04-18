
namespace WindowsFormsApp1
{
    partial class Form1
    {
        /// <summary>
        /// Variable del diseñador necesaria.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén usando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido de este método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.panel1 = new System.Windows.Forms.Panel();
            this.ver = new System.Windows.Forms.Label();
            this.mostrar = new System.Windows.Forms.Label();
            this.button3 = new System.Windows.Forms.Button();
            this.button2 = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            this.lastname = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.nombre = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.dateTimePicker1 = new System.Windows.Forms.DateTimePicker();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.SystemColors.ControlDarkDark;
            this.panel1.Controls.Add(this.ver);
            this.panel1.Controls.Add(this.mostrar);
            this.panel1.Controls.Add(this.button3);
            this.panel1.Controls.Add(this.button2);
            this.panel1.Controls.Add(this.button1);
            this.panel1.Controls.Add(this.lastname);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.nombre);
            this.panel1.Controls.Add(this.label1);
            this.panel1.Location = new System.Drawing.Point(29, 20);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(572, 240);
            this.panel1.TabIndex = 0;
            this.panel1.Paint += new System.Windows.Forms.PaintEventHandler(this.panel1_Paint);
            // 
            // ver
            // 
            this.ver.AutoSize = true;
            this.ver.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.ver.Location = new System.Drawing.Point(256, 120);
            this.ver.Name = "ver";
            this.ver.Size = new System.Drawing.Size(10, 13);
            this.ver.TabIndex = 8;
            this.ver.Text = ".";
            // 
            // mostrar
            // 
            this.mostrar.AutoSize = true;
            this.mostrar.Location = new System.Drawing.Point(240, 132);
            this.mostrar.Name = "mostrar";
            this.mostrar.Size = new System.Drawing.Size(0, 13);
            this.mostrar.TabIndex = 7;
            // 
            // button3
            // 
            this.button3.Location = new System.Drawing.Point(441, 205);
            this.button3.Name = "button3";
            this.button3.Size = new System.Drawing.Size(75, 23);
            this.button3.TabIndex = 6;
            this.button3.Text = "Enviar";
            this.button3.UseVisualStyleBackColor = true;
            this.button3.Click += new System.EventHandler(this.button3_Click);
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(243, 205);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(81, 20);
            this.button2.TabIndex = 5;
            this.button2.Text = "Mostrar";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(20, 202);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(75, 23);
            this.button1.TabIndex = 4;
            this.button1.Text = "Cerrar";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // lastname
            // 
            this.lastname.Location = new System.Drawing.Point(311, 64);
            this.lastname.Name = "lastname";
            this.lastname.Size = new System.Drawing.Size(231, 20);
            this.lastname.TabIndex = 3;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.label2.Location = new System.Drawing.Point(306, 22);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(220, 29);
            this.label2.TabIndex = 2;
            this.label2.Text = "Ingrese su Apellido";
            // 
            // nombre
            // 
            this.nombre.Location = new System.Drawing.Point(20, 64);
            this.nombre.Name = "nombre";
            this.nombre.Size = new System.Drawing.Size(217, 20);
            this.nombre.TabIndex = 1;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.SystemColors.ControlDarkDark;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.SystemColors.ControlLightLight;
            this.label1.Location = new System.Drawing.Point(18, 18);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(219, 29);
            this.label1.TabIndex = 0;
            this.label1.Text = "Ingrese su Nombre";
            // 
            // dateTimePicker1
            // 
            this.dateTimePicker1.Location = new System.Drawing.Point(233, -6);
            this.dateTimePicker1.Name = "dateTimePicker1";
            this.dateTimePicker1.Size = new System.Drawing.Size(98, 20);
            this.dateTimePicker1.TabIndex = 9;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ActiveCaption;
            this.ClientSize = new System.Drawing.Size(630, 285);
            this.Controls.Add(this.dateTimePicker1);
            this.Controls.Add(this.panel1);
            this.Name = "Form1";
            this.Text = "Mi Aplicación";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.TextBox lastname;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox nombre;
        private System.Windows.Forms.Button button3;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.Label mostrar;
        private System.Windows.Forms.Label ver;
        private System.Windows.Forms.DateTimePicker dateTimePicker1;
    }
}

