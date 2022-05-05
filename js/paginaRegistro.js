"user strict"


window.addEventListener("load",()=>{


// REGISTRO| ADMIN 

const ojoPassword=document.querySelector("#ojoPassword");
const ojoPassword2=document.querySelector("#ojoPassword2");
const password=document.querySelector("#password");
const password2=document.querySelector("#password2");
const formulario3=document.querySelector("#formulario3");


// Evento Ojo Password

formulario3.addEventListener("click",(ev)=>{
    ev.preventDefault;
    if(ev.target.matches('#ojoPassword')){
        ojoPassword.classList.toggle("green");

        if(password.type==="text"){
            password.type="password";
            
        }else{
            password.type="text";
        }
    }

    if(ev.target.matches('#ojoPassword2')){
        alert('hola');
        ojoPassword2.classList.toggle("green");

        if(password2.type==="text"){
            password2.type="password";
            
        }else{
            password2.type="text";
        }
    }

});



}); //LOAD