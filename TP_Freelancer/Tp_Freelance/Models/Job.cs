using System;
using System.ComponentModel.DataAnnotations;

namespace Tp_Freelance.Models
{
    public class Job
    {
        public int Id { get; set; }
        [Required]
        public char Stat { get; set; }
        [Required]
        [StringLength(100)]
        public string Title { get; set; }
        [DataType(DataType.Date)]
        public DateTime Start { get; set; }
        [DataType(DataType.Date)]
        public DateTime End { get; set; }
        public string Description { get; set; }
        public int CustomerId { get; set; }
    }
}
