using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace TestWebMvc.Models
{
    [Table("customers_cats")]
    public class CustomerCat
    {
        [Key]
        [Column("cat_id")]
        public int Cat_Id { get; set; }

        [Column("cat_name")]
        [StringLength(50)]
        public string Cat_Name { get; set; }

    }
}
