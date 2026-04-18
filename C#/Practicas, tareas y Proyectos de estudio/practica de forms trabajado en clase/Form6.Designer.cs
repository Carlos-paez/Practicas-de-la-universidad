
namespace practica_de_forms
{
    partial class Form6
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
            this.panel4 = new System.Windows.Forms.Panel();
            this.label2 = new System.Windows.Forms.Label();
            this.panel1 = new System.Windows.Forms.Panel();
<<<<<<< HEAD
            this.button1 = new System.Windows.Forms.Button();
            this.fecha = new System.Windows.Forms.Label();
=======
            this.fecha = new System.Windows.Forms.Label();
            this.button1 = new System.Windows.Forms.Button();
>>>>>>> 58a23b94f706ac8c7efb5a49ca56b424aaed7ade
            this.panel4.SuspendLayout();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.MediumTurquoise;
            this.panel3.Location = new System.Drawing.Point(1, 53);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(66, 322);
            this.panel3.TabIndex = 7;
            // 
            // panel4
            // 
            this.panel4.BackColor = System.Drawing.Color.DarkTurquoise;
            this.panel4.Controls.Add(this.label2);
            this.panel4.Location = new System.Drawing.Point(1, 2);
            this.panel4.Name = "panel4";
            this.panel4.Size = new System.Drawing.Size(665, 52);
            this.panel4.TabIndex = 6;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.SystemColors.ControlDarkDark;
<<<<<<< HEAD
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 30F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(270, 6);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(165, 46);
=======
            this.label2.Font = new System.Drawing.Font("FiraCode Nerd Font Mono Light", 30F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(216, 4);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(247, 49);
>>>>>>> 58a23b94f706ac8c7efb5a49ca56b424aaed7ade
            this.label2.TabIndex = 2;
            this.label2.Text = "Inforteg ";
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.DimGray;
            this.panel1.Controls.Add(this.button1);
            this.panel1.Controls.Add(this.fecha);
            this.panel1.Location = new System.Drawing.Point(73, 69);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(582, 295);
            this.panel1.TabIndex = 8;
<<<<<<< HEAD
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(248, 241);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(82, 37);
            this.button1.TabIndex = 1;
            this.button1.Text = "button1";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
=======
            this.panel1.Paint += new System.Windows.Forms.PaintEventHandler(this.panel1_Paint);
>>>>>>> 58a23b94f706ac8c7efb5a49ca56b424aaed7ade
            // 
            // fecha
            // 
            this.fecha.AutoSize = true;
            this.fecha.Font = new System.Drawing.Font("Microsoft Sans Serif", 20F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.fecha.ForeColor = System.Drawing.Color.White;
<<<<<<< HEAD
            this.fecha.Location = new System.Drawing.Point(271, 47);
=======
            this.fecha.Location = new System.Drawing.Point(64, 60);
>>>>>>> 58a23b94f706ac8c7efb5a49ca56b424aaed7ade
            this.fecha.Name = "fecha";
            this.fecha.Size = new System.Drawing.Size(22, 31);
            this.fecha.TabIndex = 0;
            this.fecha.Text = ".";
<<<<<<< HEAD
=======
            this.fecha.Click += new System.EventHandler(this.fecha_Click);
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(255, 255);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(82, 37);
            this.button1.TabIndex = 1;
            this.button1.Text = "button1";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
>>>>>>> 58a23b94f706ac8c7efb5a49ca56b424aaed7ade
            // 
            // Form6
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(667, 376);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.panel4);
            this.Name = "Form6";
            this.Text = "Form6";
            this.panel4.ResumeLayout(false);
            this.panel4.PerformLayout();
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Panel panel4;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label fecha;
        private System.Windows.Forms.Button button1;
    }
}