using Microsoft.EntityFrameworkCore.Migrations;

namespace Tp_Freelance.Migrations
{
    public partial class Customer_07 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_customers_cats_customers_cat_id",
                table: "customers_cats");

            migrationBuilder.DropIndex(
                name: "IX_customers_cats_cat_id",
                table: "customers_cats");

            migrationBuilder.DropColumn(
                name: "cat_id",
                table: "customers_cats");

            migrationBuilder.RenameColumn(
                name: "customer_id",
                table: "jobs",
                newName: "CustomerId");

            migrationBuilder.AddColumn<int>(
                name: "CatId",
                table: "customers",
                type: "int",
                nullable: false,
                defaultValue: 0);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "CatId",
                table: "customers");

            migrationBuilder.RenameColumn(
                name: "CustomerId",
                table: "jobs",
                newName: "customer_id");

            migrationBuilder.AddColumn<int>(
                name: "cat_id",
                table: "customers_cats",
                type: "int",
                nullable: true);

            migrationBuilder.CreateIndex(
                name: "IX_customers_cats_cat_id",
                table: "customers_cats",
                column: "cat_id");

            migrationBuilder.AddForeignKey(
                name: "FK_customers_cats_customers_cat_id",
                table: "customers_cats",
                column: "cat_id",
                principalTable: "customers",
                principalColumn: "customer_id",
                onDelete: ReferentialAction.Restrict);
        }
    }
}
