using System;
using System.Collections.Generic;

#nullable disable

namespace Tp_Freelance.Models
{
    public partial class Customer
    {
        public Customer()
        {
            Jobs = new HashSet<Job>();
        }

        public int CustomerId { get; set; }
        public string CustomerName { get; set; }
        public string CustomerEmail { get; set; }
        public int CatId { get; set; }

        public virtual CustomersCat Cat { get; set; }
        public virtual ICollection<Job> Jobs { get; set; }
    }
}
