"user strict"


window.addEventListener("load",()=>{


// MENU MOBILE |

const nav_mob_admin=document.querySelector("#nav_mob_admin");
const desplegable_menu_mob_admin=document.querySelector("#desplegable_menu_mob_admin");
const body=document.querySelector("#body");


// Evento menu mob

nav_mob_admin.addEventListener("click",()=>{
    desplegable_menu_mob_admin.classList.toggle("transformX");
    desplegable_menu_mob_admin.classList.toggle("d-none");
    body.classList.toggle("d-body");   
    body.classList.toggle("OverlayRespuestaContacto");
});


});