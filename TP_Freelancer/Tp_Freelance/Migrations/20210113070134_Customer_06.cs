using Microsoft.EntityFrameworkCore.Migrations;

namespace Tp_Freelance.Migrations
{
    public partial class Customer_06 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_customers_customers_cats_cat_id",
                table: "customers");

            migrationBuilder.DropIndex(
                name: "IX_customers_cat_id",
                table: "customers");

            migrationBuilder.DropColumn(
                name: "cat_id",
                table: "customers");

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

        protected override void Down(MigrationBuilder migrationBuilder)
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

            migrationBuilder.AddColumn<int>(
                name: "cat_id",
                table: "customers",
                type: "int",
                nullable: false,
                defaultValue: 0);

            migrationBuilder.CreateIndex(
                name: "IX_customers_cat_id",
                table: "customers",
                column: "cat_id");

            migrationBuilder.AddForeignKey(
                name: "FK_customers_customers_cats_cat_id",
                table: "customers",
                column: "cat_id",
                principalTable: "customers_cats",
                principalColumn: "Id",
                onDelete: ReferentialAction.Cascade);
        }
    }
}
