let biblioOfName = ["agathe", "berthe", "chloé", "cunégonde", "olga", "raymonde", "sidonie"]

let valeurSaissir = "olga";

function rec(tab, val, a, b){

    if(a >= b){
        if(valeurSaissir.localeCompare(tab[a])){
            return a - 1;
        }
        if(a > 0 && valeurSaissir.localeCompare(tab[a-1])){
            return a -1;
        }
        return -1;
    }

    let m = (a+b)/2;
    if(valeurSaissir.localeCompare(tab[m]) <= 0){
        return rec(tab, val, a, m);
    }else{
        return rec(tab, val, m+1, b)
    }
}

function search(tab, val){

    let b = biblioOfName.length-1;

    return rec(tab, val, 0, b);
}

let i = search(biblioOfName, valeurSaissir);

console.log("index " , i);