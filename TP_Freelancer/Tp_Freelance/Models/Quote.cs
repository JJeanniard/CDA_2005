using System;
using System.ComponentModel.DataAnnotations;

namespace Tp_Freelance.Models
{
    public class Quote
    {
        public int Id { get; set; }
        public char QuoteStat { get; set; }
        [DataType(DataType.Date)]
        public DateTime QuoteDate { get; set; }
        public int amount { get; set; }
        [DataType(DataType.Date)]
        public DateTime QuoteFinalDate { get; set; }
        public int QuoteFinalAmount { get; set; }
        //public Job JobId { get; set; }
    }
}
