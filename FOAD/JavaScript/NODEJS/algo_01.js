const readline = require('readline');

var nbrT = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});

rl.question("Entrer un nombre?? ", answer => {
    let nbr = answer, i = 0;
    //TODO il serai interesent de verifier ce que l'utlisateur rentre comme données
    
    while (i < nbrT.length) {
        if (nbr == nbrT[i]) {
            return console.log("Element trouve à l'index: " + i);
        }
        i++;
    }

    if (i > 9) {
        return console.error("Element non trouvé");
    }
});