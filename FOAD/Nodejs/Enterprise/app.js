const Employee = require("./models/Employee.js");
const Enterprise = require("./models/Enterprise.js");

let empl = new Enterprise();
let idObj = 1;

empl.create(new Employee(idObj++, 'Doe', 'John', 'manager', 82000, new Date('2020-05-01')))
empl.create(new Employee(idObj++, 'Amza', 'Red', 'ouvrier', 21000, new Date('2016-03-02')));
empl.create(new Employee(idObj++, 'tarat', 'Blue', 'sous-fifre', 18000, new Date('2020-03-02')));
empl.create(new Employee(idObj++, 'Turit', 'Yellow', 'boss', 150000, new Date('1990-05-30')));
empl.create(new Employee(idObj++, 'Lomol', 'Brown', 'stagiaire', 9000, new Date('1520-05-27')));
//mise à jour de l'employé
empl.update(new Employee(4, 'Turit', 'Yellow', 'boss', 150001, new Date('1990-05-30')));
//affiché les employés par ordre de salaire
console.log(empl.readAll(emp => emp.hiredate < new Date()));
//affichage d'un employé
console.log("retrouner l'employée demander", empl.read(2));

//getHigherSalary
console.log(empl.getHigherSalary());