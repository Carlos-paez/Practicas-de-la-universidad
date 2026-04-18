public class Productos
{
	public string Nombre;
	public double Precio;
    public Productos(string nombre, double precio)
    {
        this.Nombre = nombre;
        this.Precio = precio;
    }

    public string getNombre()
    {
    	return Nombre;
    }
    
    public void setNombre(string nombre)
    {
    	this.Nombre = nombre;
    }
    
    public string getPrecio()
    {
    	return Nombre;
    }
    
    public void setPrecio(double precio)
    {
    	this.Precio = precio;
    }
    
    // Método que retorna la factura como string
    public string Facturar()
    {
    	return (Nombre + "				" + Precio);
    }
}

public class Cliente
{
	public string Nombre;
	public string Direccion;
	public int CI;
	
	public Cliente(string nombre, string direccion, int ci)
	{
		Nombre = nombre;
		Direccion = direccion;
		CI = ci;
	}
	
	public string getNombre()
	{
		return Nombre;
	}
	
	public void setNombre(string nombre)
	{
		this.Nombre = nombre;
	}
	
	public string getDireccion()
	{
		return Direccion;
	}
	
	public void setDireccion(string direccion)
	{
		this.Direccion = direccion;
	}
	
	public int getCI()
	{
		return CI;
	}
	
	public void setCI(int ci)
	{
		this.CI = ci;
	}
	
	public string Data()
	{
		return ("Nombre:  "+Nombre + "\n" + "CI:  "+CI + "\n" + "Dirección:  "+Direccion);
	}
	
}