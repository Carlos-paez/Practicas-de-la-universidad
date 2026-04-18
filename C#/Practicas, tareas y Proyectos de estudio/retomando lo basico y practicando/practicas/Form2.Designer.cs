namespace practicas
{
    partial class Form2
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
			this.panel3 = new System.Windows.Forms.Panel();
			this.panel2 = new System.Windows.Forms.Panel();
			this.panel1 = new System.Windows.Forms.Panel();
			this.button1 = new System.Windows.Forms.Button();
			this.allUsers = new System.Windows.Forms.Label();
			this.panel3.SuspendLayout();
			this.SuspendLayout();
			// 
			// panel3
			// 
			this.panel3.BackColor = System.Drawing.Color.DarkGray;
			this.panel3.Controls.Add(this.allUsers);
			this.panel3.Controls.Add(this.button1);
			this.panel3.Location = new System.Drawing.Point(64, 49);
			this.panel3.Name = "panel3";
			this.panel3.Size = new System.Drawing.Size(496, 286);
			this.panel3.TabIndex = 7;
			// 
			// panel2
			// 
			this.panel2.BackColor = System.Drawing.Color.MediumAquamarine;
			this.panel2.Location = new System.Drawing.Point(55, 0);
			this.panel2.Name = "panel2";
			this.panel2.Size = new System.Drawing.Size(515, 43);
			this.panel2.TabIndex = 6;
			// 
			// panel1
			// 
			this.panel1.BackColor = System.Drawing.Color.MediumAquamarine;
			this.panel1.Location = new System.Drawing.Point(1, 0);
			this.panel1.Name = "panel1";
			this.panel1.Size = new System.Drawing.Size(57, 336);
			this.panel1.TabIndex = 5;
			// 
			// button1
			// 
			this.button1.Location = new System.Drawing.Point(3, 3);
			this.button1.Name = "button1";
			this.button1.Size = new System.Drawing.Size(78, 24);
			this.button1.TabIndex = 0;
			this.button1.Text = "ver Usuarios";
			this.button1.UseVisualStyleBackColor = true;
			this.button1.Click += new System.EventHandler(this.button1_Click);
			// 
			// allUsers
			// 
			this.allUsers.AutoSize = true;
			this.allUsers.Location = new System.Drawing.Point(91, 62);
			this.allUsers.Name = "allUsers";
			this.allUsers.Size = new System.Drawing.Size(10, 13);
			this.allUsers.TabIndex = 1;
			this.allUsers.Text = ",";
			// 
			// Form2
			// 
			this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
			this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
			this.ClientSize = new System.Drawing.Size(570, 339);
			this.Controls.Add(this.panel3);
			this.Controls.Add(this.panel2);
			this.Controls.Add(this.panel1);
			this.Name = "Form2";
			this.Text = "Form2";
			this.panel3.ResumeLayout(false);
			this.panel3.PerformLayout();
			this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Panel panel2;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Label allUsers;
    }
}