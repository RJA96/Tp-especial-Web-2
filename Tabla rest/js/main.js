document.querySelector("#cargar").addEventListener("click", create);
document.querySelector("#load").addEventListener("click", load);
document.querySelector("#borrar").addEventListener("click", delate);
document.querySelector("#editar").addEventListener("click", editar);



let url = "http://web-unicen.herokuapp.com/api/groups/hola/probando";
let aux = 0;
function load(){
  let container = document.querySelector("#Peliculas");
  container.innerHTML = "Cargando...";
  fetch(url)
            .then(r => r.json())
            .then(json => { mostrar(container, json);
                    })
            .catch(error => container.innerHTML= "error");
}

function mostrar (container, json){
  let html = "";
  aux = json.peliculas.length;
  for (let i = 0; i < json.peliculas.length; i++) {
    let nombre = json.peliculas[i].thing.Nombre;
    let genero = json.peliculas[i].thing.Genero;
    let año = json.peliculas[i].thing.Año;
    let valoracion = json.peliculas[i].thing.Valoracion;
    let duracion = json.peliculas[i].thing.Duracion;
    let id = json.peliculas[i]._id;
    html += "<tr>";
    html +="<td><input type=checkbox id='"+i+"' value='"+id+"'></td>";
    html+= "<td>"+nombre+"</td>";
    html+= "<td>"+genero+"</td>";
    html+= "<td>"+año+"</td>";
    html+= "<td>"+valoracion+"</td>";

    html+= "<td>"+duracion+"</td>";
    html += "</tr>"
  }

  container.innerHTML = html;

}
function create(){
  let pelicula = {
    "Nombre": document.querySelector("#Nombre").value,
    "Genero": document.querySelector("#Genero").value,
    "Año": document.querySelector("#Año").value,
    "Valoracion": document.querySelector("#Valoracion").value,
    "Duracion":document.querySelector("#Duracion").value
  }
  let objeto = {
    "thing": pelicula
  }
  fetch(url,  {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(objeto)
              })
              .then(r => load())
              .then(aux +=1)

}

function delate (){
  for (let i = 0; i < aux; i++) {
    if (document.getElementById(i).checked){
      let urld = url+"/"+document.getElementById(i).value;
      fetch(urld,  {
                   method: 'DELETE',
                    headers: {'Content-Type': 'application/json'},
                    })
                    .then(r => load())
                    .then(aux-=1)

    }
  }
}

function editar (){
  for (let i = 0; i < aux; i++) {
    if (document.getElementById(i).checked){
      let urld = url+"/"+document.getElementById(i).value;
      let pelicula = {
        "Nombre": document.querySelector("#Nombre").value,
        "Genero": document.querySelector("#Genero").value,
        "Año": document.querySelector("#Año").value,
        "Valoracion": document.querySelector("#Valoracion").value,
        "Duracion":document.querySelector("#Duracion").value
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
    }
  }
}
