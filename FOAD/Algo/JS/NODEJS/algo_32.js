const readline = require('readline');
let mot = "anticonstitutionnellement.";

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

isOccMot = function(chaineStr){

    if(chaineStr === ""){
        console.error("L'entrer est vide ou il y a que des points ou il y a une erreur.");
        return false;
    }

    if(chaineStr[chaineStr.length-1] !== "."){
        console.error("La phrase ou le mot ne finit pas part un point.")
        return false;
    }

    if((chaineStr.split('.').length-1) > 1){
        console.error("La phrase ou le mot comporte que des points.");
        return false;
    }

    /* if(typeof(chaineStr) !== "string"){
        console.error("Ceci n'est pas un mot ou une phrase.");
        return false;
    } */
}

isInputStr = function(str){
    if(str === ""){
        console.error("L'entrer est vide ou il y a que des points ou il y a une erreur.");
        return false;
    }
    if(str.length > 1){
        console.error("On a demandé une lettre.")
        return false;
    }
}

isOccMot(mot);

occuStr = function(str){
    isInputStr(str);
    resultat = mot.split(str).length - 1;

    if (resultat >= 1) {
        return console.info("La lettre est présente ",resultat," fois!");
    } else {
        return console.info("La lettre n'est pas présente!");
    }
}

rl.question("Entrer la lettre, pour retouner le nombre d'occurence: ", answer => {
    occuStr(answer);
    rl.close();
});

