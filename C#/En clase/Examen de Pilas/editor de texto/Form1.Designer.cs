namespace editor_de_texto
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
            this.texto = new System.Windows.Forms.TextBox();
            this.Guardar = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            this.ver = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // texto
            // 
            this.texto.Location = new System.Drawing.Point(12, 12);
            this.texto.Multiline = true;
            this.texto.Name = "texto";
            this.texto.Size = new System.Drawing.Size(776, 345);
            this.texto.TabIndex = 0;
            // 
            // Guardar
            // 
            this.Guardar.Location = new System.Drawing.Point(5, 395);
            this.Guardar.Name = "Guardar";
            this.Guardar.Size = new System.Drawing.Size(99, 46);
            this.Guardar.TabIndex = 1;
            this.Guardar.Text = "Guardar";
            this.Guardar.UseVisualStyleBackColor = true;
            this.Guardar.Click += new System.EventHandler(this.Guardar_Click);
            // 
            // button1
            // 
            this.button1.Cursor = System.Windows.Forms.Cursors.Arrow;
            this.button1.Location = new System.Drawing.Point(143, 395);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(106, 43);
            this.button1.TabIndex = 2;
            this.button1.Text = "Deshacer cambios";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // ver
            // 
            this.ver.Location = new System.Drawing.Point(299, 395);
            this.ver.Name = "ver";
            this.ver.Size = new System.Drawing.Size(100, 43);
            this.ver.TabIndex = 3;
            this.ver.Text = "Ver cambios guardados";
            this.ver.UseVisualStyleBackColor = true;
            this.ver.Click += new System.EventHandler(this.ver_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.ver);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.Guardar);
            this.Controls.Add(this.texto);
            this.Name = "Form1";
            this.Text = "Form1";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.TextBox texto;
        private System.Windows.Forms.Button Guardar;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button ver;
    }
}

