using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

/// <summary>
/// 
/// </summary>
namespace Tp_Freelance.Models
{
    [Table("customers")]
    public class Customer
    {
        [Key]
        [Column("customer_id")]
        public int Id { get; set; }

        [Required]
        [StringLength(100)]
        [Column("customer_name")]
        public string Name { get; set; }

        [Required]
        [StringLength(255)]
        [Column("customer_email")]
        [DataType(DataType.EmailAddress)]//[EmailAddress]
        public string Email { get; set; }

        [Required]
        [ForeignKey("cat_id")]
        public int CatId { get; set; }
        public List<CustomerCat> CustomerCats { get; set; } 
    }
}
