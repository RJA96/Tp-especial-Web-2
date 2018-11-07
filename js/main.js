"use strict";
let templatecomentarios;

fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
    templatecomentarios = Handlebars.compile(template); // compila y prepara el template

    getComentarios();
});
function getComentarios() {
    fetch("api/comentario")
    .then(response => response.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
    })
}

function mostrarComentarios(jsonComentarios) {
    let context = { // como el assign de smarty
        comentarios: jsonComentarios, 
        otra: "hola"
    }
    let html = templateTareas(context);
    document.querySelector(".Comentarios").innerHTML = html;
}


function load(){
  let container = document.querySelector(".Comentarios");
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