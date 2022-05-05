"user strict"


window.addEventListener("load",()=>{


// INICIAR SESION | ADMIN 

const ojoPassword=document.querySelector("#ojoPassword");
const password=document.querySelector("#password");
const formulario2=document.querySelector("#formulario2");
const campoUsuario=document.querySelector("#usuario");
const campoPassword=document.querySelector("#password");


// PAGINA INICIAR SESION | ADMIN

// Evento Ojo Password

ojoPassword.addEventListener("click",(ev)=>{

    ev.preventDefault

    ojoPassword.classList.toggle("green");

    if(password.type==="text"){
        password.type="password";
        
    }else{
        password.type="text";
    }

});


//VALIDACION FORMULARIOS

/* Estudie la opcion de crear una funcion para poder reutilizar  la validacion en esta misma hoja de JS, pero ya que en la parte del BACK los otros formularios son los de subir archivos y la inormacion que se solicita no es la misma, preferí validar con una funcion unica para el inicio de sesion que si se podría reuitlizar en caso de que los usuarios pudiesen iniciar a su area privada. */


let validacion={
    usuario:false,
    password:false,
};


// formulario2.addEventListener("submit",(ev)=>{

//     ev.preventDefault();
//     validarIniciarSesion();

// });

// Le indico que el password solo puede contener entre 3 y 15 caracteres pero que puede ser de cualquier tipo 

let regExp={
    usuario:/^[A-Z,a-z,Á-ý]{1,50}$/,
    password:/^[a-zA-Z0-9_ñ]{3,15}$/
};

// Funcion que valida a través de JS el inicio de sesion en el admin

const validarIniciarSesion=()=>{

if(regExp.usuario.test(usuario)){
    validacion.usuario=true;
        if(validacion.usuario=true){
            campoUsuario.classList.add("checkFormulario");
            campoUsuario.classList.remove("rojoFormulario");
        }
}else{
    validacion.usuario=false;
    if(validacion.usuario=false){
        campoUsuario.classList.add("rojoFormulario");
        campoUsuario.classList.remove("checkFormulario");
    }
}

if(regExp.password.test(password)){
    validacion.password=true;
    if(validacion.password=true){
        campoPassword.classList.add("checkFormulario");
        campoPassword.classList.remove("rojoFormulario");
    }
}else{
    validacion.password=false;
    if(validacion.password=false){
        campoPassword.classList.add("rojoFormulario");
        campoPassword.classList.remove("checkFormulario");
    }
}


};



}); //LOAD