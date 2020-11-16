(function() {
    let actmenu = document.getElementById("act-menu");
    let sousMenu = document.getElementById("sous-menu");


    function openMenu(){
        if(sousMenu.hidden){
            sousMenu.removeAttribute("hidden");
            sousMenu.setAttribute("id", "sous-menu");
        }else {
            sousMenu.setAttribute("hidden", true);
            sousMenu.removeAttribute("id", "sous-menu");
        }
    }

    actmenu.addEventListener("click", openMenu);
})();