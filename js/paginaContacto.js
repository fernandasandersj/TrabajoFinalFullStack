'user strict'


window.addEventListener("load",()=>{


// CONTACTO | FRONT

const formulario1=document.querySelector('#formulario1');
const campoNombre=document.querySelector('#nombre');
const campoEmail=document.querySelector('#correo');
const campoAsunto=document.querySelector('#asunto');
const campoMensaje=document.querySelector('#mensaje');
const errorTodosLosCampos=document.querySelector("#errorTodosLosCampos");
const ModalRespuestaContacto=document.querySelector("#ModalRespuestaContacto");
var submitContacto=document.querySelector("#submitContacto");


formulario1.addEventListener('submit',(ev)=>{
    ModalRespuestaContacto.classList.remove("d-none");

});

// Evento close Btn Modal 

close_ModalContacto.addEventListener('click',()=>{

    ModalRespuestaContacto.classList.add("d-none");

});



// // //Pagina Contacto


// // // Recojo todos los campos que debo utilizar para la validacion del formulario.

// // // Creo que evento que contiene la funcion encargad a de la validacion de dichos inputs. Para proceder a dicha validación creo expresiones regulares que faciltan el trabajo y además una vez creadas las puedo utilizar más adelante optimizando el tiempo. 

// let validacion={
//     nombre:false,
//     email:false,
//     asunto:false,
//     mensaje:false,
// };

// formulario1.addEventListener("submit",(ev)=>{
   
//     ev.preventDefault();
//     validarInput();

// });

// // VALIDACION Javascript Pagina Contacto 

// let regExp={
//     nombre:/^[A-Z,a-z,Á-ý]{1,50}$/,
//     email:/^[a-zA-Z0-9_\-.+]+@{1}[a-zA-Z0-9_\-.+]+\.([a-zA-Z0-9_\-.+]+){1,2}$/g,
//     asunto:/^[A-Z,a-z,Á-ý]{1,50}$/,
//     mensaje:/.+/gm
// };



// function componentDidMount() {
//     window.scrollTo(0, 0);
// };



// const validarInput=()=>{

//     // Campo Nombre 

//     if(regExp.nombre.test(campoNombre.value)){
//         validacion.nombre=true;
//             if(validacion.nombre=true){
//                 campoNombre.classList.add("checkFormulario");
//                 campoNombre.classList.remove("rojoFormulario");
//             }
//     }else{
//         validacion.nombre=false;
//         if(validacion.nombre=false){
//             campoNombre.classList.add("rojoFormulario");
//             campoNombre.classList.remove("checkFormulario");
//             componentDidMount();
//         }
//     }


//     // Campo Correo 

//     if(regExp.email.test(campoEmail.value)){
//         validacion.email=true;
//             if(validacion.email=true){
//                 campoEmail.classList.add("checkFormulario");
//                 campoEmail.classList.remove("rojoFormulario");
//             }
//     }else{
//         validacion.email=false;
//             if(validacion.email=false){
//                 campoEmail.classList.add("rojoFormulario");
//                 campoEmail.classList.remove("checkFormulario");
//                 componentDidMount();
//             }   

//     }

//     // Validacion Asunto 

//     if(regExp.asunto.test(campoAsunto.value)){
//         validacion.asunto=true;
//             if(validacion.asunto=true){
//                 campoAsunto.classList.add("checkFormulario");
//                 campoAsunto.classList.remove("rojoFormulario");
//             }
//     }else{

//         validacion.asunto=false;
//         if(validacion.asunto=false){
//             campoAsunto.classList.add("rojoFormulario");
//             campoAsunto.classList.remove("checkFormulario");
            
//             componentDidMount();
//         }
//     }


//     // Validacion Mensaje 

//     if(regExp.mensaje.test(campoMensaje.value)){
//         validacion.mensaje=true;
//             if(validacion.mensaje=true){
//                 campoMensaje.classList.add("checkFormulario");
//                 campoMensaje.classList.remove("rojoFormulario");
//             }
//     }else{

//         validacion.mensaje=false;
//         if(validacion.mensaje=false){
//             campoMensaje.classList.add("rojoFormulario");
//             campoMensaje.classList.remove("checkFormulario");
//             componentDidMount();
//         }
//     }



//     } 




// }  // validarInput


}); //LOAD