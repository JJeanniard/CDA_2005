var caractfirstPlayer = "laval", caratSecondPlayer = "a";
var trySecondPlayer = 0;
var temp = [], caratT = [];

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
            } else {
                console.log('Retant ta chance!')
                trySecondPlayer++;
            }
        }
    }

    console.log(temp);

} else {
    console.log("Le mot est trot court!")
}