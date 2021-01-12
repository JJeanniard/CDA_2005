using Microsoft.EntityFrameworkCore;
using Tp_Freelance.Models;

namespace Tp_Freelance.Data
{
    public class FreelanceContext : DbContext
    {

        public FreelanceContext(DbContextOptions<FreelanceContext> options):base(options)
        {
        }

        public DbSet<CustomerCat> CustomerCat { get; set; }
        public DbSet<Customer> Customer { get; set; }
        public DbSet<Job> Job { get; set; }
        public DbSet<Quote> Quote { get; set; }
    }
}
