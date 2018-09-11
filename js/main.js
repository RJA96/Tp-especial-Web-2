"use strict";
document.querySelector('.home').addEventListener("click", function(){mostrarpag("server/home.html")});
document.querySelector('.all-movies').addEventListener("click", function(){mostrarpag("server/allmovies.html")});
document.querySelector('.sugerencias').addEventListener("click", function(){mostrarpag("server/sugerencias.html")});
document.querySelector('.contacto').addEventListener("click", function(){mostrarpag("server/contacto.html")});
document.querySelector('.login').addEventListener("click", function(){mostrarpag("server/login.html")});
const urlserver = "http://web-unicen.herokuapp.com/api/groups/6-Aguilar/peliculas";
mostrarpag("server/home.html");


//Menu Parcial Render
function mostrarpag(url) {
  let container = document.querySelector(".use-ajax");
    fetch(url)
      .then(response => {
        response.text().then(t=> {
          container.innerHTML = t;

          if (url==="server/login.html"){
            document.querySelector('.registrarse').addEventListener("click", function(){mostrarpag("server/registrar.html")});
          }
          if (url==="server/allmovies.html"){
            document.querySelector(".upload").addEventListener("click", create);
            document.querySelector(".uploadx3").addEventListener("click", createx3);
            document.querySelector(".delete").addEventListener("click", delate);
            document.querySelector(".edit").addEventListener("click", edit);
            document.querySelector(".filtrar").addEventListener("click", filtrar);
            load();
          }
        })

      .catch(error => console.log(error))
    });
}

//TABLA REST
let aux = 0;
function load(){
  let container = document.querySelector(".peliculas");
  fetch(urlserver)
            .then(r => r.json())
            .then(json =>  mostrar(container, json))
            .then(mostrarfiltros)
            .then(resaltar)
            .catch(error => container.innerHTML= "error");
}

function mostrar (container, json){
  let div = container;
  div.innerHTML = '';
  aux = json.peliculas.length;
  for (let i = 0; i < json.peliculas.length; i++) {
    let id = json.peliculas[i]._id;
    let node = document.createElement("tr");
    let tdin = document.createElement("td");
    let td0 = document.createElement("input");
    let tdnombre = document.createElement("td");
    let tdgenero = document.createElement("td");
    let tdaño = document.createElement("td");
    let tdvaloracion = document.createElement("td");
    let tdduracion = document.createElement("td");
    let nombre = document.createTextNode(json.peliculas[i].thing.Nombre);
    let genero = document.createTextNode(json.peliculas[i].thing.Genero);
    let año = document.createTextNode(json.peliculas[i].thing.Año);
    let valoracion = document.createTextNode(json.peliculas[i].thing.Valoracion);
    let duracion = document.createTextNode(json.peliculas[i].thing.Duracion);
    td0.setAttribute("data-pelis", i);
    td0.setAttribute("type", "checkbox");
    td0.setAttribute("value", id);
    node.appendChild(tdin);
    tdin.appendChild(td0);
    node.appendChild(tdnombre);
    tdnombre.appendChild(nombre);
    node.appendChild(tdgenero);
    tdgenero.appendChild(genero);
    node.appendChild(tdaño);
    tdaño.appendChild(año);
    node.appendChild(tdvaloracion);
    tdvaloracion.appendChild(valoracion);
    node.appendChild(tdduracion);
    tdduracion.appendChild(duracion);
    div.appendChild(node);
    }
}

function resaltar(){
  let tr = document.getElementsByTagName("tr");
  let  td = tr[3].getElementsByTagName("td");

  for (let i = 1; i < tr.length; i++) {
    tr = document.getElementsByTagName("tr");
    td = tr[i].getElementsByTagName("td");
    let año = td[3].innerText;
    if (año==2018){
      tr[i].classList.add("resaltado")
    }
  }
}

function create(){
  let pelicula = {
    "Nombre": MaysPrimera(document.querySelector(".Nombre").value),
    "Genero": MaysPrimera(document.querySelector(".Genero").value),
    "Año": document.querySelector(".Año").value,
    "Valoracion": document.querySelector(".Valoracion").value,
    "Duracion":document.querySelector(".Duracion").value
  }
  let objeto = {
    "thing": pelicula
  }
  fetch(urlserver,  {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(objeto)
              })
              .then(r => load())
              .then(aux +=1)
              .catch(error => console.log("error"));
}


