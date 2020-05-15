/* Triage dans un tableau
 *
*/
var tab = ["5", "2", "6", "7", "1", "4", "8", "3", "0", "9"], temp = 0;

for(var index = 0; index < tab.length; index++) {
    for(var j = 1; j < tab.length; j++) {
        if (tab[j] < tab[index]) {
            temp = tab[index];
            tab[index] = tab[j];
            tab[j] = temp;
        }
    }
}

console.log("" + tab);
