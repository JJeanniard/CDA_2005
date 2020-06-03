//echec de l'exo méthode non comprise
let biblioOfName = ["agathe", "berthe", "chloé", "cunégonde", "olga", "raymonde", "sidonie"]

let valeurSaissi = "raymonde";

function rec(tab, val, a, b){
    //b taille de mon tableau
    console.log(val);

    if(a >= b){
        if(val.localeCompare(tab[a]) == 0){
            return a;
        }

        if(a > 0 && val.localeCompare(tab[a-1]) == 0){
            return a - 1;
        }
        
        return -1;
    }

    var m = Math.floor((a+b)/2);
    console.log(m);
    if(val.localeCompare(tab[m]) <= 0){
        return rec(tab, val, a, m);
    }else{
        console.log(tab + " " + val + " " + (m+1) + " " + b);
        return rec(tab, val, m+1, b)
    }
}

function search(tab, val){
    return rec(tab, val, 0, tab.length-1);
}

let i = search(biblioOfName, valeurSaissi);

console.log("index " + i);

//Thanks Ben&Nuts