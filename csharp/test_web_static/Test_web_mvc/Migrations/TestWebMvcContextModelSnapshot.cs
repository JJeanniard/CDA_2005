﻿// <auto-generated />
using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using TestWebMvc.Data;

namespace TestWebMvc.Migrations
{
    [DbContext(typeof(TestWebMvcContext))]
    partial class TestWebMvcContextModelSnapshot : ModelSnapshot
    {
        protected override void BuildModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .UseIdentityColumns()
                .HasAnnotation("Relational:MaxIdentifierLength", 128)
                .HasAnnotation("ProductVersion", "5.0.2");

            modelBuilder.Entity("TestWebMvc.Models.Customer", b =>
                {
                    b.Property<int>("Customer_Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .HasColumnName("customer_id")
                        .UseIdentityColumn();

                    b.Property<int>("Cat_Id")
                        .HasColumnType("int");

                    b.Property<string>("Customer_Name")
                        .IsRequired()
                        .HasMaxLength(100)
                        .HasColumnType("nvarchar(100)")
                        .HasColumnName("customer_name");

                    b.HasKey("Customer_Id");

                    b.ToTable("customers");
                });

            modelBuilder.Entity("TestWebMvc.Models.CustomerCat", b =>
                {
                    b.Property<int>("Cat_Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .HasColumnName("cat_id")
                        .UseIdentityColumn();

                    b.Property<string>("Cat_Name")
                        .IsRequired()
                        .HasMaxLength(50)
                        .HasColumnType("nvarchar(50)")
                        .HasColumnName("cat_name");

                    b.Property<int?>("Customer_Id")
                        .HasColumnType("int");

                    b.HasKey("Cat_Id");

                    b.HasIndex("Customer_Id");

                    b.ToTable("customers_cats");
                });

            modelBuilder.Entity("TestWebMvc.Models.CustomerCat", b =>
                {
                    b.HasOne("TestWebMvc.Models.Customer", null)
                        .WithMany("Cats")
                        .HasForeignKey("Customer_Id");
                });

            modelBuilder.Entity("TestWebMvc.Models.Customer", b =>
                {
                    b.Navigation("Cats");
                });
#pragma warning restore 612, 618
        }
    }
}
