var caractfirstPlayer = "anticonstitutionnellement", caratSecondPlayer = "n";
var trySecondPlayer = 0;
var temp = [], caratT = [], answer;

if (caractfirstPlayer.length >= 5) {
    for (var i = 0; i < caractfirstPlayer.length; i++) {
        temp[i] = caractfirstPlayer[i];

        if (i > 0 && i < caractfirstPlayer.length - 1) {
            temp[i] = "_";
        }

    }

    while (trySecondPlayer <= 6) {

        //TODO faire une entrée clavier pour une lettre && verifier que soit q'un seul caractere.

        for(var y = 0; y < caractfirstPlayer.length; y++){
            if(caractfirstPlayer[y] == caratSecondPlayer){
                console.log('Bingo');
                temp[y] = caractfirstPlayer[y];
                answer = true;
            }else{
                answer = false;
            }
        }

        if(answer){
            console.log(""+ temp);
        }else{
            console.log('Retante ta chance!  ' + trySecondPlayer)
            trySecondPlayer++;
        }

        
    }

} else {
    console.log("Le mot est trot court!")
}