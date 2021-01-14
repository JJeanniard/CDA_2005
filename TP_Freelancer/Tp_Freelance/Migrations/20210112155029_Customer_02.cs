using Microsoft.EntityFrameworkCore.Migrations;

namespace Tp_Freelance.Migrations
{
    public partial class Customer_02 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.RenameColumn(
                name: "cat_id",
                table: "customers",
                newName: "CustomerCat");

            migrationBuilder.CreateIndex(
                name: "IX_customers_CustomerCat",
                table: "customers",
                column: "CustomerCat");

            migrationBuilder.AddForeignKey(
                name: "FK_customers_customers_cats_CustomerCat",
                table: "customers",
                column: "CustomerCat",
                principalTable: "customers_cats",
                principalColumn: "Id",
                onDelete: ReferentialAction.Cascade);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_customers_customers_cats_CustomerCat",
                table: "customers");

            migrationBuilder.DropIndex(
                name: "IX_customers_CustomerCat",
                table: "customers");

            migrationBuilder.RenameColumn(
                name: "CustomerCat",
                table: "customers",
                newName: "cat_id");
        }
    }
}
