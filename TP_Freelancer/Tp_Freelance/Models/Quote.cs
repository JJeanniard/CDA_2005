using System;
using System.ComponentModel.DataAnnotations;

namespace Tp_Freelance.Models
{
    public class Quote
    {
        public int Id { get; set; }
        [Required]
        public char Stat { get; set; }
        [Required]
        [DataType(DataType.Date)]
        public DateTime Date { get; set; }
        [Required]
        public int amount { get; set; }
        [DataType(DataType.Date)]
        public DateTime QuoteFinalDate { get; set; }
        public int FinalAmount { get; set; }
        public int JobId { get; set; }
    }
}
