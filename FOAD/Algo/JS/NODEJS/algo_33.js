const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});

searchOcc = function (chainStr) {
    let nbrOc = [24], alpha = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    
    if (chainStr.length <= 120) {
        console.log("Le text est inferieur à 120 lettre!");
        return false;
    }

    for (let i = 0;i < chainStr.length;i++) {
        for (let y = 0; y < alpha.length; y++) {
            if (nbrOc[y] === undefined) {
                nbrOc[y] = 0;
            }

            if (alpha[y] == chainStr[i]) {
                nbrOc[y] = nbrOc[y] + 1;
            }
            
        }
        y = 0;
    }

    //le chiffre à été remplacer par la taille du tableau de l'alphabet
    for(let x = 0; x < alpha.length; x++) {
        console.log("Nombre de lettre " + nbrOc[x] + " pour " + alpha[x]);
        x++;
    }
}

rl.question("Entrer un text de 120 lettre minimum: ", answer => {
    searchOcc(answer);
    rl.close();
});