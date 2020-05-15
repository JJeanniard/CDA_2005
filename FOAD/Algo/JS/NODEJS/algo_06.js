var alpha = "abcdefghijklmnopqrstuvwxyz";
var caractfirstPlayer = "anticonstitutionnellement", caratSecondPlayer;
var trySecondPlayer = 0;
var temp = [], caratT = [], answer = false;

if (caractfirstPlayer.length >= 5) {
    for (var i = 0; i < caractfirstPlayer.length; i++) {
        temp[i] = caractfirstPlayer[i];

        if (i > 0 && i < caractfirstPlayer.length - 1) {
            temp[i] = "_";
        }

    }

    while (trySecondPlayer < 6) {

        //TODO faire une entrée clavier pour une lettre && verifier que soit q'un seul caractere.
        caratSecondPlayer = alpha[Math.floor(Math.random() * alpha.length)];
        console.log(caratSecondPlayer);

        for(var y = 0; y < caractfirstPlayer.length; y++){
            if(caractfirstPlayer[y] == caratSecondPlayer){
                temp[y] = caractfirstPlayer[y];
                answer = true;
            }
        }

        if(answer){
            console.log('Bingo');
            console.log(""+ temp);3
            answer = false;
        }else{
            answer = false;
            console.log('Retante ta chance!  ' + (trySecondPlayer + 1))
            trySecondPlayer++;
        }

    }

} else {
    console.log("Le mot est trot court!")
}