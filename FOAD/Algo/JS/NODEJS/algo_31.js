const readline = require('readline');

var nbrT = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});

const searchElement = function (element){

    if(element === null || element === undefined || element === ""){
        console.error("Champs vide ou invalide");
        return false;
    }

    /* if(!Number.isNaN(element) ){
        console.error("Le champs doit contenir un nombre!");
        return false;
    } */

    for(let i = 0; i < nbrT.length-1; i++){
        if (element == nbrT[i]) {
            return console.log("Element trouve à l'index: " + i);
        }
    }

    if (element > nbrT.length - 1) {
        return console.error("Element non trouvé");
    }
}

rl.question("Entrer un nombre?? ", answer => {
    searchElement(answer);
});