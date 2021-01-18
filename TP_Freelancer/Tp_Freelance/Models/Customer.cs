using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;

#nullable disable

namespace Tp_Freelance.Models
{
    public partial class Customer
    {
        public Customer()
        {
            Jobs = new HashSet<Job>();
        }
        [Key]
        public int CustomerId { get; set; }
        [Required]
        public string CustomerName { get; set; }
        [Required, EmailAddress]
        public string CustomerEmail { get; set; }
        [Required]
        public int CatId { get; set; }
        
        public virtual CustomersCat Cat { get; set; }
        public virtual ICollection<Job> Jobs { get; set; }
    }
}
