namespace practicando;

public class Libro
{
    //Atributos
    private string Nombre;
    private int Año;

    //Constructor
    public Libro(string nombre, int año)
    {
        this.Nombre = nombre;
        this.Año = año;
    }

    //Guetter y Setter
    public string GetNombre()
    {
        return Nombre;
    }

    public void SetNombre(string nombre)
    {
        this.Nombre = nombre;
    }

    public int GetAño()
    {
        return Año;
    }

    public void SetAño(int año)
    {
        this.Año = año;
    }

    //Metodos
    public string Info()
    {
       return Nombre + "\t" + Año;
    }
}

public class Usuarios
{
    //Atributos
    private string Nombre;
    private int Pin;

    //Constructor 
    public Usuarios(string nombre, int pin)
    {
        this.Nombre = nombre;
        this.Pin = pin;
    }
    
    //GeTter y Setter
    public string GetNombre()
    {
        return Nombre;
    }
    
    public void SetNombre(string nombre)
    {
        this.Nombre = nombre;
    }

    public int GetPin()
    {
        return Pin;
    }

    public void SetPin(int pin)
    {
        this.Pin = pin;
    }
    
   //Metodos
   public void Prestar(List<Libro> libros)
   {
       Console.WriteLine($"Al usuario {Nombre}, se le prestaran los libros:");

       foreach (var myLibro in libros)
       {
           Console.WriteLine(myLibro.Info());
       }
   }

}
