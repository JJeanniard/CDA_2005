const readline = require('readline');
var mot = "anticonstitutionnellement";

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question("Entrer la lettre, pour retouner le nombre d'occurence: ", answer => {
    let i = 0, nbrOcurence = 0;

    while (i < mot.length) {
        if (answer == mot[i]) {
            nbrOcurence = nbrOcurence + 1;
        } else if (answer == "." && i == mot.length) {
            console.error("La phrase est vide!")
        }
        i++;
    }

    if (nbrOcurence >= 1) {
        return console.info("La lettre est présente plusieurs fois!")
    } else {
        return console.info("La lettre n'est pas présente!")
    }
});