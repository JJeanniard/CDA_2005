using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;

#nullable disable

namespace Tp_Freelance.Models
{
    public partial class Quote
    {
        public int QuoteId { get; set; }
        [Required]
        public string QuoteState { get; set; }
        [Required]
        public DateTime QuoteDate { get; set; }
        [Required]
        public int QuoteAmount { get; set; }
        public DateTime? QuoteFinalDate { get; set; }
        public int? QuoteFinalAmount { get; set; }
        [Required]
        public int JobId { get; set; }

        public virtual Job Job { get; set; }
    }
}
