using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using TestWebMvc.Models;

namespace TestWebMvc.Data
{
    public class TestWebMvcContext : DbContext
    {
        public TestWebMvcContext (DbContextOptions<TestWebMvcContext> options) : base(options)
        {
        }

        public DbSet<CustomerCat> CustomerCat { get; set; }

        public DbSet<Customer> Customer { get; set; }
    }
}
