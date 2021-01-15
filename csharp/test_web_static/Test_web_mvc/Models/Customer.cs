using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace TestWebMvc.Models
{
    [Table("customers")]
    public class Customer
    {
        [Key, Column("customer_id")]
        public int Customer_Id { get; set; }

        [Required, Column("customer_name"), StringLength(100)]
        public string Customer_Name { get; set; }

        [Required, Column("cat_id"), ForeignKey("cat_id")]
        public int Cat_Id { get; set; }
    }
}
