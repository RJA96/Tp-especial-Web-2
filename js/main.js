"use strict";
let templatecomentarios;
document.querySelector(".Coment").addEventListener("click", load);
function load(){
fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
    templatecomentarios = Handlebars.compile(template); // compila y prepara el template
    getComentarios();
});
}

function getComentarios() {
    let ID = document.querySelector('#id_p').getAttribute("data");
    console.log(ID);
    fetch("api/comentario/"+ID)
    .then(r => r.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
    })
}

function mostrarComentarios(jsonComentarios) {
    let context = {
        comentarios: jsonComentarios,
    }
    let html = templatecomentarios(context);
    document.querySelector(".Comentarios").innerHTML = html;
}
    // setTimeout(load(), 2000);
