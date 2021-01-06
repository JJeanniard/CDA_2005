using Microsoft.EntityFrameworkCore.Migrations;

namespace Tp_Freelance.Migrations
{
    public partial class initialUpdate : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<int>(
                name: "JobId",
                table: "Quote",
                type: "int",
                nullable: false,
                defaultValue: 0);

            migrationBuilder.AddColumn<int>(
                name: "CustomerId",
                table: "Job",
                type: "int",
                nullable: false,
                defaultValue: 0);

            migrationBuilder.AddColumn<int>(
                name: "CatId",
                table: "Customer",
                type: "int",
                nullable: false,
                defaultValue: 0);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "JobId",
                table: "Quote");

            migrationBuilder.DropColumn(
                name: "CustomerId",
                table: "Job");

            migrationBuilder.DropColumn(
                name: "CatId",
                table: "Customer");
        }
    }
}
