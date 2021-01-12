using System;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

/// <summary>
/// 
/// </summary>
namespace Tp_Freelance.Models
{
    [Table("quotes")]
    public class Quote
    {
        [Key]
        [Column("quote_id")]
        public int Id { get; set; }

        [Required]
        [StringLength(10)]
        [Column("quote_state", TypeName = "char")]
        public char Stat { get; set; }

        [Required]
        [DataType(DataType.Date)]
        [Column("quote_date")]
        public DateTime Date { get; set; }

        [Required]
        [Column("quote_amount")]
        public int amount { get; set; }
        
        [DataType(DataType.Date)]
        [Column("quote_final_date")]
        public DateTime QuoteFinalDate { get; set; }

        [Column("quote_final_amount")]
        public int FinalAmount { get; set; }

        [Required]
        [Column("job_id")]
        [ForeignKey("Job")]
        public int JobId { get; set; }
    }
}
