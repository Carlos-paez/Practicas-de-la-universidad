namespace practicando_sin_que_me_funen
{
    partial class Login
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Login));
            this.panel2 = new System.Windows.Forms.Panel();
            this.panel1 = new System.Windows.Forms.Panel();
            this.estand = new System.Windows.Forms.RadioButton();
            this.admin = new System.Windows.Forms.RadioButton();
            this.label3 = new System.Windows.Forms.Label();
            this.human = new System.Windows.Forms.CheckBox();
            this.label2 = new System.Windows.Forms.Label();
            this.pass = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.email = new System.Windows.Forms.TextBox();
            this.button1 = new System.Windows.Forms.Button();
            this.button2 = new System.Windows.Forms.Button();
            this.panel3 = new System.Windows.Forms.Panel();
            this.allusers = new System.Windows.Forms.ListBox();
            this.button3 = new System.Windows.Forms.Button();
            this.button4 = new System.Windows.Forms.Button();
            this.panel1.SuspendLayout();
            this.panel3.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel2
            // 
            this.panel2.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("panel2.BackgroundImage")));
            this.panel2.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.panel2.Location = new System.Drawing.Point(9, 14);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(97, 98);
            this.panel2.TabIndex = 1;
            // 
            // panel1
            // 
            this.panel1.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("panel1.BackgroundImage")));
            this.panel1.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.panel1.Controls.Add(this.estand);
            this.panel1.Controls.Add(this.admin);
            this.panel1.Controls.Add(this.label3);
            this.panel1.Controls.Add(this.human);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.pass);
            this.panel1.Controls.Add(this.label1);
            this.panel1.Controls.Add(this.email);
            this.panel1.Location = new System.Drawing.Point(119, 12);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(345, 482);
            this.panel1.TabIndex = 3;
            // 
            // estand
            // 
            this.estand.AutoSize = true;
            this.estand.BackColor = System.Drawing.Color.Indigo;
            this.estand.Font = new System.Drawing.Font("Times New Roman", 9.75F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.estand.ForeColor = System.Drawing.Color.White;
            this.estand.Location = new System.Drawing.Point(118, 327);
            this.estand.Name = "estand";
            this.estand.Size = new System.Drawing.Size(75, 19);
            this.estand.TabIndex = 9;
            this.estand.TabStop = true;
            this.estand.Text = "Estandar";
            this.estand.UseVisualStyleBackColor = false;
            // 
            // admin
            // 
            this.admin.AutoSize = true;
            this.admin.BackColor = System.Drawing.Color.Indigo;
            this.admin.Font = new System.Drawing.Font("Times New Roman", 9.75F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.admin.ForeColor = System.Drawing.Color.White;
            this.admin.Location = new System.Drawing.Point(114, 290);
            this.admin.Name = "admin";
            this.admin.Size = new System.Drawing.Size(104, 19);
            this.admin.TabIndex = 8;
            this.admin.TabStop = true;
            this.admin.Text = "Administrador";
            this.admin.UseVisualStyleBackColor = false;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.BackColor = System.Drawing.Color.Indigo;
            this.label3.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.ForeColor = System.Drawing.Color.White;
            this.label3.Location = new System.Drawing.Point(106, 249);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(112, 19);
            this.label3.TabIndex = 7;
            this.label3.Text = "Tipo de Usuario";
            // 
            // human
            // 
            this.human.AutoSize = true;
            this.human.BackColor = System.Drawing.Color.Indigo;
            this.human.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.human.ForeColor = System.Drawing.Color.White;
            this.human.Location = new System.Drawing.Point(97, 423);
            this.human.Name = "human";
            this.human.Size = new System.Drawing.Size(130, 23);
            this.human.TabIndex = 4;
            this.human.Text = "Soy un Humano";
            this.human.UseVisualStyleBackColor = false;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.Indigo;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(114, 140);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(84, 19);
            this.label2.TabIndex = 3;
            this.label2.Text = "Contraseña";
            // 
            // pass
            // 
            this.pass.Location = new System.Drawing.Point(51, 172);
            this.pass.Name = "pass";
            this.pass.Size = new System.Drawing.Size(216, 20);
            this.pass.TabIndex = 2;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Indigo;
            this.label1.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.ForeColor = System.Drawing.Color.White;
            this.label1.Location = new System.Drawing.Point(96, 44);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(135, 19);
            this.label1.TabIndex = 1;
            this.label1.Text = "Nombre de Usuario";
            // 
            // email
            // 
            this.email.Location = new System.Drawing.Point(51, 78);
            this.email.Name = "email";
            this.email.Size = new System.Drawing.Size(216, 20);
            this.email.TabIndex = 0;
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.Color.DarkOrchid;
            this.button1.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button1.ForeColor = System.Drawing.Color.White;
            this.button1.Location = new System.Drawing.Point(0, 165);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(106, 41);
            this.button1.TabIndex = 5;
            this.button1.Text = "Enviar";
            this.button1.UseVisualStyleBackColor = false;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // button2
            // 
            this.button2.BackColor = System.Drawing.Color.DarkOrchid;
            this.button2.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button2.ForeColor = System.Drawing.Color.White;
            this.button2.Location = new System.Drawing.Point(28, 454);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(51, 42);
            this.button2.TabIndex = 4;
            this.button2.Text = "Salir";
            this.button2.UseVisualStyleBackColor = false;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // panel3
            // 
            this.panel3.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("panel3.BackgroundImage")));
            this.panel3.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.panel3.Controls.Add(this.button4);
            this.panel3.Controls.Add(this.button3);
            this.panel3.Controls.Add(this.button2);
            this.panel3.Controls.Add(this.panel2);
            this.panel3.Controls.Add(this.button1);
            this.panel3.Location = new System.Drawing.Point(1, -2);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(112, 508);
            this.panel3.TabIndex = 6;
            // 
            // allusers
            // 
            this.allusers.BackColor = System.Drawing.Color.Indigo;
            this.allusers.ForeColor = System.Drawing.Color.White;
            this.allusers.FormattingEnabled = true;
            this.allusers.Location = new System.Drawing.Point(482, 11);
            this.allusers.Name = "allusers";
            this.allusers.Size = new System.Drawing.Size(372, 485);
            this.allusers.TabIndex = 7;
            // 
            // button3
            // 
            this.button3.BackColor = System.Drawing.Color.DarkOrchid;
            this.button3.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button3.ForeColor = System.Drawing.Color.White;
            this.button3.Location = new System.Drawing.Point(3, 234);
            this.button3.Name = "button3";
            this.button3.Size = new System.Drawing.Size(106, 48);
            this.button3.TabIndex = 6;
            this.button3.Text = "Ver Ultimo Usuario";
            this.button3.UseVisualStyleBackColor = false;
            this.button3.Click += new System.EventHandler(this.button3_Click);
            // 
            // button4
            // 
            this.button4.BackColor = System.Drawing.Color.DarkOrchid;
            this.button4.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button4.ForeColor = System.Drawing.Color.White;
            this.button4.Location = new System.Drawing.Point(0, 315);
            this.button4.Name = "button4";
            this.button4.Size = new System.Drawing.Size(106, 69);
            this.button4.TabIndex = 7;
            this.button4.Text = "Eliminar Ultimo Usuario";
            this.button4.UseVisualStyleBackColor = false;
            this.button4.Click += new System.EventHandler(this.button4_Click);
            // 
            // Login
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("$this.BackgroundImage")));
            this.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.ClientSize = new System.Drawing.Size(866, 506);
            this.Controls.Add(this.allusers);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.panel1);
            this.Name = "Login";
            this.Text = "Form1";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.panel3.ResumeLayout(false);
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox email;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox pass;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.CheckBox human;
        private System.Windows.Forms.Button button2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.RadioButton estand;
        private System.Windows.Forms.RadioButton admin;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.ListBox allusers;
        private System.Windows.Forms.Button button4;
        private System.Windows.Forms.Button button3;
    }
}

