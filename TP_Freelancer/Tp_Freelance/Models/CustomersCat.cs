using System;
using System.Collections.Generic;

#nullable disable

namespace Tp_Freelance.Models
{
    public partial class CustomersCat
    {
        public CustomersCat()
        {
            Customers = new HashSet<Customer>();
        }

        public int CatId { get; set; }
        public string CatName { get; set; }
        public string CatDescription { get; set; }

        public virtual ICollection<Customer> Customers { get; set; }
    }
}
