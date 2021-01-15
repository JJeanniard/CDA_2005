using System;
using System.Collections.Generic;

#nullable disable

namespace Tp_Freelance.Models
{
    public partial class Quote
    {
        public int QuoteId { get; set; }
        public string QuoteState { get; set; }
        public DateTime QuoteDate { get; set; }
        public int QuoteAmount { get; set; }
        public DateTime? QuoteFinalDate { get; set; }
        public int? QuoteFinalAmount { get; set; }
        public int JobId { get; set; }

        public virtual Job Job { get; set; }
    }
}
