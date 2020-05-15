//palindrome
var mot = "laval";
var j = 0;
j = mot.length -1;

for (var index = 0; index < mot.length; index++) {
    console.log(mot[index] + " " + mot[j]);
    if(mot[index] == mot[j]){
        console.log('ok');
    }
    j--;
}

