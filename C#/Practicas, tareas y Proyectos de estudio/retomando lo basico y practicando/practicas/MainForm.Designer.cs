/*
 * Created by SharpDevelop.
 * User: cpaez
 * Date: 9/9/2025
 * Time: 12:28 p. m.
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
namespace practicas
{
	partial class MainForm
	{
		/// <summary>
		/// Designer variable used to keep track of non-visual components.
		/// </summary>
		private System.ComponentModel.IContainer components = null;
		private System.Windows.Forms.Panel panel1;
		private System.Windows.Forms.Panel panel2;
		
		/// <summary>
		/// Disposes resources used by the form.
		/// </summary>
		/// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
		protected override void Dispose(bool disposing)
		{
			if (disposing) {
				if (components != null) {
					components.Dispose();
				}
			}
			base.Dispose(disposing);
		}
		
		/// <summary>
		/// This method is required for Windows Forms designer support.
		/// Do not change the method contents inside the source code editor. The Forms designer might
		/// not be able to load this method if it was changed manually.
		/// </summary>
		private void InitializeComponent()
		{
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(MainForm));
            this.panel1 = new System.Windows.Forms.Panel();
            this.label13 = new System.Windows.Forms.Label();
            this.button6 = new System.Windows.Forms.Button();
            this.panel2 = new System.Windows.Forms.Panel();
            this.label14 = new System.Windows.Forms.Label();
            this.panel4 = new System.Windows.Forms.Panel();
            this.admin_pass = new System.Windows.Forms.TextBox();
            this.label16 = new System.Windows.Forms.Label();
            this.label6 = new System.Windows.Forms.Label();
            this.admin_otro = new System.Windows.Forms.RadioButton();
            this.admin_mujer = new System.Windows.Forms.RadioButton();
            this.admin_hombre = new System.Windows.Forms.RadioButton();
            this.admin_fecha = new System.Windows.Forms.DateTimePicker();
            this.label7 = new System.Windows.Forms.Label();
            this.admin_ci = new System.Windows.Forms.TextBox();
            this.label8 = new System.Windows.Forms.Label();
            this.admin_apellido = new System.Windows.Forms.TextBox();
            this.label9 = new System.Windows.Forms.Label();
            this.adminName = new System.Windows.Forms.TextBox();
            this.label10 = new System.Windows.Forms.Label();
            this.button3 = new System.Windows.Forms.Button();
            this.button4 = new System.Windows.Forms.Button();
            this.panel1.SuspendLayout();
            this.panel2.SuspendLayout();
            this.panel4.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.MediumAquamarine;
            this.panel1.Controls.Add(this.label13);
            this.panel1.Controls.Add(this.button6);
            this.panel1.Location = new System.Drawing.Point(1, 1);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(122, 437);
            this.panel1.TabIndex = 0;
            // 
            // label13
            // 
            this.label13.AutoSize = true;
            this.label13.Location = new System.Drawing.Point(11, 126);
            this.label13.Name = "label13";
            this.label13.Size = new System.Drawing.Size(33, 13);
            this.label13.TabIndex = 1;
            this.label13.Text = "Login";
            // 
            // button6
            // 
            this.button6.BackgroundImage = ((System.Drawing.Image)(resources.GetObject("button6.BackgroundImage")));
            this.button6.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.button6.Location = new System.Drawing.Point(11, 89);
            this.button6.Name = "button6";
            this.button6.Size = new System.Drawing.Size(42, 34);
            this.button6.TabIndex = 0;
            this.button6.UseVisualStyleBackColor = true;
            this.button6.Click += new System.EventHandler(this.button6_Click);
            // 
            // panel2
            // 
            this.panel2.BackColor = System.Drawing.Color.MediumAquamarine;
            this.panel2.Controls.Add(this.label14);
            this.panel2.Location = new System.Drawing.Point(123, 1);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(515, 43);
            this.panel2.TabIndex = 1;
            this.panel2.Paint += new System.Windows.Forms.PaintEventHandler(this.panel2_Paint);
            // 
            // label14
            // 
            this.label14.AutoSize = true;
            this.label14.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label14.Location = new System.Drawing.Point(195, 8);
            this.label14.Name = "label14";
            this.label14.Size = new System.Drawing.Size(94, 20);
            this.label14.TabIndex = 0;
            this.label14.Text = "Bienvenid@";
            // 
            // panel4
            // 
            this.panel4.BackColor = System.Drawing.Color.DarkGray;
            this.panel4.Controls.Add(this.admin_pass);
            this.panel4.Controls.Add(this.label16);
            this.panel4.Controls.Add(this.label6);
            this.panel4.Controls.Add(this.admin_otro);
            this.panel4.Controls.Add(this.admin_mujer);
            this.panel4.Controls.Add(this.admin_hombre);
            this.panel4.Controls.Add(this.admin_fecha);
            this.panel4.Controls.Add(this.label7);
            this.panel4.Controls.Add(this.admin_ci);
            this.panel4.Controls.Add(this.label8);
            this.panel4.Controls.Add(this.admin_apellido);
            this.panel4.Controls.Add(this.label9);
            this.panel4.Controls.Add(this.adminName);
            this.panel4.Controls.Add(this.label10);
            this.panel4.Location = new System.Drawing.Point(256, 90);
            this.panel4.Name = "panel4";
            this.panel4.Size = new System.Drawing.Size(494, 245);
            this.panel4.TabIndex = 13;
            // 
            // admin_pass
            // 
            this.admin_pass.Location = new System.Drawing.Point(21, 186);
            this.admin_pass.Name = "admin_pass";
            this.admin_pass.Size = new System.Drawing.Size(133, 20);
            this.admin_pass.TabIndex = 33;
            // 
            // label16
            // 
            this.label16.AutoSize = true;
            this.label16.Location = new System.Drawing.Point(29, 170);
            this.label16.Name = "label16";
            this.label16.Size = new System.Drawing.Size(115, 13);
            this.label16.TabIndex = 32;
            this.label16.Text = "Contraseña de Usuario";
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.BackColor = System.Drawing.Color.Transparent;
            this.label6.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label6.ForeColor = System.Drawing.Color.Black;
            this.label6.Location = new System.Drawing.Point(319, 98);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(63, 20);
            this.label6.TabIndex = 27;
            this.label6.Text = "Genero";
            // 
            // admin_otro
            // 
            this.admin_otro.AutoSize = true;
            this.admin_otro.Location = new System.Drawing.Point(323, 175);
            this.admin_otro.Name = "admin_otro";
            this.admin_otro.Size = new System.Drawing.Size(50, 17);
            this.admin_otro.TabIndex = 26;
            this.admin_otro.TabStop = true;
            this.admin_otro.Text = "Otros";
            this.admin_otro.UseVisualStyleBackColor = true;
            // 
            // admin_mujer
            // 
            this.admin_mujer.AutoSize = true;
            this.admin_mujer.Location = new System.Drawing.Point(323, 152);
            this.admin_mujer.Name = "admin_mujer";
            this.admin_mujer.Size = new System.Drawing.Size(51, 17);
            this.admin_mujer.TabIndex = 25;
            this.admin_mujer.TabStop = true;
            this.admin_mujer.Text = "Mujer";
            this.admin_mujer.UseVisualStyleBackColor = true;
            // 
            // admin_hombre
            // 
            this.admin_hombre.AutoSize = true;
            this.admin_hombre.Location = new System.Drawing.Point(323, 129);
            this.admin_hombre.Name = "admin_hombre";
            this.admin_hombre.Size = new System.Drawing.Size(62, 17);
            this.admin_hombre.TabIndex = 24;
            this.admin_hombre.TabStop = true;
            this.admin_hombre.Text = "Hombre";
            this.admin_hombre.UseVisualStyleBackColor = true;
            // 
            // admin_fecha
            // 
            this.admin_fecha.Location = new System.Drawing.Point(258, 49);
            this.admin_fecha.Name = "admin_fecha";
            this.admin_fecha.Size = new System.Drawing.Size(213, 20);
            this.admin_fecha.TabIndex = 23;
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Location = new System.Drawing.Point(310, 33);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(111, 13);
            this.label7.TabIndex = 22;
            this.label7.Text = "Fecha de Nacimiento ";
            // 
            // admin_ci
            // 
            this.admin_ci.Location = new System.Drawing.Point(18, 138);
            this.admin_ci.Name = "admin_ci";
            this.admin_ci.Size = new System.Drawing.Size(135, 20);
            this.admin_ci.TabIndex = 21;
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Location = new System.Drawing.Point(72, 122);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(17, 13);
            this.label8.TabIndex = 20;
            this.label8.Text = "CI";
            // 
            // admin_apellido
            // 
            this.admin_apellido.Location = new System.Drawing.Point(20, 98);
            this.admin_apellido.Name = "admin_apellido";
            this.admin_apellido.Size = new System.Drawing.Size(133, 20);
            this.admin_apellido.TabIndex = 19;
            // 
            // label9
            // 
            this.label9.AutoSize = true;
            this.label9.Location = new System.Drawing.Point(57, 82);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(44, 13);
            this.label9.TabIndex = 18;
            this.label9.Text = "Apellido";
            // 
            // adminName
            // 
            this.adminName.Location = new System.Drawing.Point(20, 59);
            this.adminName.Name = "adminName";
            this.adminName.Size = new System.Drawing.Size(133, 20);
            this.adminName.TabIndex = 17;
            // 
            // label10
            // 
            this.label10.AutoSize = true;
            this.label10.BackColor = System.Drawing.Color.Transparent;
            this.label10.ForeColor = System.Drawing.Color.Black;
            this.label10.Location = new System.Drawing.Point(57, 43);
            this.label10.Name = "label10";
            this.label10.Size = new System.Drawing.Size(44, 13);
            this.label10.TabIndex = 16;
            this.label10.Text = "Nombre";
            // 
            // button3
            // 
            this.button3.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button3.Location = new System.Drawing.Point(256, 350);
            this.button3.Name = "button3";
            this.button3.Size = new System.Drawing.Size(71, 26);
            this.button3.TabIndex = 12;
            this.button3.Text = "Cerrar";
            this.button3.UseVisualStyleBackColor = true;
            // 
            // button4
            // 
            this.button4.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button4.Location = new System.Drawing.Point(666, 384);
            this.button4.Name = "button4";
            this.button4.Size = new System.Drawing.Size(84, 26);
            this.button4.TabIndex = 11;
            this.button4.Text = "Enviar";
            this.button4.UseVisualStyleBackColor = true;
            // 
            // MainForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(788, 437);
            this.Controls.Add(this.panel4);
            this.Controls.Add(this.button3);
            this.Controls.Add(this.button4);
            this.Controls.Add(this.panel2);
            this.Controls.Add(this.panel1);
            this.Name = "MainForm";
            this.Text = "practicas";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.panel2.ResumeLayout(false);
            this.panel2.PerformLayout();
            this.panel4.ResumeLayout(false);
            this.panel4.PerformLayout();
            this.ResumeLayout(false);

		}
        private System.Windows.Forms.Button button6;
        private System.Windows.Forms.Label label13;
        private System.Windows.Forms.Label label14;
        private System.Windows.Forms.Panel panel4;
        private System.Windows.Forms.TextBox admin_pass;
        private System.Windows.Forms.Label label16;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.RadioButton admin_otro;
        private System.Windows.Forms.RadioButton admin_mujer;
        private System.Windows.Forms.RadioButton admin_hombre;
        private System.Windows.Forms.DateTimePicker admin_fecha;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.TextBox admin_ci;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.TextBox admin_apellido;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.TextBox adminName;
        private System.Windows.Forms.Label label10;
        private System.Windows.Forms.Button button3;
        private System.Windows.Forms.Button button4;
    }
}
