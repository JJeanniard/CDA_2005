using Microsoft.EntityFrameworkCore.Migrations;

namespace TestWebMvc.Migrations
{
    public partial class initEntites_02 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_customers_customers_cats_cat_id",
                table: "customers");

            migrationBuilder.DropIndex(
                name: "IX_customers_cat_id",
                table: "customers");

            migrationBuilder.RenameColumn(
                name: "cat_id",
                table: "customers",
                newName: "Cat_Id");

            migrationBuilder.AddColumn<int>(
                name: "Customer_Id",
                table: "customers_cats",
                type: "int",
                nullable: true);

            migrationBuilder.CreateIndex(
                name: "IX_customers_cats_Customer_Id",
                table: "customers_cats",
                column: "Customer_Id");

            migrationBuilder.AddForeignKey(
                name: "FK_customers_cats_customers_Customer_Id",
                table: "customers_cats",
                column: "Customer_Id",
                principalTable: "customers",
                principalColumn: "customer_id",
                onDelete: ReferentialAction.Restrict);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_customers_cats_customers_Customer_Id",
                table: "customers_cats");

            migrationBuilder.DropIndex(
                name: "IX_customers_cats_Customer_Id",
                table: "customers_cats");

            migrationBuilder.DropColumn(
                name: "Customer_Id",
                table: "customers_cats");

            migrationBuilder.RenameColumn(
                name: "Cat_Id",
                table: "customers",
                newName: "cat_id");

            migrationBuilder.CreateIndex(
                name: "IX_customers_cat_id",
                table: "customers",
                column: "cat_id");

            migrationBuilder.AddForeignKey(
                name: "FK_customers_customers_cats_cat_id",
                table: "customers",
                column: "cat_id",
                principalTable: "customers_cats",
                principalColumn: "cat_id",
                onDelete: ReferentialAction.Cascade);
        }
    }
}
