function menu() {
    //todo : revoir ceci
    let actmenu = document.getElementById("act-menu");

    let sousMenu = actmenu.getElementsByTagName("ul");


    function openMenu(){
        if (!sousMenu.hidden) {
            console.log("test1");
            sousMenu.removeAttribute("id", "sous-menu");
            sousMenu.setAttribute("id", "sous-menu1");
            sousMenu.setAttribute("hidden", "true");

        } else {
            console.log("test2");
            sousMenu.setAttribute("hidden", "false");
            sousMenu.removeAttribute("id", "sous-menu");
            sousMenu.setAttribute("id", "sous-menu1");

        }
    }

    actmenu.addEventListener("click", openMenu);



}