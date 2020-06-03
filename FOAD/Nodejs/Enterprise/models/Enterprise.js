
const Employee = require('./Employee.js');

/**
 * Gestion d'employés
 */
class Enterprise {
    constructor() {
        this.employees = [];
    }

    /**
     * Affichage de tout les employés par un ordre de filtrage 
     * @param  _filter
     * @returns Employee
     */
    readAll(_filter) {

        let empl = function (a, b){
            switch (_filter) {
                case "hiredate":
                    return a.hiredate - b.hiredate;
                case "salary":
                    return a.salary - b.salary;
                default:
                    return a.id - b.id;
            }
        }

        return this.employees.sort(empl);
    }

    /**
     * Créer un employé
     * @param Employee _employee
     * @returns void
     */
    create(_employee) {
        if((typeof _employee) !== Employee)
            this.employees.push(_employee);
    }

    /**
     * 
     * @param int _id 
     * @returns Employee
     */
    read(_id) {
        let id = parseInt(_id), resultat;

        /*let empl = function (emp){
            return emp.id === id;
        }*/
        resultat = this.employees.find(emp => emp.id === id);

        if(resultat === undefined)
            resultat = undefined;

        return resultat;
    }

    /**
     * Met à jour un employé
     * @param Employee _employee
     * @returns boolean
     */
    update(_employee) {
        let index = 0;

        if((typeof _employee) !== Employee)
            return false;

        /*let empl = function (emp){
            return emp.id === _employee.id;
        }*/
        index = this.employees.findIndex(emp => emp.id === _employee.id);
        
        if(index === -1)
            return false;
        
        this.employees.splice(index, 1, _employee);
        return true;
    }

    /**
     * Supprime un employé
     * @param int _id
     * @returns boolean
     */
    delete(_id) {
        let index = 0, id = parseInt(_id);

        /*let empl = function (emp){
            return emp.id === _id;
        }*/
        index = this.employees.findIndex(emp => emp.id === _id);
        if(index === -1){
            return false;
        }
        this.employees.splice(index, 1);
        return true;
    }

    /**
     * return l'objet employee avec le plus gros salaires
     * @returns Employee
     */
    getHigherSalary() {
        let result = this.readAll("salary");
        return result[this.employees.length-1];
    }

    /**
     * return l'objet employee avec le plus petit salaires
     * @returns Employee
     */
    getLowerSalary() {
        let result = this.readAll("salary");
        return result[0];
    }

    /**
     * return la diff entre low et higher salary
     * @returns Employee
     */
    getSalaryGap() {
        return this.getHigherSalary().salary - this.getLowerSalary().salary;
    }
}

module.exports = Enterprise;//Attention au retour obligatoire en JS
