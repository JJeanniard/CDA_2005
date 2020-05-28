
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
        //rechercher par filtre

        let search = function(a,b){
            return a._filter - b._filter;
        }
        
  
        return this.employees.sort(search);
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