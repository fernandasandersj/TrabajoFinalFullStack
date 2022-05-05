'user strict'


window.addEventListener("load",()=>{


// GENERAL
    
// MENU MOBILE | FRONT

const btn_menu_mob=document.querySelector("#btn_menu_mob");
const desplegable_menu_mob=document.querySelector("#desplegable_menu_mob");
const body=document.querySelector("#body");


// Evento menu mob

btn_menu_mob.addEventListener("click",()=>{
    desplegable_menu_mob.classList.toggle("transformX");
    body.classList.toggle("OverlayRespuestaContacto");
    desplegable_menu_mob.classList.toggle("d-none");
});






}); //LOAD