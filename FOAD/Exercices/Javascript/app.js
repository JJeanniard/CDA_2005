const Employee = require("./models/Employee.js");


var employee1 = new Employee(1, 'Doe', 'John', 'manager', 82000, new Date('2020-05-01'));
var employee2 = new Employee(2, 'Amza', 'Red', 'ouvrier', 21000, new Date('2016-03-02'));
var employee3 = new Employee(3, 'tarat', 'Blue', 'sous-fifre', 18000, new Date('2020-03-02'));
var employee4 = new Employee(4, 'Turit', 'Yellow', 'boss', 150000, new Date('1990-05-30'));
var employee5 = new Employee(5, 'Lomol', 'Brown', 'stagiaire', 9000, new Date('1520-05-27'));

const employees = [employee1];

employees.push(employee2);
employees.push(employee3);
employees.push(employee4);
employees.push(employee5);

for (let i = 0; i < employees.length; i++) {
    console.log(employees[i].getSeniority());
}