const readline = require('readline');
var mot = "anticonstitutionnellement.";

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

if (mot.length < 1) {
    console.log("Pas de mot!");
    return false;
}

if(mot === '.'){
    console.log("Ceci est pas un mot!")
    return false;
}

if ("." !== mot[mot.length - 1]) {
    console.log("Le mot finit pas part un point!");
    return false;
}

rl.question("Entrer la lettre, pour retouner le nombre d'occurence: ", answer => {

    let i = 0, nbrOcurence = 0;

    //TODO verifier si c'est bien un caractere

    while (i < mot.length) {
        if (answer === mot[i]) {
            nbrOcurence++;
        }
        i++;
    }

    if (nbrOcurence >= 1) {
        return console.info("La lettre est présente ",nbrOcurence," fois!");
    } else {
        return console.info("La lettre n'est pas présente!");
    }

});

