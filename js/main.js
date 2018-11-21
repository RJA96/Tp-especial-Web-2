"use strict";
let templatecomentarios;
document.querySelector(".Coment").addEventListener("click", load);
document.querySelector(".comentario-js").addEventListener("click", create);
function load(){
  fetch('js/templates/comentarios.handlebars')
    .then(response => response.text())
    .then(template => {
      templatecomentarios = Handlebars.compile(template); // compila y prepara el template
      getComentarios();
    });
}

function borrar(id){
  console.log("borrar");
  console.log(id);
  fetch("api/comentario/"+id,  {
                   method: 'DELETE',
                    headers: {'Content-Type': 'application/json'},
                    })
                    .then(r => load())
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
    let adminn = document.querySelector(".admin").getAttribute("data");
    console.log(adminn);
    if (adminn==="admin") {
      adminn = true;
    }
    else {
      adminn = false;
    }
    let context = {
        comentarios: jsonComentarios,
        esadmin: adminn
    }
    let html = templatecomentarios(context);
    document.querySelector(".Comentarios").innerHTML = html;
    let b = document.querySelectorAll(".borrar");

    b.forEach(b=> {b.addEventListener("click",function(){borrar(b.getAttribute("data"))});
       });

}

function create(){
  let ID = document.querySelector('#id_p').getAttribute("data");
  let comentario = {
    "coment": document.querySelector(".comentario").value,
    "id_pelicula": document.querySelector('#id_p').getAttribute("data"),
    "id_usuario": document.querySelector(".admin").getAttribute("data-nombre")
  }
  console.log(comentario);
  fetch("api/comentario/"+ID,  {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(comentario)
              })
              .then(r => load())
              .catch(error => console.log("error"));
}
