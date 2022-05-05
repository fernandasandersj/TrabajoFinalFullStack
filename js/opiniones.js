'user strict'


window.addEventListener("load",()=>{

//OPINIONES

const opiniones1=document.querySelector("#opiniones1"); 
const opiniones2=document.querySelector("#opiniones2");
const opiniones3=document.querySelector("#opiniones3");
const btnOpinion1=document.querySelector("#btnOpinion1");
const btnOpinion2=document.querySelector("#btnOpinion2");
const btnOpinion3=document.querySelector("#btnOpinion3");
const opiniones=document.querySelector("#opiniones");
    

//OPINIONES EVENTO

opiniones.addEventListener('click',(ev)=>{
  
    if(ev.target.matches('#btnOpinion1')){
        btnOpinion1.classList.toggle('btnOpinionesSelect');
        btnOpinion2.classList.remove('btnOpinionesSelect');   
        btnOpinion3.classList.remove('btnOpinionesSelect'); 
        opiniones1.classList.remove('d-none');  
        opiniones2.classList.add('d-none');  
        opiniones3.classList.add('d-none');  

    }

    if(ev.target.matches('#btnOpinion2')){
        btnOpinion2.classList.toggle('btnOpinionesSelect');  
        btnOpinion3.classList.remove('btnOpinionesSelect');
        btnOpinion1.classList.remove('btnOpinionesSelect');
        opiniones2.classList.remove('d-none');  
        opiniones1.classList.add('d-none');  
        opiniones3.classList.add('d-none');  
    }

    if(ev.target.matches('#btnOpinion3')){
        btnOpinion3.classList.toggle('btnOpinionesSelect');  
        btnOpinion1.classList.remove('btnOpinionesSelect');
        btnOpinion2.classList.remove('btnOpinionesSelect');   
        opiniones3.classList.remove('d-none');
        opiniones1.classList.add('d-none');
        opiniones2.classList.add('d-none');    
    }
    

});


}); //LOAD