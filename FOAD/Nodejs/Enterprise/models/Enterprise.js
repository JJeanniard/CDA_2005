
const Employee = require('./Employee.js');

/**
 * Gestion d'employés
 */
class Enterprise {
    constructor() {
        this.employees = [];
    }

    /**
     * @returns boolean
     * @param _employee Employee 
     */
    isValid(_employee){
        if(!_employee instanceof Employee)
            return false;

        return true;
    }

    /**
     * Affichage de tout les employés par un ordre de filtrage 
     * @param  _filter
     * @returns Employee
     */
    readAll(_filter) {

        /* let empl = function (a, b){
            switch (_filter) {
                case "hiredate":
                    return a.hiredate - b.hiredate;
                case "salary":
                    return a.salary - b.salary;
                default:
                    return a.id - b.id;
            }
        } */

        return this.employees.filter(_filter);
    }

    /**
     * Créer un employée
     * @param Employee _employee
     * @returns Employee
     */
    create(_employee) {
        if(this.isValid(_employee))
            this.employees.push(_employee);

        return _employee;
    }

    /**
     * 
     * @param int _id 
     * @returns Employee
     */
    read(_id) {
        /* let id = parseInt(_id), resultat;

        let empl = function (emp){
            return emp.id === id;
        
        resultat = this.employees.find(emp => emp.id === id);

        if(resultat === undefined)
            resultat = undefined;

        return resultat; */
        let emp = this.employees.find(emp => emp.id === _id);
        if(emp !== undefined){
            let result = Object.assign(emp, this.employees.id);
            return result;
        }
        return result;
    }

    /**
     * Met à jour un employé
     * @param Employee _employee
     * @returns boolean
     */
    update(_employee) {
        let index = 0;

        if(!this.isValid(_employee))
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
        let result = this.employees.sort((a, b) => (a.salary-b.salary));
        return result[this.employees.length-1];
    }

    /**
     * return l'objet employee avec le plus petit salaires
     * @returns Employee
     */
    getLowerSalary() {
        let result = this.employees.sort((b, a) => (a.salary-b.salary));
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
