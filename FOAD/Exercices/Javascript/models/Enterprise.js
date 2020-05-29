
const Employee = require('./Employee.js');

/**
 * Gestion d'employés
 */
class Enterprise {
    constructor() {
        this.employees = [];
    }

    /**
     * 
     * @param  _filter 
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
     */
    create(_employee) {
        this.employees.push(_employee);
    }

    /**
     * 
     * @param int _id 
     */
    read(_id) {
        let id = parseInt(_id), resultat;

        let empl = function (emp){
            return emp.id === id;
        }
        resultat = this.employees.find(empl);

        if(resultat === undefined){
            resultat = false;
        }

        return resultat;
    }

    /**
     * Met à jour un employé
     * @param Employee _employee 
     */
    update(_employee) {
        let index = 0;

        let empl = function (emp){
            return emp.id === _employee.id;
        }
        index = this.employees.findIndex(empl);
        if(index === -1){
            return false;
        }
        this.employees.splice(index, 1, _employee);
        return true;
    }

    /**
     * Supprime un employé
     * @param int _id 
     */
    delete(_id) {
        let index = 0, id = parseInt(_id);

        let empl = function (emp){
            return emp.id === _id;
        }
        index = this.employees.findIndex(empl);
        if(index === -1){
            return false;
        }
        this.employees.splice(index, 1);
        return true;
    }

    /**
     * return l'objet employee avec le plus gros salaires
     */
    getHigherSalary() {
        let result = this.readAll("salary");
        return result[this.employees.length-1];
    }

    /**
     * return l'objet employee avec le plus petit salaires
     */
    getLowerSalary() {
        let result = this.readAll("salary");
        return result[0];
    }

    /**
     * return la diff entre low et higher salary
     */
    getSalaryGap() {
        return this.getHigherSalary().salary - this.getLowerSalary().salary;
    }
}

module.exports = Enterprise;