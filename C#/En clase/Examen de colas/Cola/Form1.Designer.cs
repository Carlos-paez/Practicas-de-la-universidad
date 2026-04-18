namespace Cola;

partial class Form1
{
    /// <summary>
    ///  Required designer variable.
    /// </summary>
    private System.ComponentModel.IContainer components = null;

    /// <summary>
    ///  Clean up any resources being used.
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
        System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
        button3 = new System.Windows.Forms.Button();
        label1 = new System.Windows.Forms.Label();
        placa = new System.Windows.Forms.TextBox();
        button2 = new System.Windows.Forms.Button();
        piso = new System.Windows.Forms.TextBox();
        esperando = new System.Windows.Forms.ListBox();
        exit = new System.Windows.Forms.TextBox();
        total = new System.Windows.Forms.Label();
        intro = new System.Windows.Forms.TextBox();
        totalpago = new System.Windows.Forms.TextBox();
        label2 = new System.Windows.Forms.Label();
        button1 = new System.Windows.Forms.Button();
        label3 = new System.Windows.Forms.Label();
        label4 = new System.Windows.Forms.Label();
        button4 = new System.Windows.Forms.Button();
        SuspendLayout();
        // 
        // button3
        // 
        button3.Location = new System.Drawing.Point(450, 380);
        button3.Name = "button3";
        button3.Size = new System.Drawing.Size(143, 38);
        button3.TabIndex = 34;
        button3.Text = "Generar comprobante";
        button3.UseVisualStyleBackColor = true;
        button3.Click += button3_Click_1;
        // 
        // label1
        // 
        label1.AutoSize = true;
        label1.Location = new System.Drawing.Point(167, 28);
        label1.Name = "label1";
        label1.Size = new System.Drawing.Size(35, 15);
        label1.TabIndex = 25;
        label1.Text = "Placa";
        // 
        // placa
        // 
        placa.Location = new System.Drawing.Point(108, 46);
        placa.Name = "placa";
        placa.Size = new System.Drawing.Size(158, 23);
        placa.TabIndex = 21;
        // 
        // button2
        // 
        button2.Location = new System.Drawing.Point(198, 380);
        button2.Name = "button2";
        button2.Size = new System.Drawing.Size(119, 43);
        button2.TabIndex = 33;
        button2.Text = "Salida de veiculo";
        button2.UseVisualStyleBackColor = true;
        button2.Click += button2_Click_1;
        // 
        // piso
        // 
        piso.Location = new System.Drawing.Point(108, 104);
        piso.Name = "piso";
        piso.Size = new System.Drawing.Size(158, 23);
        piso.TabIndex = 22;
        // 
        // esperando
        // 
        esperando.FormattingEnabled = true;
        esperando.Location = new System.Drawing.Point(450, 46);
        esperando.Name = "esperando";
        esperando.Size = new System.Drawing.Size(306, 304);
        esperando.TabIndex = 32;
        // 
        // exit
        // 
        exit.Location = new System.Drawing.Point(108, 234);
        exit.Name = "exit";
        exit.Size = new System.Drawing.Size(158, 23);
        exit.TabIndex = 23;
        // 
        // total
        // 
        total.AutoSize = true;
        total.Location = new System.Drawing.Point(144, 283);
        total.Name = "total";
        total.Size = new System.Drawing.Size(74, 15);
        total.TabIndex = 31;
        total.Text = "Total a pagar";
        // 
        // intro
        // 
        intro.Location = new System.Drawing.Point(108, 174);
        intro.Name = "intro";
        intro.Size = new System.Drawing.Size(158, 23);
        intro.TabIndex = 24;
        // 
        // totalpago
        // 
        totalpago.Location = new System.Drawing.Point(108, 301);
        totalpago.Name = "totalpago";
        totalpago.Size = new System.Drawing.Size(158, 23);
        totalpago.TabIndex = 30;
        // 
        // label2
        // 
        label2.AutoSize = true;
        label2.Location = new System.Drawing.Point(173, 86);
        label2.Name = "label2";
        label2.Size = new System.Drawing.Size(29, 15);
        label2.TabIndex = 26;
        label2.Text = "Piso";
        // 
        // button1
        // 
        button1.BackgroundImage = ((System.Drawing.Image)resources.GetObject("button1.BackgroundImage"));
        button1.Location = new System.Drawing.Point(44, 380);
        button1.Name = "button1";
        button1.Size = new System.Drawing.Size(119, 43);
        button1.TabIndex = 29;
        button1.Text = "Ingreso de Veiculo";
        button1.UseVisualStyleBackColor = true;
        button1.Click += button1_Click_1;
        // 
        // label3
        // 
        label3.AutoSize = true;
        label3.Location = new System.Drawing.Point(144, 156);
        label3.Name = "label3";
        label3.Size = new System.Drawing.Size(92, 15);
        label3.TabIndex = 27;
        label3.Text = "Hora de entrada";
        // 
        // label4
        // 
        label4.AutoSize = true;
        label4.Location = new System.Drawing.Point(144, 216);
        label4.Name = "label4";
        label4.Size = new System.Drawing.Size(82, 15);
        label4.TabIndex = 28;
        label4.Text = "Hora de salida";
        // 
        // button4
        // 
        button4.Location = new System.Drawing.Point(671, 380);
        button4.Name = "button4";
        button4.Size = new System.Drawing.Size(101, 38);
        button4.TabIndex = 35;
        button4.Text = "Cerrar Sistema";
        button4.UseVisualStyleBackColor = true;
        button4.Click += button4_Click;
        // 
        // Form1
        // 
        AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
        AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
        BackgroundImage = ((System.Drawing.Image)resources.GetObject("$this.BackgroundImage"));
        BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
        ClientSize = new System.Drawing.Size(800, 450);
        Controls.Add(button4);
        Controls.Add(button3);
        Controls.Add(label1);
        Controls.Add(placa);
        Controls.Add(button2);
        Controls.Add(piso);
        Controls.Add(esperando);
        Controls.Add(exit);
        Controls.Add(total);
        Controls.Add(intro);
        Controls.Add(totalpago);
        Controls.Add(label2);
        Controls.Add(button1);
        Controls.Add(label3);
        Controls.Add(label4);
        Text = "Form1";
        ResumeLayout(false);
        PerformLayout();
    }

    private System.Windows.Forms.Button button4;

    #endregion

    private System.Windows.Forms.TextBox placa;
    private System.Windows.Forms.TextBox piso;
    private System.Windows.Forms.TextBox exit;
    private System.Windows.Forms.TextBox intro;
    private System.Windows.Forms.Label label1;
    private System.Windows.Forms.Label label2;
    private System.Windows.Forms.Label label3;
    private System.Windows.Forms.Label label4;
    private System.Windows.Forms.Button button1;
    private System.Windows.Forms.Label total;
    private System.Windows.Forms.TextBox totalpago;
    private System.Windows.Forms.ListBox esperando;
    private System.Windows.Forms.Button button2;
    private System.Windows.Forms.Button button3;
}