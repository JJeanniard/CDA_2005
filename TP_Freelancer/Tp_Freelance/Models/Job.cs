using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;

#nullable disable

namespace Tp_Freelance.Models
{
    public partial class Job
    {
        public Job()
        {
            Quotes = new HashSet<Quote>();
        }

        public int JobId { get; set; }
        [Required, StringLength(10)]
        public char JobStat { get; set; }
        [Required, StringLength(100)]
        public string JobTitle { get; set; }
        [DataType(DataType.DateTime)]
        public DateTime? JobStart { get; set; }
        [DataType(DataType.DateTime)]
        public DateTime? JobEnd { get; set; }
        [DataType(DataType.Text)]
        public string JobDescription { get; set; }
        [Required]
        public int CustomerId { get; set; }

        public virtual Customer Customer { get; set; }
        public virtual ICollection<Quote> Quotes { get; set; }
    }
}
