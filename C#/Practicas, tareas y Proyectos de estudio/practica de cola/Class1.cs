using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WindowsFormsApp1
{
    internal class user
    {
        private string name;
        private string location;
        private string description;

        public user(string name, string location, string description)
        {
            this.name = name;
            this.location = location;
            this.description = description;
        }

        public string GetName => name;

        public string GetLocation => location;

        public string GetDescription => description;

        public void SetName(string name)
        {
            this.name = name;
        }

        public void SetLocation(string location)
        {
            this.location = location;
        }

        public void SetDescription(string description)
        {
            this.description = description;
        }
    }
}
