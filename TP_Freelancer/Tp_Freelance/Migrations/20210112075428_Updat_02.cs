using Microsoft.EntityFrameworkCore.Migrations;

namespace Tp_Freelance.Migrations
{
    public partial class Updat_02 : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropPrimaryKey(
                name: "PK_Quote",
                table: "Quote");

            migrationBuilder.DropPrimaryKey(
                name: "PK_Job",
                table: "Job");

            migrationBuilder.RenameTable(
                name: "Quote",
                newName: "quotes");

            migrationBuilder.RenameTable(
                name: "Job",
                newName: "jobs");

            migrationBuilder.RenameColumn(
                name: "Name",
                table: "customers",
                newName: "customer_name");

            migrationBuilder.RenameColumn(
                name: "Email",
                table: "customers",
                newName: "customer_email");

            migrationBuilder.RenameColumn(
                name: "CatId",
                table: "customers",
                newName: "cat_id");

            migrationBuilder.RenameColumn(
                name: "Id",
                table: "customers",
                newName: "customer_id");

            migrationBuilder.RenameColumn(
                name: "amount",
                table: "quotes",
                newName: "quote_amount");

            migrationBuilder.RenameColumn(
                name: "Stat",
                table: "quotes",
                newName: "quote_state");

            migrationBuilder.RenameColumn(
                name: "QuoteFinalDate",
                table: "quotes",
                newName: "quote_final_date");

            migrationBuilder.RenameColumn(
                name: "JobId",
                table: "quotes",
                newName: "job_id");

            migrationBuilder.RenameColumn(
                name: "FinalAmount",
                table: "quotes",
                newName: "quote_final_amount");

            migrationBuilder.RenameColumn(
                name: "Date",
                table: "quotes",
                newName: "quote_date");

            migrationBuilder.RenameColumn(
                name: "Id",
                table: "quotes",
                newName: "quote_id");

            migrationBuilder.RenameColumn(
                name: "Title",
                table: "jobs",
                newName: "job_title");

            migrationBuilder.RenameColumn(
                name: "Stat",
                table: "jobs",
                newName: "job_stat");

            migrationBuilder.RenameColumn(
                name: "Start",
                table: "jobs",
                newName: "job_start");

            migrationBuilder.RenameColumn(
                name: "End",
                table: "jobs",
                newName: "job_end");

            migrationBuilder.RenameColumn(
                name: "Description",
                table: "jobs",
                newName: "job_description");

            migrationBuilder.RenameColumn(
                name: "CustomerId",
                table: "jobs",
                newName: "customer_id");

            migrationBuilder.RenameColumn(
                name: "Id",
                table: "jobs",
                newName: "job_id");

            migrationBuilder.AlterColumn<string>(
                name: "quote_state",
                table: "quotes",
                type: "char(10)",
                maxLength: 10,
                nullable: false,
                oldClrType: typeof(string),
                oldType: "nvarchar(1)");

            migrationBuilder.AlterColumn<string>(
                name: "job_stat",
                table: "jobs",
                type: "char(10)",
                maxLength: 10,
                nullable: false,
                oldClrType: typeof(string),
                oldType: "nvarchar(1)");

            migrationBuilder.AlterColumn<string>(
                name: "job_description",
                table: "jobs",
                type: "text",
                nullable: true,
                oldClrType: typeof(string),
                oldType: "nvarchar(max)",
                oldNullable: true);

            migrationBuilder.AddPrimaryKey(
                name: "PK_quotes",
                table: "quotes",
                column: "quote_id");

            migrationBuilder.AddPrimaryKey(
                name: "PK_jobs",
                table: "jobs",
                column: "job_id");
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropPrimaryKey(
                name: "PK_quotes",
                table: "quotes");

            migrationBuilder.DropPrimaryKey(
                name: "PK_jobs",
                table: "jobs");

            migrationBuilder.RenameTable(
                name: "quotes",
                newName: "Quote");

            migrationBuilder.RenameTable(
                name: "jobs",
                newName: "Job");

            migrationBuilder.RenameColumn(
                name: "customer_name",
                table: "customers",
                newName: "Name");

            migrationBuilder.RenameColumn(
                name: "customer_email",
                table: "customers",
                newName: "Email");

            migrationBuilder.RenameColumn(
                name: "cat_id",
                table: "customers",
                newName: "CatId");

            migrationBuilder.RenameColumn(
                name: "customer_id",
                table: "customers",
                newName: "Id");

            migrationBuilder.RenameColumn(
                name: "quote_state",
                table: "Quote",
                newName: "Stat");

            migrationBuilder.RenameColumn(
                name: "quote_final_date",
                table: "Quote",
                newName: "QuoteFinalDate");

            migrationBuilder.RenameColumn(
                name: "quote_final_amount",
                table: "Quote",
                newName: "FinalAmount");

            migrationBuilder.RenameColumn(
                name: "quote_date",
                table: "Quote",
                newName: "Date");

            migrationBuilder.RenameColumn(
                name: "quote_amount",
                table: "Quote",
                newName: "amount");

            migrationBuilder.RenameColumn(
                name: "job_id",
                table: "Quote",
                newName: "JobId");

            migrationBuilder.RenameColumn(
                name: "quote_id",
                table: "Quote",
                newName: "Id");

            migrationBuilder.RenameColumn(
                name: "job_title",
                table: "Job",
                newName: "Title");

            migrationBuilder.RenameColumn(
                name: "job_stat",
                table: "Job",
                newName: "Stat");

            migrationBuilder.RenameColumn(
                name: "job_start",
                table: "Job",
                newName: "Start");

            migrationBuilder.RenameColumn(
                name: "job_end",
                table: "Job",
                newName: "End");

            migrationBuilder.RenameColumn(
                name: "job_description",
                table: "Job",
                newName: "Description");

            migrationBuilder.RenameColumn(
                name: "customer_id",
                table: "Job",
                newName: "CustomerId");

            migrationBuilder.RenameColumn(
                name: "job_id",
                table: "Job",
                newName: "Id");

            migrationBuilder.AlterColumn<string>(
                name: "Stat",
                table: "Quote",
                type: "nvarchar(1)",
                nullable: false,
                oldClrType: typeof(string),
                oldType: "char(10)",
                oldMaxLength: 10);

            migrationBuilder.AlterColumn<string>(
                name: "Stat",
                table: "Job",
                type: "nvarchar(1)",
                nullable: false,
                oldClrType: typeof(string),
                oldType: "char(10)",
                oldMaxLength: 10);

            migrationBuilder.AlterColumn<string>(
                name: "Description",
                table: "Job",
                type: "nvarchar(max)",
                nullable: true,
                oldClrType: typeof(string),
                oldType: "text",
                oldNullable: true);

            migrationBuilder.AddPrimaryKey(
                name: "PK_Quote",
                table: "Quote",
                column: "Id");

            migrationBuilder.AddPrimaryKey(
                name: "PK_Job",
                table: "Job",
                column: "Id");
        }
    }
}
