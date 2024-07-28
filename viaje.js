
var insertar = document.createElement("marquee");
var contenido = document.createTextNode("30% de descuento en destinos nacionales");
insertar.appendChild(contenido);
insertar.setAttribute("direction","left");
document.getElementById("marquesina").appendChild(insertar);

const formulario = document.querySelector("#formulario")
formulario.addEventListener("submit", validarformulario)

function validarformulario(e){
    e.preventDefault();
    const origen = document.querySelector("#origen").value
    const destino = document.querySelector("#destino").value
    const travel_date = document.querySelector("#travel-date").value
    
    const resultados = document.getElementById("resultados");
    resultados.textContent = "Tu viaje inicia en "+origen+" y finaliza en "+destino+" con fecha "+travel_date
    }















