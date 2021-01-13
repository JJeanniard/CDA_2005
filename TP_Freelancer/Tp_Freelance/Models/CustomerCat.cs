using System;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

/// <summary>
/// Classe pour faire le lien entre les entités et la db. 
/// Sert à la gestion des categories pour les clients.
/// </summary>
/// 
namespace Tp_Freelance.Models
{
    [Table("customers_cats")]
    public class CustomerCat
    {
        [Key]
        public int Id { get; set; }

        [Required]
        [StringLength(50)]
        [Column("cat_name", TypeName = "varchar")]
        public string Name { get; set; }

        [Column("cat_description", TypeName = "Text")]
        public string Description { get; set; }
    }
}
