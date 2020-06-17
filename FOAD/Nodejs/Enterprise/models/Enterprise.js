const fs = require('fs');//chargement du module pour créé un fichier json et le lire
const patch = require('path');//module pour resoudre un probléme de chemin relatif

const Employee = require('./Employee.js');

/**
 * Gestion d'employés par crud
 */
class Enterprise {

    constructor(_name) {
        this.employees = [];
        this.name = _name || "fantome";
        this.file = patch.resolve(__dirname, '../data/' + _name + '.json');
        this.bdd(this.file);//appeler l'hors de l'instance enterprise
    }

    /**
     * Attention ceci n'est pas de la svg en bdd,
     * mais sur un fichier json.
     * verification et ouverture du fichier,
     * pour recuperer des données et les svgs par la suite sur le même fch.
     * @param string _file chemin du fichier 
     */
    bdd(_file){
        if (fs.existsSync(_file)) {
            let row = fs.readFileSync(this.file);

            let data = JSON.parse(row);//convertion du json en objet

            /**
             * creation de chaque emplois qui ce trouve dans le fichier.
             * Qui est en suite disponible dans une collection   
            */
            data.forEach(empl => {
                this.create(empl);
            });
            
        } else {
            //si fichier non existent creation de celui ci et demande à l'utilisateur de reload.
            fs.writeFileSync(_name, "[]");
            console.log('file created, please reload program!');
        }
    }

    /**
     * @returns boolean
     * @param _employee Employee 
     */
    isValid(_employee) {
        if (!_employee instanceof Employee)
            return false;

        return true;
    }

    /**
     * Affichage de tout les employés par un ordre de filtrage 
     * @param  _filter
     * @returns Employee
     */
    readAll(_filter) {
        return this.employees.filter(_filter);
    }

    save(){
        fs.writeFileSync(this.file, JSON.stringify(this.employees));
    }

    /**
     * Créer un employée
     * @param Employee _employee
     * @returns Employee
     */
    create(_employee) {
        if (this.isValid(_employee))
            this.employees.push(_employee);
        return _employee;
    }

    /**
     * 
     * @param int _id 
     * @returns Employee
     */
    read(_id) {
        let result;
        let emp = this.employees.find(emp => emp.id === _id);
        if (emp !== undefined) {
            result = Object.assign(emp, this.employees);
        }
        return result;
    }

    /**
     * Met à jour un employé
     * @param Employee _employee
     * @returns boolean
     */
    update(_employee) {

        if (!this.isValid(_employee))
            return false;

        /*let empl = function (emp){
            return emp.id === _employee.id;
        }*/

        let index = this.employees.find(emp => emp === _employee);
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
        if (this.read(_id) !== undefined)
            return false;

        this.employees.splice(this.read(_id), 1);
        return true;
    }

    /**
     * return l'objet employee avec le plus gros salaires
     * @returns Employee
     */
    getHigherSalary() {
        let result = this.employees.sort((a, b) => (a.salary - b.salary));
        return result[this.employees.length - 1];
    }

    /**
     * return l'objet employee avec le plus petit salaires
     * @returns Employee
     */
    getLowerSalary() {
        let result = this.employees.sort((b, a) => (a.salary - b.salary));
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
