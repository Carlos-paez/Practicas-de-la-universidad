using System.Collections.Generic;
using System.Runtime.Remoting.Activation;

public class Users
{
    private string nombre;
    private string password;
    private string UserLevels;

        public Users(string Nombre, string Password, string UserLevels)
    {
        this.nombre = Nombre;
        this.password = Password;
        this.UserLevels = UserLevels;
    }

    public string GetNombre() => nombre;
    public void setNombre(string nombre) => this.nombre = nombre;

    public string GetPassword() => password;
    public void setPassword(string password) => this.password = password;

    public string GetUserLevels() => UserLevels;
    public void setUserLevels(string userLevels) => UserLevels = userLevels;
}
