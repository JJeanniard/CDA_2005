const Enterprise = require("../models/Enterprise.js");
const Employee = require("../models/Employee.js");

let enterprise = new Enterprise("DEV2005"); //creation de l'instance enterprise avec un parametre pour créé un fichier json avec

/* let idObj = 1;

emp1 = {
  id: idObj++,
  lastname: "Doe",
  firstname: "John",
  role: "manager",
  salary: 82000,
  hiredate: new Date("2020-05-01"),
};

emp2 = {
  id: idObj++,
  lastname: "Amza",
  firstname: "Red",
  role: "ouvrier",
  salary: 19000,
  hiredate: new Date("2016-05-01"),
};

emp3 = {
  id: idObj++,
  lastname: "Tarat",
  firstname: "Blue",
  role: "sous-fifre",
  salary: 17000,
  hiredate: new Date("2020-05-01"),
};

enterprise.create(new Employee(emp1));
enterprise.create(new Employee(emp2));
enterprise.create(new Employee(emp3)); */
/*
enter1ple1.create(new Employee(idObj++, 'Turit', 'Yellow', 'boss', 150000, new Date('1990-05-30')));
enter1ple1.create(new Employee(idObj++, 'Lomol', 'Brown', 'stagiaire', 9000, new Date('1520-05-27')));
 */
//enterprise.save();


//maintenant que tout le monde est svg on peut, joueur avec

/**
 * Utilisation de la même instance de enterprise pour recuperé cet fois ci le fichier avec les données.
 */

console.log(enterprise.readAll((a,b) => (a.salary - b.salary)));

emp1 = {
    "id": 5,
    "lastname": "Lomol",
    "firstname": "Brown",
    "role": "stagiaire",
    "salary": 300,
    "hiredate": new Date("1800-05-01"),
  };

enterprise.create(new Employee(emp1))
enterprise.save()
