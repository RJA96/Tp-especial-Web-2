"use strict";
let templatecomentarios;
document.querySelector(".Coment").addEventListener("click", getComentarios)

fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
    templatecomentarios = Handlebars.compile(template); // compila y prepara el template
    getComentarios();
});
function getComentarios() {
    fetch("api/comentario")
    .then(r => r.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
    })
}

function mostrarComentarios(jsonComentarios) {
    let context = {
        comentarios: jsonComentarios,
    }
    let html = templateTareas(context);
    document.querySelector(".Comentarios").innerHTML = html;
}
    // setTimeout(load(), 2000);
