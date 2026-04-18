namespace WinFormsApp1;

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
    ///  Required method for Designer support - do not modify
    ///  the contents of this method with the code editor.
    /// </summary>
    private void InitializeComponent()
    {
        link = new TextBox();
        button1 = new Button();
        Enlace = new ListBox();
        Historial = new ListBox();
        SuspendLayout();
        // 
        // link
        // 
        link.Location = new Point(30, 38);
        link.Name = "link";
        link.Size = new Size(721, 23);
        link.TabIndex = 0;
        link.Text = "https://";
        // 
        // button1
        // 
        button1.Location = new Point(30, 67);
        button1.Name = "button1";
        button1.Size = new Size(87, 26);
        button1.TabIndex = 1;
        button1.Text = "Ir";
        button1.UseVisualStyleBackColor = true;
        button1.Click += button1_Click;
        // 
        // Enlace
        // 
        Enlace.FormattingEnabled = true;
        Enlace.Location = new Point(415, 67);
        Enlace.Name = "Enlace";
        Enlace.Size = new Size(336, 19);
        Enlace.TabIndex = 2;
        // 
        // Historial
        // 
        Historial.FormattingEnabled = true;
        Historial.Location = new Point(36, 118);
        Historial.Name = "Historial";
        Historial.Size = new Size(422, 304);
        Historial.TabIndex = 3;
        // 
        // Form1
        // 
        AutoScaleDimensions = new SizeF(7F, 15F);
        AutoScaleMode = AutoScaleMode.Font;
        ClientSize = new Size(800, 450);
        Controls.Add(Historial);
        Controls.Add(Enlace);
        Controls.Add(button1);
        Controls.Add(link);
        Name = "Form1";
        Text = "Form1";
        ResumeLayout(false);
        PerformLayout();
    }

    #endregion

    private TextBox link;
    private Button button1;
    private ListBox Enlace;
    private ListBox Historial;
}