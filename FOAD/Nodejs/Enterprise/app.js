const Employee = require("./models/Employee.js");
const Enterprise = require("./models/Enterprise.js");

let enter1ple1 = new Enterprise('DEV2005');

let idObj = 1;
emp1 = {
    id: idObj++, 
    lastname: 'Doe', 
    firtname: 'John', 
    role: 'manager', 
    salary: 82000, 
    hiredate: new Date('2020-05-01')}

emp1 = new Employee(emp1)

enter1ple1.create(new Employee(emp1));

/* enter1ple1.create(new Employee(idObj++, 'Amza', 'Red', 'ouvrier', 21000, new Date('2016-03-02')));
enter1ple1.create(new Employee(idObj++, 'tarat', 'Blue', 'sous-fifre', 18000, new Date('2020-03-02')));
enter1ple1.create(new Employee(idObj++, 'Turit', 'Yellow', 'boss', 150000, new Date('1990-05-30')));
enter1ple1.create(new Employee(idObj++, 'Lomol', 'Brown', 'stagiaire', 9000, new Date('1520-05-27')));
 */
enter1ple1.save();