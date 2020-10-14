//Objet en JS
var personne;

personne = {
    //Propriété
    name: ['jean', 'Martin'],
    age: 32,
    sexe: 'Masculin',
    //Méthode
    bio: function () {
        console.log(this.name[0] + ' ' + this.name[1] + ' a ' + this.age + ' ans.');
    },
    hello: function () {
        console.log('Hello, it is ' + this.name[0]);
    }
};

var notification;
notification = new Notification('Hello!')