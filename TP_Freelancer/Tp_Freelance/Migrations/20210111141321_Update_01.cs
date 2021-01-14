using Microsoft.EntityFrameworkCore.Migrations;

namespace Tp_Freelance.Migrations
{
    public partial class Update_01 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropPrimaryKey(
                name: "PK_CustomerCat",
                table: "CustomerCat");

            migrationBuilder.DropPrimaryKey(
                name: "PK_Customer",
                table: "Customer");

            migrationBuilder.RenameTable(
                name: "CustomerCat",
                newName: "customers_cats");

            migrationBuilder.RenameTable(
                name: "Customer",
                newName: "customers");

            migrationBuilder.RenameColumn(
                name: "Name",
                table: "customers_cats",
                newName: "cat_name");

            migrationBuilder.RenameColumn(
                name: "Description",
                table: "customers_cats",
                newName: "cat_description");

            migrationBuilder.AlterColumn<string>(
                name: "cat_name",
                table: "customers_cats",
                type: "varchar(50)",
                maxLength: 50,
                nullable: false,
                oldClrType: typeof(string),
                oldType: "nvarchar(50)",
                oldMaxLength: 50);

            migrationBuilder.AlterColumn<string>(
                name: "cat_description",
                table: "customers_cats",
                type: "Text",
                nullable: true,
                oldClrType: typeof(string),
                oldType: "nvarchar(max)",
                oldNullable: true);

            migrationBuilder.AddPrimaryKey(
                name: "PK_customers_cats",
                table: "customers_cats",
                column: "Id");

            migrationBuilder.AddPrimaryKey(
                name: "PK_customers",
                table: "customers",
                column: "Id");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropPrimaryKey(
                name: "PK_customers_cats",
                table: "customers_cats");

            migrationBuilder.DropPrimaryKey(
                name: "PK_customers",
                table: "customers");

            migrationBuilder.RenameTable(
                name: "customers_cats",
                newName: "CustomerCat");

            migrationBuilder.RenameTable(
                name: "customers",
                newName: "Customer");

            migrationBuilder.RenameColumn(
                name: "cat_name",
                table: "CustomerCat",
                newName: "Name");

            migrationBuilder.RenameColumn(
                name: "cat_description",
                table: "CustomerCat",
                newName: "Description");

            migrationBuilder.AlterColumn<string>(
                name: "Name",
                table: "CustomerCat",
                type: "nvarchar(50)",
                maxLength: 50,
                nullable: false,
                oldClrType: typeof(string),
                oldType: "varchar(50)",
                oldMaxLength: 50);

            migrationBuilder.AlterColumn<string>(
                name: "Description",
                table: "CustomerCat",
                type: "nvarchar(max)",
                nullable: true,
                oldClrType: typeof(string),
                oldType: "Text",
                oldNullable: true);

            migrationBuilder.AddPrimaryKey(
                name: "PK_CustomerCat",
                table: "CustomerCat",
                column: "Id");

            migrationBuilder.AddPrimaryKey(
                name: "PK_Customer",
                table: "Customer",
                column: "Id");
        }
    }
}
