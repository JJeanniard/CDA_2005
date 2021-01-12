using Microsoft.EntityFrameworkCore;
using System;
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
        public string Email { get; set; }

        [Required]
        [Column("cat_id")]
        [ForeignKey("CustomerCat")]
        public int CatId { get; set; }
    }
}
