using System;
using System.ComponentModel.DataAnnotations;

namespace Tp_Freelance.Models
{
    public class CustomerCat
    {
        public int Id { get; set; }

        [Required]
        [StringLength(50)]
        public string Name { get; set; }

        public string Description { get; set; }
    }
}
