﻿using System;
using System.Collections.Generic;

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
        public string JobStat { get; set; }
        public string JobTitle { get; set; }
        public DateTime? JobStart { get; set; }
        public DateTime? JobEnd { get; set; }
        public string JobDescription { get; set; }
        public int CustomerId { get; set; }

        public virtual Customer Customer { get; set; }
        public virtual ICollection<Quote> Quotes { get; set; }
    }
}
