"use strict";


function load(){
  let container = document.querySelector(".comentarios");
  fetch(api/comentario)
            .then(r => r.json())
            .then(json =>  mostrar(container, json))
            .then(mostrarfiltros)
            .then(resaltar)
            .catch(error => container.innerHTML= "error");
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
