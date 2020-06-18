const readline = require('readline');

let firstPlayerChaine = "anticonstitutionnellement";
let trySecondPlayer = 0, tempChaine = [], answer = false, isInit = false;

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

if (firstPlayerChaine.length < 5) {
    console.log("Le mot est tros court.");
    return false;
}

if (typeof firstPlayerChaine !== "string") {
    console.error("vous avez entré une chaine de caractére!")
    return false;
}

inLastPls = function (answer) {
    rl.question('Second joueur entré une lettre: ', answer => {
        isMotValid(answer);
        
    });
}

isMotValid = function (str) {
    if (str.length < 1 || str.length > 1) {
        console.error("Vous avez pas entré de caratere ou il y en a trop!");
        rl.close();
        return false;
    }

    if(trySecondPlayer > 5 ){
        console.log("Perdu");
        rl.close();
        return false;
    }

    if (!isInit) {
        for (var i = 0; i < firstPlayerChaine.length; i++) {
            if (i == 0 || i == firstPlayerChaine.length - 1) {
                tempChaine[0] = firstPlayerChaine[0];
                tempChaine[firstPlayerChaine.length - 1] = firstPlayerChaine[firstPlayerChaine.length - 1];

            } else {
                tempChaine[i] = "_";
            }
        }
        isInit = true;
    }

    console.log("Voici des indices : " + tempChaine);


    for (var y = 0; y < firstPlayerChaine.length; y++) {
        if (firstPlayerChaine[y] == str) {
            tempChaine[y] = firstPlayerChaine[y];
            answer = true;
        }
    }

    if (answer) {
        console.log('Bingo');
        console.log("" + tempChaine);
        answer = false;
        inLastPls();
    } else {
        answer = false;
        console.log('Retante ta chance!  ' + (6 - (trySecondPlayer + 1)))
        trySecondPlayer++;
        inLastPls();
    }
}

inLastPls();