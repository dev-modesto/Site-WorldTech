let btn = document.getElementById("env");
let ul = document.querySelector(".ativar");
let menubtn =  document.querySelector("#menu-ico")



menubtn.addEventListener("click", menu);

function menu(){
    if(ul.classList.contains('open')){
        ul.classList.remove('open');
    }else{
        ul.classList.add('open');
    }
}

menubtn.onclick = () => {
    menubtn.classList.toggle('bx-x');
}




let remover = document.querySelector(".ativar");

window.onscroll = () => {
    menubtn.classList.remove('bx-x');
    remover.classList.remove('open');
}

let menuDropUser = document.querySelector(".dropUser")
let btn_perfil = document.querySelector(".perfil_btn");

btn_perfil.addEventListener("click", myFunction);

function myFunction(){
    if(menuDropUser.style.display === "block"){
        menuDropUser.style.display = "none";
    }
    else{
        menuDropUser.style.display = "block";
    }
}

