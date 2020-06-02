//fonction annonyme
this.test = 6;

test = function(_test){
    this.test = _test;
}

test2 = function(){
    let vart = 5;
    let temp = vart;
    let tempp = this.test;
    test(vart);
    vart = tempp;
}

test2();