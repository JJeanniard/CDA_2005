using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;

#nullable disable

namespace Tp_Freelance.Models
{
    public partial class FreelanceContext : DbContext
    {
        public FreelanceContext()
        {
        }

        public FreelanceContext(DbContextOptions<FreelanceContext> options)
            : base(options)
        {
        }

        public virtual DbSet<Customer> Customers { get; set; }
        public virtual DbSet<CustomersCat> CustomersCats { get; set; }
        public virtual DbSet<Job> Jobs { get; set; }
        public virtual DbSet<Quote> Quotes { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
                optionsBuilder.UseSqlServer("name=Freelance");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.HasAnnotation("Relational:Collation", "SQL_Latin1_General_CP1_CI_AS");

            modelBuilder.Entity<Customer>(entity =>
            {
                entity.ToTable("customers");

                entity.Property(e => e.CustomerId).HasColumnName("customer_id");

                entity.Property(e => e.CatId).HasColumnName("cat_id");

                entity.Property(e => e.CustomerEmail)
                    .IsRequired()
                    .HasMaxLength(255)
                    .IsUnicode(false)
                    .HasColumnName("customer_email");

                entity.Property(e => e.CustomerName)
                    .IsRequired()
                    .HasMaxLength(100)
                    .IsUnicode(false)
                    .HasColumnName("customer_name");

                entity.HasOne(d => d.Cat)
                    .WithMany(p => p.Customers)
                    .HasForeignKey(d => d.CatId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_customer_cats");
            });

            modelBuilder.Entity<CustomersCat>(entity =>
            {
                entity.HasKey(e => e.CatId);

                entity.ToTable("customers_cats");

                entity.Property(e => e.CatId).HasColumnName("cat_id");

                entity.Property(e => e.CatDescription)
                    .HasColumnType("text")
                    .HasColumnName("cat_description");

                entity.Property(e => e.CatName)
                    .IsRequired()
                    .HasMaxLength(50)
                    .IsUnicode(false)
                    .HasColumnName("cat_name");
            });

            modelBuilder.Entity<Job>(entity =>
            {
                entity.ToTable("jobs");

                entity.Property(e => e.JobId).HasColumnName("job_id");

                entity.Property(e => e.CustomerId).HasColumnName("customer_id");

                entity.Property(e => e.JobDescription)
                    .HasColumnType("text")
                    .HasColumnName("job_description");

                entity.Property(e => e.JobEnd)
                    .HasColumnType("datetime")
                    .HasColumnName("job_end");

                entity.Property(e => e.JobStart)
                    .HasColumnType("datetime")
                    .HasColumnName("job_start");

                entity.Property(e => e.JobStat)
                    .IsRequired()
                    .HasMaxLength(10)
                    .IsUnicode(false)
                    .HasColumnName("job_stat")
                    .IsFixedLength(true);

                entity.Property(e => e.JobTitle)
                    .IsRequired()
                    .HasMaxLength(100)
                    .IsUnicode(false)
                    .HasColumnName("job_title");

                entity.HasOne(d => d.Customer)
                    .WithMany(p => p.Jobs)
                    .HasForeignKey(d => d.CustomerId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_jobs_customers");
            });

            modelBuilder.Entity<Quote>(entity =>
            {
                entity.ToTable("quotes");

                entity.Property(e => e.QuoteId).HasColumnName("quote_id");

                entity.Property(e => e.JobId).HasColumnName("job_id");

                entity.Property(e => e.QuoteAmount).HasColumnName("quote_amount");

                entity.Property(e => e.QuoteDate)
                    .HasColumnType("datetime")
                    .HasColumnName("quote_date");

                entity.Property(e => e.QuoteFinalAmount).HasColumnName("quote_final_amount");

                entity.Property(e => e.QuoteFinalDate)
                    .HasColumnType("date")
                    .HasColumnName("quote_final_date");

                entity.Property(e => e.QuoteState)
                    .IsRequired()
                    .HasMaxLength(10)
                    .IsUnicode(false)
                    .HasColumnName("quote_state")
                    .IsFixedLength(true);

                entity.HasOne(d => d.Job)
                    .WithMany(p => p.Quotes)
                    .HasForeignKey(d => d.JobId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_quotes_jobs");
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
