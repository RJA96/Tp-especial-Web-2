"use strict";


function getGeneros(){
    fetch("api/genero")
}

function mostrarGeneros(){
    let context ={
        generos: jsongeneros
    }
    html = templategenero(context);
}