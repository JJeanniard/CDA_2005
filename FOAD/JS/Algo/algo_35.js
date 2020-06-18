//palindrome
let mot = "LAVAL A ETE A LAVAL.", temp, j, i = 0;

if(mot.length < 1){
    console.log("Veillez entrer un mot de plus d'un caractére.");
    return false;
}

if(mot[mot.length-1] !== "."){
    console.log("Veillez inserer un point en de mot ou de phrase.");
    return false;
}

if(mot.split(".").length > mot.length){
    console.log("LA CHAINE EST VIDE");
    return false;
}

temp = mot.split(".")[0];
j = temp.length-1;

for (var index = 0; index < j; index++) {
    if(temp[index] == temp[j]){
        i++;
    }
    j--;
}

if(i>j/2){
    return console.log("la chaîne de caractères est un palindrome");
} else {
    return console.log("la chaîne de caractères n'est pas un palindrome");
}
