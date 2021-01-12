using System;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

/// <summary>
/// 
/// </summary>
namespace Tp_Freelance.Models
{
    [Table("jobs")]
    public class Job
    {
        [Key]
        [Column("job_id")]
        public int Id { get; set; }

        [Required]
        [StringLength(10)]
        [Column("job_stat", TypeName="char")]
        public char Stat { get; set; }

        [Required]
        [StringLength(100)]
        [Column("job_title")]
        public string Title { get; set; }

        [DataType(DataType.Date)]
        [Column("job_start")]
        public DateTime Start { get; set; }

        [DataType(DataType.Date)]
        [Column("job_end")]
        public DateTime End { get; set; }

        [Column("job_description", TypeName = "text")]
        public string Description { get; set; }

        [Required]
        [Column("customer_id")]
        [ForeignKey("Customer")]
        public int CustomerId { get; set; } 
    }
}
