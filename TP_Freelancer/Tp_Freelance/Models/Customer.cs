using System;
using System.ComponentModel.DataAnnotations;

namespace Tp_Freelance.Models
{
    public class Customer
    {
        public int Id { get; set; }

        [Required]
        [StringLength(100)]
        public string Name { get; set; }

        [Required]
        [StringLength(255)]
        public string Email { get; set; }

        public int CatId { get; set; }
    }
}
