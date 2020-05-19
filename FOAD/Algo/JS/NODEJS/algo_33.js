const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
});

rl.question("Entrer un text de 120 lettre minimum: ", answer => {
    var nbrOc = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0], alpha = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    var i = 0, y = 0, x = 0;

    if (answer.length >= 120) {
        while (i < answer.length) {
            console.log("deb_0 " + answer[i]);
            while (y <= alpha.length) {
                if (alpha[y] == answer[i]) {
                    console.log("deb_2 " + answer[i]);
                    nbrOc[y] = nbrOc[y] + 1;
                    console.log("deb " + nbrOc[y])
                }
                y++;
            }
            i++,y = 0;
        }
        //le chiffre à été remplacer par la taille du tableau de l'alphabet
        while (x < alpha.length) {
            console.log("Nombre de lettre " + nbrOc[x] + " pour " + alpha[x]);
            x++;
        }

    } else {
        return console.log("Le text est inferieur à 120 lettre!")
    }
});