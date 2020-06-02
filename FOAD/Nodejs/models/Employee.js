/**
 * JAVASCRIPT:  Exercices
 * 
 * Listing d'employés
 * 
 * Consignes : 
 * A l'aide de la syntaxe orientée "classes", modélisez un objet "Employee" possédant les caractéristiques suivantes :
 *  Attributs: 
 *  - id (int): identifiant
 *  - lastname (string): nom
 *  - firstname (string): prénom
 *  - email (string): calculé automatiquement dans le constructeur (exemple: John Doe => jdoe@email.fr)
 *  - role (string): poste occupé
 *  - salary (int): salaire annuel BRUT
 *  - hiredate (Date): date d'embauche au format YYYY-MM-DD
 * 
 *  Méthodes:
 *  - getMonthlySalary() : retourne un entier -> le salaire mensuel NET calculé à partir du salaire annuel (salaire_mensuel = salaire_annuel / 12 * 0.75)
 *  - getSeniority() : renvoie une chaine -> l'ancienneté de l'employé (exemples: "19 jours", "3 mois et 2 jours", "2 ans 7 mois et 8 jours") 
 * 
 * Une fois modélisé et testé, complétez le tableau "employees" pour qu'il contienne 5 employés au total (ni plus, ni moins).
 * Parcourir ensuite le tableau complété et afficher chaque employé dans la console (nom, prénom, email, ancienneté, salaire mensuel NET)
 * Afficher ensuite, individuellement : 
 *  - L'employé ayant le plus d'ancienneté
 *  - L'employé avec le plus haut salaire
 *  - L'employé avec le plus bas salaire
 *  - La différence de salaire entre les 2 précédents 
 * 
 * Documentation Javascript complète: https://developer.mozilla.org/fr/docs/Web/JavaScript
 * Tutoriel Javascript: https://www.pierre-giraud.com/javascript-apprendre-coder-cours/introduction/ 
 */

/* COMPLÉTEZ LE PROGRAMME... */

/**
 * @class Employee
 */
class Employee {

    constructor(_id, _lastname, _firstname, _role, _salary, _hiredate) {
        this.id = parseInt(_id || 0);
        this.lastname = _lastname;
        this.firstname = _firstname;
        this.email = (this.firstname[0].concat(this.lastname)).toLowerCase().concat("@email.fr");
        this.role = _role;
        this.salary = _salary;
        this.hiredate = _hiredate;
    }

    getMonthlySalary() {
        // (salaire_mensuel = salaire_annuel / 12 * 0.75)
        return Math.round(this.salary / 12 * 0.75);
    }

    getSeniority() {
        //TODO: Corrigée le calcule de date dégative
        const dateToDay = new Date();
        let date;
        
        let diff = dateToDay.getTime() - this.hiredate.getTime();

        let years = dateToDay.getFullYear() - this.hiredate.getFullYear();
        let month = dateToDay.getMonth() - this.hiredate.getMonth();
        let day = dateToDay.getDate() - this.hiredate.getDate();

        if(month <= 0){
            years--;
            month += 12;
        }

        if(day <= 0){
            month--;
            day = Math.floor(day + 365.25/12);
        }

        if (years >= 2) {
            date =  years + " ans " + month + " mois " + day + " jours";
        } else if (years < 2 && month >= 3) {
            date = month + " mois " + day + " jours";
        } else {
            date = day + " jours";
        }
        return date;
    }
}

module.exports = Employee;

/** DÉBUT ZONE NON EDITABLE (Ne pas modifier les lignes suivantes) */


// /** @var Employee employee1 */
// var employee1 = new Employee(1, 'Doe', 'John', 'manager', 82000, new Date('2020-05-01')); // création d'un nouvel employé
// var employee2 = new Employee(2, 'Amza', 'Red', 'ouvrier', 21000, new Date('2016-03-02'));
// var employee3 = new Employee(3, 'tarat', 'Blue', 'sous-fifre', 18000, new Date('2020-03-02'));
// var employee4 = new Employee(4, 'Turit', 'Yellow', 'boss', 150000, new Date('1990-05-30'));
// var employee5 = new Employee(5, 'Lomol', 'Brown', 'stagiaire', 9000, new Date('1520-05-27'));
// /** @var array employees */
// const employees = [employee1, employee2, employee3, employee4, employee5]; // tableau contenant les employés

// console.log(employee1); // doit afficher l'objet "employee1"
// console.log("Il y a " + employees.length + " employé(e)s."); // doit afficher "Il y a 5 employé(e)s."
// console.log(employees); // export des employés dans la console


// /** FIN ZONE NON EDITABLE (Ne pas modifier les lignes précédentes) */



// // Écrivez votre code à partir de la ligne suivante...



// let f = function(a, b){
//     return a.hiredate - b.hiredate;
// }

// employees.sort(f);

// for (let index = 0; index < employees.length; index++) {
//     const element = employees[index];
//     console.log("########################")
//     console.log("nom: " + element.lastname);
//     console.log("Prénom: " + element.firstname);
//     console.log("Email: " + element.email);
//     console.log("Role: " + element.role);
//     console.log("Salaire Net: " + element.getMonthlySalary());
//     console.log("Anciennete: " + element.getSeniority() + "");
// }



//traitement pour le plus vieux
/* let tempT = 0;

for (let index = 0; index < employees.length; index++) {
    for (let j = 0; j < employees.length; j++) {
        if (employees[j].timesForSenior() < employees[index].timesForSenior()) {
            tempT = employees[index];
            employees[index] = employees[j];
            employees[j] = tempT;
        }
    }
}

console.log(employees[0].firstname + " est le plus encien de la societe")


//traitement pour le salaire
let tempSl = 0;

for (let index = 0; index < employees.length; index++) {
    for (let j = 0; j < employees.length; j++) {
        if (employees[j].salaryBt < employees[index].salaryBt) {
            tempSl = employees[index];
            employees[index] = employees[j];
            employees[j] = tempSl;
        }
    }
}
console.log("#############################");
console.log("Le plus bas salaire est de", employees[employees.length - 1].getMonthlySalary(), "€");
console.log("Le plsu haut salaire est de", employees[0].getMonthlySalary(), "€");
console.log("La difference entre le plus bas salaire et le plus haut est de", (employees[0].salaryBt - employees[employees.length - 1].salaryBt), "€"); */