function createx3(){
  let pelicula = {
    "Nombre": MaysPrimera(document.querySelector(".Nombre").value),
    "Genero": MaysPrimera(document.querySelector(".Genero").value),
    "Año": document.querySelector(".Año").value,
    "Valoracion": document.querySelector(".Valoracion").value,
    "Duracion":document.querySelector(".Duracion").value
  }
  let objeto = {
    "thing": pelicula
  }
  for (let i = 0; i < 3; i++) {
    fetch(urlserver,  {
                  method: 'POST',
                  headers: {'Content-Type': 'application/json'},
                  body: JSON.stringify(objeto)
                })
                .then(r => load())
                .then(aux +=1)
                .catch(error => console.log("error"));
  }
}

function delate (){
  let auxi = aux;
  for (let i = 0; i < auxi; i++) {
    if (document.querySelector('[data-pelis="'+i+'"]').checked){
      let urld = urlserver+"/"+document.querySelector('[data-pelis="'+i+'"]').value;
      fetch(urld,  {
                   method: 'DELETE',
                    headers: {'Content-Type': 'application/json'},
                    })
                    .then(r => load())
                    .then(aux -=1)
                    .catch(error => console.log("error"));
    }
  }
}

function edit (){
  for (let i = 0; i < aux; i++) {
    if (document.querySelector('[data-pelis="'+i+'"]').checked){
      let urld = urlserver+"/"+document.querySelector('[data-pelis="'+i+'"]').value;
      let pelicula = {
        "Nombre": MaysPrimera(document.querySelector(".Nombre").value),
        "Genero": MaysPrimera(document.querySelector(".Genero").value),
        "Año": document.querySelector(".Año").value,
        "Valoracion": document.querySelector(".Valoracion").value,
        "Duracion":document.querySelector(".Duracion").value
      }
      let objeto = {
        "thing": pelicula
      }
      fetch(urld,  {
                    method: 'PUT',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(objeto)
                  })
                  .then(r => load())
                  .catch(error => console.log("error"));
    }
  }
}

 function mostrarfiltros(){
   let tr = document.getElementsByTagName("tr");
   let arraux = new Array(tr.length-1);
   let td = tr[2].getElementsByTagName("td");
   let div = document.querySelector(".fil");
   div.innerHTML = '';
   let o = document.createElement("option");
   let n = document.createTextNode("Todos");
   o.appendChild(n);
   o.setAttribute("value", "Todos");
   div.appendChild(o);
   for (let i = 0; i < tr.length-1; i++) {
    td = tr[i+1].getElementsByTagName("td");
    let auxs = td[2].innerText;
    arraux[i]=auxs;
   }
   arraux.sort();
   for (let j = 0; j < arraux.length; j++) {
     if (j===0){
       let opcion = document.createElement("option");
       let nom = document.createTextNode(arraux[j]);
       opcion.setAttribute("value", arraux[j]);
       opcion.appendChild(nom);
       div.appendChild(opcion)
     }
     else{
       if (arraux[j]!==arraux[j-1]){
         let op = document.createElement("option");
         let n = document.createTextNode(arraux[j]);
         op.setAttribute("value", arraux[j]);
         op.appendChild(n);
         div.appendChild(op);
       }
     }
    }
 }

function filtrar (){
  let tr = document.getElementsByTagName("tr");
  let  td = tr[2].getElementsByTagName("td");
  let filtro = document.querySelector(".filtro").value;
  let genero = td[2].innerText
  if (filtro==="Todos"){
    for (let i = 1; i < tr.length; i++) {
      tr[i].classList.remove("hide")
    }
  }
  else {
    for (let i = 1; i < tr.length; i++) {
      tr = document.getElementsByTagName("tr");
      td = tr[i].getElementsByTagName("td");
      genero = td[2].innerText
      if (genero===filtro){
        tr[i].classList.remove("hide")
      }
      else{
        tr[i].classList.add("hide")
      }
    }
  }
}

function MaysPrimera(string){
  return string.charAt(0).toUpperCase() + string.slice(1);
}
