"use strict";


function load(){
  let container = document.querySelector(".comentarios");
  fetch(api/comentario)
            .then(r => r.json())
            .then(json =>  mostrar(container, json))
            .catch(error => container.innerHTML= "error");
    setTimeout(load(), 2000);
}


function getGeneros(){
    fetch("api/genero")
}
function mostrar (container, json){

}
function mostrarGeneros(){
    let context ={
        generos: jsongeneros
    }
    html = templategenero(context);
}

function mostar(){
    let div = container;
    aux = json.comentario;
}