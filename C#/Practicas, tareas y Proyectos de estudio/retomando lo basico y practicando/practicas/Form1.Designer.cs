
namespace practicas
{
    partial class Form1
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
			this.panel2 = new System.Windows.Forms.Panel();
			this.panel1 = new System.Windows.Forms.Panel();
			this.panel3 = new System.Windows.Forms.Panel();
			this.label2 = new System.Windows.Forms.Label();
			this.password = new System.Windows.Forms.TextBox();
			this.label1 = new System.Windows.Forms.Label();
			this.username = new System.Windows.Forms.TextBox();
			this.button1 = new System.Windows.Forms.Button();
			this.panel3.SuspendLayout();
			this.SuspendLayout();
			// 
			// panel2
			// 
			this.panel2.BackColor = System.Drawing.Color.MediumAquamarine;
			this.panel2.Location = new System.Drawing.Point(56, 2);
			this.panel2.Name = "panel2";
			this.panel2.Size = new System.Drawing.Size(515, 43);
			this.panel2.TabIndex = 3;
			// 
			// panel1
			// 
			this.panel1.BackColor = System.Drawing.Color.MediumAquamarine;
			this.panel1.Location = new System.Drawing.Point(2, 2);
			this.panel1.Name = "panel1";
			this.panel1.Size = new System.Drawing.Size(57, 336);
			this.panel1.TabIndex = 2;
			// 
			// panel3
			// 
			this.panel3.BackColor = System.Drawing.Color.DarkGray;
			this.panel3.Controls.Add(this.button1);
			this.panel3.Controls.Add(this.label2);
			this.panel3.Controls.Add(this.password);
			this.panel3.Controls.Add(this.label1);
			this.panel3.Controls.Add(this.username);
			this.panel3.Location = new System.Drawing.Point(65, 51);
			this.panel3.Name = "panel3";
			this.panel3.Size = new System.Drawing.Size(496, 286);
			this.panel3.TabIndex = 4;
			// 
			// label2
			// 
			this.label2.AutoSize = true;
			this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.label2.Location = new System.Drawing.Point(183, 101);
			this.label2.Name = "label2";
			this.label2.Size = new System.Drawing.Size(92, 20);
			this.label2.TabIndex = 3;
			this.label2.Text = "Contraseña";
			// 
			// password
			// 
			this.password.Location = new System.Drawing.Point(136, 124);
			this.password.Name = "password";
			this.password.Size = new System.Drawing.Size(190, 20);
			this.password.TabIndex = 2;
			// 
			// label1
			// 
			this.label1.AutoSize = true;
			this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.label1.Location = new System.Drawing.Point(132, 30);
			this.label1.Name = "label1";
			this.label1.Size = new System.Drawing.Size(197, 20);
			this.label1.TabIndex = 1;
			this.label1.Text = "Nombre de Usuario o Alias";
			// 
			// username
			// 
			this.username.Location = new System.Drawing.Point(136, 53);
			this.username.Name = "username";
			this.username.Size = new System.Drawing.Size(190, 20);
			this.username.TabIndex = 0;
			// 
			// button1
			// 
			this.button1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.button1.Location = new System.Drawing.Point(157, 197);
			this.button1.Name = "button1";
			this.button1.Size = new System.Drawing.Size(144, 36);
			this.button1.TabIndex = 4;
			this.button1.Text = "Login";
			this.button1.UseVisualStyleBackColor = true;
			this.button1.Click += new System.EventHandler(this.button1_Click);
			// 
			// Form1
			// 
			this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
			this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
			this.ClientSize = new System.Drawing.Size(573, 341);
			this.Controls.Add(this.panel3);
			this.Controls.Add(this.panel2);
			this.Controls.Add(this.panel1);
			this.Name = "Form1";
			this.Text = "Form1";
			this.panel3.ResumeLayout(false);
			this.panel3.PerformLayout();
			this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox password;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox username;
        private System.Windows.Forms.Button button1;
    }
}