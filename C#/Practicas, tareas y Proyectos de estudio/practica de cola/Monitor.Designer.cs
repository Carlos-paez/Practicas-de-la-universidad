namespace WindowsFormsApp1
{
    partial class Monitor
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
            this.button1 = new System.Windows.Forms.Button();
            this.button2 = new System.Windows.Forms.Button();
            this.fila = new System.Windows.Forms.ListBox();
            this.name = new System.Windows.Forms.TextBox();
            this.location = new System.Windows.Forms.TextBox();
            this.description = new System.Windows.Forms.TextBox();
            this.button3 = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(12, 374);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(90, 44);
            this.button1.TabIndex = 0;
            this.button1.Text = "Nueva solicitud";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(133, 374);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(98, 44);
            this.button2.TabIndex = 1;
            this.button2.Text = "Atender Solicitud";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // fila
            // 
            this.fila.FormattingEnabled = true;
            this.fila.Location = new System.Drawing.Point(391, 76);
            this.fila.Name = "fila";
            this.fila.Size = new System.Drawing.Size(368, 342);
            this.fila.TabIndex = 2;
            // 
            // name
            // 
            this.name.Location = new System.Drawing.Point(46, 55);
            this.name.Name = "name";
            this.name.Size = new System.Drawing.Size(110, 20);
            this.name.TabIndex = 3;
            // 
            // location
            // 
            this.location.Location = new System.Drawing.Point(235, 55);
            this.location.Name = "location";
            this.location.Size = new System.Drawing.Size(110, 20);
            this.location.TabIndex = 4;
            // 
            // description
            // 
            this.description.Location = new System.Drawing.Point(46, 157);
            this.description.Multiline = true;
            this.description.Name = "description";
            this.description.Size = new System.Drawing.Size(299, 143);
            this.description.TabIndex = 5;
            // 
            // button3
            // 
            this.button3.Location = new System.Drawing.Point(266, 374);
            this.button3.Name = "button3";
            this.button3.Size = new System.Drawing.Size(98, 44);
            this.button3.TabIndex = 6;
            this.button3.Text = "cerrar";
            this.button3.UseVisualStyleBackColor = true;
            this.button3.Click += new System.EventHandler(this.button3_Click);
            // 
            // Monitor
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.button3);
            this.Controls.Add(this.description);
            this.Controls.Add(this.location);
            this.Controls.Add(this.name);
            this.Controls.Add(this.fila);
            this.Controls.Add(this.button2);
            this.Controls.Add(this.button1);
            this.Name = "Monitor";
            this.Text = "Form1";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.ListBox fila;
        private System.Windows.Forms.TextBox name;
        private System.Windows.Forms.TextBox location;
        private System.Windows.Forms.TextBox description;
        private System.Windows.Forms.Button button3;
    }
}

