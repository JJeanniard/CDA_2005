
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
        let empl = function (emp){
            return emp.id === _id;
        }
        return this.employees.find(empl);
    }

    /**
     * Met à jour un employé
     * @param Employee _employee 
     */
    update(_employee) {

    }

    /**
     * Supprime un employé
     * @param int _id 
     */
    delete(_id) {
        let empl = function (emp){
            return emp.id === _id;
        }
        return this.employees.find(empl);
    }


    /**
     * 
     */
    getHigherSalary() {

    }

    /**
     * 
     */
    getLowerSalary() {

    }

    /**
     * 
     */
    getSalaryGap() {

    }


}

module.exports = Enterprise;