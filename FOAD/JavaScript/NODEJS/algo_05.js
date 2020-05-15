//palindrome
var mot = "laval";
var j = 0;
j = mot.length -1;

//TODO testé si la phrase est vide
//TODO renvoyer un message si c'est un palindrome ou pas

for (var index = 0; index < mot.length; index++) {
    console.log(mot[index] + " " + mot[j]);
    if(mot[index] == mot[j]){
        console.log('ok');
    }
    j--;
}

