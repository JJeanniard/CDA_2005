using System;
using System.ComponentModel.DataAnnotations;

namespace Tp_Freelance.Models
{
    public class Job
    {
        public int Id { get; set; }
        public char JobStat { get; set; }
        public string JobTitle { get; set; }
        [DataType(DataType.Date)]
        public DateTime JobStart { get; set; }
        [DataType(DataType.Date)]
        public DateTime JobEnd { get; set; }
        public string JobDescription { get; set; }
        //public Customer CustomerId { get; set; }
    }
}
